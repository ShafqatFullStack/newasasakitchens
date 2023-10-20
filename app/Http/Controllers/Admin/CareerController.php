<?php

namespace App\Http\Controllers\Admin;

use App\Carrer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;
use File;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    //
	public function index()
    {
        //$posts = $post->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.carrer.index', ['title' => 'Category List']);
    }
	public function create()
    {
        return view('admin.carrer.create', ['title' => 'Create Post']);
    }
	public function store(Request $request)
    {

// dd($request);
        $this->validate($request, [
            'title' => 'required|max:255',
            // 'slug' => 'required|alpha_dash|max:255|unique:services,slug',
            // 'content' => 'required',
        ]);

        $post = new Carrer();
        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "uploads/carrer";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time() . $fileName;
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $post->image = $fileName;

            }
        }

        
        $post->title = $request->input('title');
       $slug = str_replace(' ', '-', $request->input('title'));
	    $slug = str_replace('/', 'or', $slug );
	     $user_id = Auth::user()->id;
		 
		// dd($user);
        $post->slug = $slug;
        $post->author = $user_id;
         $post->content = $request->input('content');
        
        $post->description = $request->input('description');
        $post->end_date = $request->input('end');
        $post->start_date = $request->input('start');
        
        $post->save();

        Session::flash('success_message', 'Success! Carrer has been saved successfully!');
        return redirect()->back();
    }
	public function edit($id)
    {
        $post =  Carrer::findOrFail($id);

        return view('admin.carrer.edit', ['title' => 'Edit Post','post'=>$post]);
    }
	 public function update(Request $request, $id)
    {
		  // dd();
        $post =  Carrer::findOrFail($id);
        // dd();
            // $this->validate($request, [
                // 'title' => 'required|max:255',
                // 'slug' => 'required|alpha_dash|max:255|unique:services,slug',
                // 'content' => 'required',
            // ]);
        

        if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "uploads/carrer";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = time() . $fileName;
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $delete_old_file="uploads/carrer/".$post->image;
                File::delete($delete_old_file);
                $post->image = $fileName;
            }
        }

        
		$post->title = $request->input('title');

$slug = str_replace(' ', '-', $request->input('title'));
$slug = str_replace('/', 'or', $slug );
		// dd($slug);
        $post->slug = $slug;
        
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->end_date = $request->input('end_date');
        $post->start_date = $request->input('start_date');
        // dd($request->input('content'));
        $post->save();

      

        Session::flash('success_message', 'Success! Service has been updated successfully!');
        return redirect()->back();
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

        $totalData = Carrer::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Carrer::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Carrer::count();
        } else {
            $search = $request->input('search.value');
            $posts = Carrer::where('title', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Carrer::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if ($posts) {
            foreach ($posts as $r) {
                $edit_url = route('carrer.edit', $r->id);
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
	public function destroy($id)
    {
		// dd();
        $post =  Carrer::findOrFail($id);
        
        $post->delete();
        Session::flash('success_message', 'Success! Service successfully deleted!');
        return redirect()->route('career.index');
    }
}
