<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\SubCategory;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;
use File;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index()
    {
        //$posts = $post->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.posts.index', ['title' => 'Category List']);
    }
    public function getPosts(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'author',
            3 => 'created_at',
            4 => 'updated_at',
            7 => 'action'
        );

        $totalData = Post::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Post::offset($start)
                ->limit($limit)
                // ->orderBy($order, $dir)
                ->orderBy('id', 'DESC')
                ->get();
            $totalFiltered = Post::count();
        } else {
            $search = $request->input('search.value');
            $posts = Post::where('title', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Post::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if ($posts) {
            foreach ($posts as $r) {
                $edit_url = route('posts.edit', $r->id);
                $nestedData['select'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="post_id[]" value="'.$r->id.'">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['title'] = $r->title;
                $nestedData['created_at'] = date('Y-m-d h:m:s a',strtotime($r->created_at));
                $nestedData['updated_at'] = date('Y-m-d h:m:s a',strtotime($r->updated_at));
                $nestedData['action'] = '
                                <div>
                                <td>
                                    <a class="btn btn-info btn-circle" onclick="event.preventDefault();viewInfo('.$r->id.');" title="View User" href="javascript:void(0)">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a title="Edit User" class="btn btn-primary btn-circle"
                                       href="'.$edit_url.'">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-circle" onclick="event.preventDefault();del('.$r->id.');" title="Delete User" href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                                </div>
                            ';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);

    }
	
    public function getPost(Request $request){
        $post = Post::findOrFail($request->input('id'));
        return view('admin.posts.single', ['title' => 'Post Details'])->withPost($post);

    }
    public function getPostComments(Request $request){
        $post = Post::findOrFail($request->input('id'));
        return view('admin.posts.comment', ['title' => 'Post Comments'])->withPost($post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->pluck('name','id')->toArray();
        $tags = Tag::orderBy('name', 'asc')->pluck('name','id')->toArray();
        return view('admin.posts.create', ['title' => 'Create Post','categories'=>$categories,'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|max:255|unique:posts,slug',
            'content' => 'required',
        ]);

        if(empty($request->input('categories'))){
            Session::flash('error_message', 'Error! Please select post category.!');
            return redirect()->back();
        }
        if(empty($request->input('tags'))){
            Session::flash('error_message', 'Error! Please select post tags.!');
            return redirect()->back();
        }
		 $slug = Str::slug($request->input('slug'));
        $post = new Post();
        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "public/uploads/post";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time() . $slug.'.png';
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $post->featured_image = $fileName;

            }
        }

        $enabled = $request->input('enabled');
        if ($enabled == null){
            $enabled = 0;
        }else{
            $enabled = 1;
        }

        $comments_enabled = $request->input('comments_enabled');
        if ($comments_enabled == null){
            $comments_enabled = 0;
        }else{
            $comments_enabled = 1;
        }

        $post->title = $request->input('title');
        $post->meta_title = $request->input('meta_title');
        $post->meta_description = $request->input('meta_description');
        $post->meta_keyword = $request->input('meta_keyword');
        $post->slug = Str::slug($request->input('slug'));
        $post->content = $request->input('content');
        $post->comments_enabled = $comments_enabled;
        $post->enabled = $enabled;
        $post->save();

        $post->categories()->sync($request->categories,false);
        $post->tags()->sync($request->tags,false);
        Session::flash('success_message', 'Success! Post has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->pluck('name','id')->toArray();
        $tags = Tag::orderBy('name', 'asc')->pluck('name','id')->toArray();
        return view('admin.posts.show', ['title' => 'Edit Post','post'=>$post,'categories'=>$categories,'tags'=>$tags]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->pluck('name','id')->toArray();
        $tags = Tag::orderBy('name', 'asc')->pluck('name','id')->toArray();
// dd($post->toarray());
        return view('admin.posts.edit', ['title' => 'Edit Post','post'=>$post,'categories'=>$categories,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post =  Post::findOrFail($id);
        if(Str::slug($request->input('slug'))==$post->slug){
            $this->validate($request, [
                'title' => 'required|max:255',
                'content' => 'required',
            ]);
        }else {
            $this->validate($request, [
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|max:255|unique:posts,slug',
                'content' => 'required',
            ]);
        }
        if(empty($request->input('categories'))){
            Session::flash('error_message', 'Error! Please select post category.!');
            return redirect()->back();
        }
        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "public/uploads/post";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time().$fileName.'.png';
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $delete_old_file="public/uploads/post/".$post->featured_image;
                File::delete($delete_old_file);
                $post->featured_image = $fileName;
            }
        }

        $enabled = $request->input('enabled');
        if ($enabled == null){
            $enabled = 0;
        }else{
            $enabled = 1;
        }

        $comments_enabled = $request->input('comments_enabled');
        if ($comments_enabled == null){
            $comments_enabled = 0;

        }else{
            $comments_enabled = 1;
        }


        $post->title = $request->input('title');
        $post->meta_title = $request->input('meta_title');
        $post->meta_description = $request->input('meta_description');
        $post->meta_keyword = $request->input('meta_keyword');
        $post->slug = Str::slug($request->input('slug'));
        $post->content = $request->input('content');
        $post->comments_enabled = $comments_enabled;
        $post->enabled = $enabled;
        $post->save();

        $post->categories()->sync($request->categories);
        if(isset($request->tags)){
            $post->tags()->sync($request->tags);
        }else {
            $post->tags()->sync(array());
        }

        Session::flash('success_message', 'Success! Post has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Post::findOrFail($id);
        $post->tags()->detach();
        $post->categories()->detach();
        $post->delete();
        Session::flash('success_message', 'Success! Post successfully deleted!');
        return redirect()->route('post.index');
    }
    public function DeleteSelectedPost(Request $request){
        $this->validate($request, [
            'post' => 'required',
        ]);

        foreach($request->input('post') as $index=>$post_id){
            $post = new Post;
            $post =  Post::findOrFail($post_id);
            $post->tags()->detach();
            $post->categories()->detach();
            $post->delete();
        }
        /*$post->tags()->detach($request->input('post'));
        $post->categories()->detach($request->input('post'));
        $post->whereIn('id',$request->input('post'))->delete();*/
        Session::flash('success_message', 'Success! Post successfully deleted!');
        return redirect()->back();

    }
}
