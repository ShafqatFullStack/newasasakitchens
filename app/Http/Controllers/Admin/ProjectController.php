<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use App\Project;
use App\Work;
use App\ProjectImage;
use App\before_after;
use Illuminate\Support\Facades\Session;
use File;

class ProjectController extends Controller
{
    //
	public function index()
    {

        return view('admin.projects.index', ['title' => 'Slider List']);
    }
	public function index2()
    {
		$project=Project::all();
		return view('admin.projects.index', ['title' => 'Slider List']);
		// dd($project);
        // return view('admin.works.index', ['title' => 'Slider List']);
    }
	 public function get(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'created_at',
            3 => 'action'
        );

        $totalData = Project::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
           $works = Project::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Project::count();
        }else{
            $search = $request->input('search.value');
           $works = Project::where('title', 'like', "%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Project::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if($works){
            foreach($works as $r){
                $edit_url = route('projects.edit',$r->id);
                $nestedData['id'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="work_id[]" value="'.$r->id.'">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['title'] = $r->title;
                $nestedData['created_at'] = date('d-m-Y',strtotime($r->created_at));
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
            "draw"			=> intval($request->input('draw')),
            "recordsTotal"	=> intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"			=> $data
        );

        echo json_encode($json_data);

    }
	public function edit($id)
    {
        $categories = Category::where("type",1)->pluck('name','id')->all();

        $work = Project::findOrFail($id);
        $before_after = before_after::where('work_id','=',$id)->get()->toarray();
        $images = ProjectImage::where('work_id','=',$id)->get();
		// dd($before_after);
        return view('admin.projects.edit', ['title' => 'Update Work Details','categories' => $categories,'before_after'=>$before_after,'images'=>$images])->withWork($work);
    }

	public function create()
    {
        $categories = Category::where("type",1)->pluck('name','id')->all();
        return view('admin.projects.create', ['title' => 'Add Projects','categories' => $categories]);
    }
	 public function store(Request $request)
    {
		$input = $request->all();
		// dd($request);
		
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            // 'image' => 'required',
            'category' => 'required',
            'slug' => 'required|alpha_dash|max:255|unique:projects,slug',
        ]);
        
        $work = new Project();
        $work->title = $input['title'];
        $work->meta_title = $input['meta_title'];
        $work->meta_keyword = $input['meta_keyword'];
        $work->meta_description = $input['meta_description'];
        $work->video_url = $request->input("video_url");
        $work->slug = $request->input("slug");
        $work->features = $input['features'];
        $work->before_description = $input['description_before'];
//        $work->url = $input['url'];
        $work->description = $input['description'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('/uploads/projects');
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('image');
                $image = rand().$image;
                $request->file('image')->move($destinationPath, $image);
                $work->image = $image;

            }
        }
        $work->category_id = $request->input('category');

        $work->save();
        if(array_key_exists('uploadedImages', $input)){
            foreach ($request->uploadedImages as $key => $picture) {
                $serviceImage = new ProjectImage();
                $serviceImage->work_id = $work->id;
                $serviceImage->image = 'gallery/'.$work->id.'/'.$picture;
                $serviceImage->save();
            }
        }
		$before_after=before_after::get();
		// dd($input);
		for($i=1;$i<=6;$i++){
			 // echo $input["section_description_$i"];
			// dd();
			$id= $work->id;
        if(array_key_exists("section_description_$i", $input)){
            // foreach ($request->description_b as $key => $title_p) {
                $item_price = new before_after();
                $item_price->work_id = $work->id;
                $item_price->description = $input["section_description_$i"];
                $item_price->heading = $input["section_head_$i"];
                $item_price->section = $i;
				if ($request->hasFile('section_before_'.$i)) {
                    $allowedfileExtension = ['jpg', 'png'];
                    $files = $request->file("section_before_$i");
					// dd($files);
                    // $files1 = $request->file('after');
                    $file = $files;
                    // $file1 = $files1[$key];
                    $filename = $file->getClientOriginalName();
					// dd($filename );
                    // $filename1 = $file1->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    // $extension1 = $file1->getClientOriginalExtension();
                    //$file->move('storage/photos', $filename);
                    $check = in_array($extension, $allowedfileExtension);
//                    $check1 = in_array($extension1, $allowedfileExtension1);
                    $fullpath = $filename . '.' . $extension ; // adding full path
                    // $fullpath1 = $filename1 . '.' . $extension1 ; // adding full path

                    if ($check) {
                        // removing 2nd loop
                        $destinationPath = public_path('/uploads/projects/before/'.$id);
                        $file->move($destinationPath, $fullpath); // you should include extension here for retrieving in blade later
                        // $file1->move($destinationPath, $fullpath1); // you should include extension here for retrieving in blade later
                        $item_price->before = $id.'/'.$fullpath;
                        // $item_price->after = $fullpath1;
                    }

                }
                if ($request->hasFile("section_after_$i")) {
                    $allowedfileExtension = ['jpg', 'png'];
                    // $files = $request->file('before');
                    $files1 = $request->file("section_after_$i");
                    // $file = $files[$key];
                    $file1 = $files1;
                    // $filename = $file->getClientOriginalName();
                    $filename1 = $file1->getClientOriginalName();
                    // $extension = $file->getClientOriginalExtension();
                    $extension1 = $file1->getClientOriginalExtension();
                    //$file->move('storage/photos', $filename);
                    $check = in_array($extension, $allowedfileExtension);
//                    $check1 = in_array($extension1, $allowedfileExtension1);
                    // $fullpath = $filename . '.' . $extension ; // adding full path
                    $fullpath1 = $filename1 . '.' . $extension1 ; // adding full path

                    if ($check) {
                        // removing 2nd loop
                        $destinationPath = public_path('/uploads/projects/before/'.$id);
                        // $file->move($destinationPath, $fullpath); // you should include extension here for retrieving in blade later
                        $file1->move($destinationPath, $fullpath1); // you should include extension here for retrieving in blade later
                        // $item_price->before = $fullpath;
                        $item_price->after = $id.'/'.$fullpath1;
                    }

                }


//                $item_price->status = $request->status[$key];
                $item_price->save();
            // }
        }
		}
		
		
		
		if(array_key_exists('url', $input)){
            foreach ($request->url as $key => $url) {
                $video = new Video();
                $video->work_id = $work->id;
                $video->url = $url;


//                $video->status = $request->status[$key];
                $video->save();
            }
        }
        Session::flash('success_message', 'Great! Work has been saved successfully!');
        $work->save();
        return redirect()->back();
    }
	public function update(Request $request, $id)
    {
		
        $work = Project::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'slug' => 'required|unique:projects,slug,'.$id,
        ]);
        $input = $request->all();
        $work->title = $input['title'];
        $work->meta_title = $input['meta_title'];
        $work->meta_keyword = $input['meta_keyword'];
        $work->meta_description = $input['meta_description'];
        $work->video_url = $request->input("video_url");
        $work->slug = $request->input("slug");
        $work->features = $input['features'];
        $work->before_description = $input['description_before'];
        $work->ord = $input['ord'];
