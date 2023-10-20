<?php
namespace App\Http\Controllers\Admin;

use App\Advantage;
use App\BeforeAfter;
use App\Category;
use App\CronJob;
use App\Http\Controllers\Controller;
use App\Permission;
use App\ProductImage;
use App\Work;
use App\Video;
use App\WorkImage;
use Auth;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use File;

class WorkController extends Controller
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

        return view('admin.works.index', ['title' => 'Slider List']);
    }
    public function get(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'created_at',
            3 => 'action'
        );

        $totalData = Work::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
           $works = Work::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Work::count();
        }else{
            $search = $request->input('search.value');
           $works = Work::where('title', 'like', "%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Work::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if($works){
            foreach($works as $r){
                $edit_url = route('works.edit',$r->id);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where("type",1)->pluck('name','id')->all();
        return view('admin.works.create', ['title' => 'Add Work','categories' => $categories]);
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
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
            'slug' => 'required|alpha_dash|max:255|unique:works,slug',
        ]);
        $input = $request->all();
        $work = new Work();
        $work->title = $input['title'];
        $work->meta_title = $input['meta_title'];
        $work->meta_keyword = $input['meta_keyword'];
        $work->meta_description = $input['meta_description'];
        $work->video_url = $request->input("video_url");
        $work->slug = $request->input("slug");
        $work->features = $input['features'];
//        $work->url = $input['url'];
        $work->description = $input['description'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('/uploads/works');
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
                $serviceImage = new WorkImage();
                $serviceImage->work_id = $work->id;
                $serviceImage->image = $picture;
                $serviceImage->save();
            }
        }
        if(array_key_exists('description_b', $input)){
            foreach ($request->description_b as $key => $title_p) {
                $item_price = new BeforeAfter();
                $item_price->work_id = $work->id;
                $item_price->description = $title_p;

                if ($request->hasFile('before')) {
                    $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
                    $files = $request->file('before');
                    $files1 = $request->file('after');
                    $file = $files[$key];
                    $file1 = $files1[$key];
                    $filename = $file->getClientOriginalName();
                    $filename1 = $file1->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $extension1 = $file1->getClientOriginalExtension();
                    //$file->move('storage/photos', $filename);
                    $check = in_array($extension, $allowedfileExtension);
//                    $check1 = in_array($extension1, $allowedfileExtension1);
                    $fullpath = $filename . '.' . $extension ; // adding full path
                    $fullpath1 = $filename1 . '.' . $extension1 ; // adding full path

                    if ($check) {
                        // removing 2nd loop
                        $destinationPath = public_path('/uploads/works/before');
                        $file->move($destinationPath, $fullpath); // you should include extension here for retrieving in blade later
                        $file1->move($destinationPath, $fullpath1); // you should include extension here for retrieving in blade later
                        $item_price->before = $fullpath;
                        $item_price->after = $fullpath1;
                    }

                }


//                $item_price->status = $request->status[$key];
                $item_price->save();
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

    public function saveImages(Request $request)
    {

        $image = $request->file('file');
        //$imageName = time() . $image->getClientOriginalName();
        $imageName = $image->getClientOriginalName();
//        $imageName = time().$imageName;
        $image->move('uploads/work', $imageName);
        $id  = $this->clean($imageName);
        return response()->json(['imageName' => $imageName,'id'=>$id]);
    }
    public function deleteImage($id){
        $name = explode('.',$id);
        $delete_old_file="uploads/service/".$id;
        File::delete($delete_old_file);
        $id  = $this->clean($id);
        return response()->json(['id' =>$id]);
    }
    public function  clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
    public function deleteWorkImage($product_id, $image_id){
        $productImage =  WorkImage::where('id',$image_id)->first();
        if ($productImage)
        {
            $productImage->delete();
            $delete_old_file="uploads/work/".$productImage->image_name;
            File::delete($delete_old_file);
        }
        Session::flash('success_message', 'Great! Work has been deleted successfully!');
        return redirect()->back()->withSuccess('Work image has been deleted successfuly.');
    }

    public function deleteWork($id)
    {
        $service_item = BeforeAfter::findOrFail($id);
        $service_item->delete();
        Session::flash('success_message', 'Before and After successfully deleted!');
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
       $work = Work::findOrFail($id);
        return view('admin.works.profile-setting', ['title' => 'Edit Profile'])->withWork($work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::where("type",1)->pluck('name','id')->all();

        $work = Work::findOrFail($id);
        return view('admin.works.edit', ['title' => 'Update Work Details','categories' => $categories])->withWork($work);
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
        $work = Work::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'slug' => 'required|unique:works,slug,'.$id,
        ]);
        $input = $request->all();
        $work->title = $input['title'];
        $work->meta_title = $input['meta_title'];
        $work->meta_keyword = $input['meta_keyword'];
        $work->meta_description = $input['meta_description'];
        $work->video_url = $request->input("video_url");
        $work->slug = $request->input("slug");
        $work->features = $input['features'];
        $work->ord = $input['ord'];
//        $work->url = $input['url'];
        $work->description = $input['description'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('/uploads/works');
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('image');
                $image = rand().$image;
                $request->file('image')->move($destinationPath, $image);
                if (isset($slider->image)) {
                    if (file_exists(public_path('/uploads/works/') . $work->image)) {
                        $delete_old_file = public_path('/uploads/works/') . $work->image;
                        File::delete($delete_old_file);
                    }
                }
                $work->image = $image;

            }
        }
        $work->category_id = $request->input('category');
        $work->save();
        if(array_key_exists('uploadedImages', $input)){
            foreach ($request->uploadedImages as $key => $picture) {
                $serviceImage = new WorkImage();
                $serviceImage->work_id = $work->id;
                $serviceImage->image = $picture;
                $serviceImage->save();
            }
        }

        if(array_key_exists('description_b', $input)){
            foreach ($request->description_b as $key => $title_p) {
                $item_price = new BeforeAfter();

                if ($request->before_id[$key] != 0){
                    $item_price = BeforeAfter::findOrFail($request->before_id[$key]);
                }
                $item_price->work_id = $work->id;
                $item_price->description = $title_p;
                if(isset($request->before[$key])) {
                    if ($request->hasFile('before')) {
                        $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
                        $files = $request->file('before');
                        $file = $files[$key];
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension();
                        //$file->move('storage/photos', $filename);
                        $check = in_array($extension, $allowedfileExtension);
                        $fullpath = $filename . '.' . $extension; // adding full path

                        if ($check) {
                            // removing 2nd loop
                            $destinationPath = public_path('/uploads/works/before');
                            $file->move($destinationPath, $fullpath); // you should include extension here for retrieving in blade later
                            $item_price->before = $fullpath;
                        }

                    }
                }
                if(isset($request->after[$key])) {
                    if ($request->hasFile('after')) {
                        $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
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
                            $destinationPath = public_path('/uploads/works/before');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $work = Work::findOrFail($id);
       $work->delete();
        Session::flash('success_message', 'Work successfully deleted!');
        return redirect()->route('works.index');
    }

    public function DeleteSelected(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'work_id' => 'required',
        ]);
        foreach ($input['work_id'] as $index => $id) {
           $work = Work::findOrFail($id);
           $work->delete();
        }
        Session::flash('success_message', 'Works successfully deleted!');
        return redirect()->back();

    }
    public function detail(Request $request)
    {
       $work = Work::findOrFail($request->input('id'));
        return view('admin.works.single', ['title' => 'Work Detail', 'work' =>$work]);
    }


}
