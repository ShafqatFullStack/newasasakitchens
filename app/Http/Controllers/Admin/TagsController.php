<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TagsController extends Controller
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

    public function index(Request $request)
    {
//dd("working");
        return view('admin.tags.index', ['title' => 'Tags List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create', ['title' => 'Add Tag']);
    }

    public function getTags(Request $request)
    {
//        dd("working");
        $columns = array(
//            0 => 'select',
            0 => 'id',
            1 => 'name',
            2 => 'slug',
            7 => 'action'
        );

        $totalData = Tag::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $tags = Tag::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Tag::count();
        } else {
            $search = $request->input('search.value');
            $tags= Tag::where('name', 'like', "%{$search}%")
                ->orWhere('slug', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Tag::where('name', 'like', "%{$search}%")
                ->orWhere('slug', 'like', "%{$search}%")
                ->count();
        }


        $data = array();
//        dd($tags);
        if ($tags) {
            foreach ($tags as $r) {
                $edit_url = route('tags.edit', $r->id);
                $nestedData['select'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="tag_id[]" value="'.$r->id.'">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['name'] = $r->name;
                $nestedData['slug'] = $r->slug;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->slug = $this->createSlug($request->input('name'),0);
        
        $tag->meta_title = $request->input('meta_title');
        $tag->meta_description = $request->input('meta_description');
        $tag->meta_keyword = $request->input('meta_keyword');
        $tag->save();
        Session::flash('success_message', 'Success! Tag has been saved successfully!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $allCategories = Tag::all()->except($id)->pluck('name','id');
        return view('admin.tags.edit', ['title' => 'Update Categories Details','allCategories'=>$allCategories])->withTag($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $tag =  Tag::findOrFail($id);
        $tag->name = $request->input('name');
        $tag->slug = $this->createSlug($request->input('name'),$id);
        $tag->meta_title = $request->input('meta_title');
        $tag->meta_description = $request->input('meta_description');
        $tag->meta_keyword = $request->input('meta_keyword');
        $tag->save();
        Session::flash('success_message', 'Success! Tag has been updated successfully!');
        return redirect()->back();
    }


    public function createSlug($title, $id)
    {
        // Normalize the title
        $slug = Str::slug($title);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }
    protected function getRelatedSlugs($slug, $id )
    {
        return Tag::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        Session::flash('success_message', 'Tag successfully deleted!');
        return redirect()->route('tags.index');
    }

    public function getTagDetail(Request $request){

        $tag = Tag::findOrFail($request->input('id'));
        return view('admin.tags.single', ['title' => 'Tag Details'])->withTag($tag);

    }
    public function DeleteSelectedTags(Request $request)
    {
//        dd("working");
        $input = $request->all();
        $this->validate($request, [
            'tag_id' => 'required',

        ]);
        foreach ($input['tag_id'] as $key => $val) {
//            dd("working");
            Tag::findOrFail($val)->delete();


        }
        Session::flash('success_message', 'Tags successfully deleted!');
        return redirect()->back();

    }
}