//        $work->url = $input['url'];
        $work->description = $input['description'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path("/uploads/projects");
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('image');
                $image = rand().$image;
                $request->file('image')->move($destinationPath, $image);
                if (isset($slider->image)) {
                    if (file_exists(public_path("/uploads/projects") . $work->image)) {
                        $delete_old_file = public_path("/uploads/projects") . $work->image;
                        File::delete($delete_old_file);
                    }
                }
                $work->image = $image;

            }
        }
        $work->category_id = $request->input('category');
        $work->save();

		for($i=1;$i<=6;$i++){
			 // echo $input["section_description_$i"];
			// dd();
        if(array_key_exists("section_description_$i", $input)){
            // foreach ($request->description_b as $key => $title_p) {
                // $item_price = new before_after();
				
				   $item_price_array = before_after::where('work_id', $id)
				->where('section', $i)->get()->toarray();
// dd(empty($item_price_array));
				if(!empty($item_price_array)){
           // dd();
				$item_price = before_after::where('work_id', $id)
				->where('section', $i)->firstOrFail();

				}else{
					
					$item_price = new before_after;
					$item_price->work_id= $id;
					$item_price->section= $i;

				}
					
				// $item_price = before_after::where('work_id', $id)
				// ->where('section', $i)->firstOrFail();

// 
                // $item_price->work_id = $work->id;
                $item_price->description = $input["section_description_$i"];
                $item_price->heading = $input["section_head_$i"];
                // $item_price->section = $i;
                // $item_price->i = $i;
				
			// dd($item_price);	
				
				if ($request->hasFile('section_before_'.$i)) {
                    $allowedfileExtension = ['jpg', 'png'];
                    $files = $request->file("section_before_$i");
					// dd($files);
                    // $files1 = $request->file('after');
                    $file = $files;
                    // $file1 = $files1[$key];
                    $filename = $file->getClientOriginalName();
					$extension = $file->getClientOriginalExtension();
                    
                    $check = in_array($extension, $allowedfileExtension);
					$fullpath = $filename . '.' . $extension ; // adding full path
                   
                    if ($check) {
                        // removing 2nd loop
                        $destinationPath = public_path('/uploads/projects/before/'.$id);
                        $file->move($destinationPath, $fullpath); // you should include extension here 
                        $item_price->before = $id.'/'.$fullpath;
                        // $item_price->after = $fullpath1;
                    }

                }
                if ($request->hasFile("section_after_$i")) {
                    $allowedfileExtension = ['jpg', 'png'];
                   
                    $files1 = $request->file("section_after_$i");
                    // $file = $files[$key];
                    $file1 = $files1;
                    // $filename = $file->getClientOriginalName();
                    $filename1 = $file1->getClientOriginalName();
                    // $extension = $file->getClientOriginalExtension();
                    $extension1 = $file1->getClientOriginalExtension();
                    //$file->move('storage/photos', $filename);
                    // $check = in_array($extension, $allowedfileExtension);                 
                    $fullpath1 = $filename1 ; // adding full path
                    // if ($check) {
                       
                        $destinationPath = public_path('/uploads/projects/before/'.$id);
                        $file1->move($destinationPath, $fullpath1); // you should include extension 
                        $item_price->after = $id.'/'.$fullpath1;
                    // }

                }
//                $item_price->status = $request->status[$key];
                $item_price->save();
				// dd($item_price);
            // }
        }
		}
		
		
		
		
        if(array_key_exists('uploadedImages', $input)){
            foreach ($request->uploadedImages as $key => $picture) {
                $serviceImage = new ProjectImage();
                $serviceImage->work_id = $work->id;
                $serviceImage->image = 'gallery/'.$work->id.'/'.$picture;
                $serviceImage->save();
            }
        }

        if(array_key_exists('description_b', $input)){
            foreach ($request->description_b as $key => $title_p) {
                $item_price = new before_after();

                if ($request->before_id[$key] != 0){
                    $item_price = before_after::findOrFail($request->before_id[$key]);
                }
                $item_price->work_id = $work->id;
                $item_price->description = $title_p;
                if(isset($request->before[$key])) {
                    if ($request->hasFile('before')) {
                        $allowedfileExtension = ['jpg', 'png'];
                        $files = $request->file('before');
                        $file = $files[$key];
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension();
                        //$file->move('storage/photos', $filename);
                        $check = in_array($extension, $allowedfileExtension);
                        $fullpath = $filename . '.' . $extension; // adding full path

                        if ($check) {
                            // removing 2nd loop
                            $destinationPath = public_path('/uploads/projects/before');
                            $file->move($destinationPath, $fullpath); // you should include extension here for retrieving in blade later
                            $item_price->before = $fullpath;
                        }

                    }
                }
                if(isset($request->after[$key])) {
                    if ($request->hasFile('after')) {
                        $allowedfileExtension = ['jpg', 'png'];
                        $files1 = $request->file('after');
                        $file1 = $files1[$key];
                        $filename1 = $file1->getClientOriginalName();
                        $extension1 = $file1->getClientOriginalExtension();
                        //$file->move('storage/photos', $filename);
                        $check = in_array($extension1, $allowedfileExtension);
//                    $check1 = in_array($extension1, $allowedfileExtension1);
                        $fullpath1 = $filename1 . '.' . $extension1; // adding full path

                        if ($check) {
                            // removing 2nd loop
                            $destinationPath = public_path('/uploads/projects/before');
                            $file1->move($destinationPath, $fullpath1); // you should include extension here for retrieving in blade later
                            $item_price->after = $fullpath1;
                        }

                    }
                }


//                $item_price->status = $request->status[$key];
                $item_price->save();
            }
        }
        if(array_key_exists('url', $input)){
            foreach($work->videos as $vid){
                $vid->delete();

            }
            foreach ($request->url as $key => $url) {
                $video = new Video();
                $video->work_id = $work->id;
                $video->url = $url;


//                $video->status = $request->status[$key];
                $video->save();
            }
        }
        Session::flash('success_message', 'Great! Work successfully updated!');
        return redirect()->back();
    }
	public function saveImages(Request $request)
    {

        $image = $request->file('file');
        //$imageName = time() . $image->getClientOriginalName();
        $imageName = $image->getClientOriginalName();
//        $imageName = time().$imageName;
		$id  =$request->idimage;
        $image->move('uploads/projects/gallery/'.$id, $imageName);
		// dd($id);
        // $id  = $this->clean($imageName);

        return response()->json(['imageName' => $imageName,'id'=>$id]);
    }
 public function deleteWorkImage($product_id, $image_id){
        $productImage =  ProjectImage::where('id',$image_id)->first();
        if ($productImage)
        {
			// dd($productImage->image);
            $productImage->delete();
            $delete_old_file="uploads/projects/gallery/$product_id/".$productImage->image;
            File::delete($delete_old_file);
        }
        Session::flash('success_message', 'Great! Work has been deleted successfully!');
        return redirect()->back()->withSuccess('Work image has been deleted successfuly.');
    }

}
