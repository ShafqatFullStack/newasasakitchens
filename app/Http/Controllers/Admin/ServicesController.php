<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;
use File;
use Illuminate\Support\Str;

class ServicesController extends Controller
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
        return view('admin.services.index', ['title' => 'Category List']);
    }
    public function get(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'author',
            3 => 'created_at',
            4 => 'updated_at',
            7 => 'action'
        );

        $totalData = Service::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Service::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Service::count();
        } else {
            $search = $request->input('search.value');
            $posts = Service::where('title', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Service::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if ($posts) {
            foreach ($posts as $r) {
                $edit_url = route('services.edit', $r->id);
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
    public function Detail(Request $request){
        $post = Service::findOrFail($request->input('id'));
        return view('admin.services.single', ['title' => 'Post Details'])->withPost($post);

    }
    public function getPostComments(Request $request){
        $post = Service::findOrFail($request->input('id'));
        return view('admin.services.comment', ['title' => 'Post Comments'])->withPost($post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create', ['title' => 'Create Post']);
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
            'slug' => 'required|alpha_dash|max:255|unique:services,slug',
            'content' => 'required',
        ]);

        $post = new Service();
        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "uploads/post";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time() . $fileName;
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
        $post->question1 = $request->input('question1');
        $post->question2 = $request->input('question2');
        $post->question3 = $request->input('question3');
        $post->answer1 = $request->input('answer1');
        $post->answer2 = $request->input('answer2');
        $post->answer3 = $request->input('answer3');
        $post->comments_enabled = $comments_enabled;
        $post->enabled = $enabled;
        $post->category = $request->input('category');
        $post->save();

        Session::flash('success_message', 'Success! Service has been saved successfully!');
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
        $post =  Service::findOrFail($id);

        return view('admin.services.show', ['title' => 'Edit Post','post'=>$post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Service::findOrFail($id);

        return view('admin.services.edit', ['title' => 'Edit Post','post'=>$post]);
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
        $post =  Service::findOrFail($id);
        if(Str::slug($request->input('slug'))==$post->slug){
            $this->validate($request, [
                'title' => 'required|max:255',
                'content' => 'required',
            ]);
        }else {
            $this->validate($request, [
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|max:255|unique:services,slug',
                'content' => 'required',
            ]);
        }

        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "uploads/post";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time() . $fileName;
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $delete_old_file="uploads/post/".$post->featured_image;
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
        $post->category = $request->input('category');
        $post->question1 = $request->input('question1');
        $post->question2 = $request->input('question2');
        $post->question3 = $request->input('question3');
        $post->answer1 = $request->input('answer1');
        $post->answer2 = $request->input('answer2');
        $post->answer3 = $request->input('answer3');
        $post->enabled = $enabled;
        $post->save();

        Session::flash('success_message', 'Success! Service has been updated successfully!');
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
        $post =  Service::findOrFail($id);
        $post->tags()->detach();
        $post->categories()->detach();
        $post->delete();
        Session::flash('success_message', 'Success! Service successfully deleted!');
        return redirect()->route('post.index');
    }
    public function DeleteSelected(Request $request){
        $this->validate($request, [
            'post' => 'required',
        ]);

        foreach($request->input('post') as $index=>$post_id){
            $post =  Service::findOrFail($post_id);
            $post->tags()->detach();
            $post->categories()->detach();
            $post->delete();
        }
        /*$post->tags()->detach($request->input('post'));
        $post->categories()->detach($request->input('post'));
        $post->whereIn('id',$request->input('post'))->delete();*/
        Session::flash('success_message', 'Success! Service successfully deleted!');
        return redirect()->back();

    }
}
