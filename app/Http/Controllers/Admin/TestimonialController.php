<?php
namespace App\Http\Controllers\Admin;

use App\CronJob;
use App\Http\Controllers\Controller;
use App\Permission;
use App\Testimonial;
use Auth;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class TestimonialController extends Controller
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

        return view('admin.testimonials.index', ['title' => 'Testimonial List']);
    }
    public function get(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'designation',
            3 => 'created_at',
            4 => 'action'
        );

        $totalData = Testimonial::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
           $testimonials = Testimonial::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Testimonial::count();
        }else{
            $search = $request->input('search.value');
            $testimonials = Testimonial::where('name', 'like', "%{$search}%")
                ->orWhere('designation','like',"%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Testimonial::where('name', 'like', "%{$search}%")
                ->orWhere('designation','like',"%{$search}%")
                ->count();
        }


        $data = array();

        if($testimonials){
            foreach($testimonials as $r){
                $edit_url = route('testimonials.edit',$r->id);
                $nestedData['id'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="testimonial_id[]" value="'.$r->id.'">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['name'] = $r->name;
                $nestedData['designation'] = $r->designation;
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
        return view('admin.testimonials.create', ['title' => 'Add Testimonial']);
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
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'comment' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();
        $testimonial = new Testimonial();
        $testimonial->name = $input['name'];
        $testimonial->designation = $input['designation'];
        $testimonial->comment = $input['comment'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('/uploads/testimonials');
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('image');
                $image = rand().$image;
                $request->file('image')->move($destinationPath, $image);
                $testimonial->image = $image;

            }
        }
        $testimonial->save();

        Session::flash('success_message', 'Great! Testimonial has been saved successfully!');
        $testimonial->save();
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
       $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.profile-setting', ['title' => 'Edit Profile'])->withTestimonial($testimonial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', ['title' => 'Update Testimonial Details'])->withTestimonial($testimonial);
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
        $testimonial = Testimonial::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'comment' => 'required',
        ]);
        $input = $request->all();
        $testimonial->name = $input['name'];
        $testimonial->designation = $input['designation'];
        $testimonial->comment = $input['comment'];
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('image');
                $destinationPath = public_path('/uploads/testimonials');
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('image');
                $image = rand().$image;
                $request->file('image')->move($destinationPath, $image);
                if (isset($slider->image)) {
                    if (file_exists(public_path('/uploads/testimonials/') . $testimonial->image)) {
                        $delete_old_file = public_path('/uploads/testimonials/') . $testimonial->image;
                        File::delete($delete_old_file);
                    }
                }
                $testimonial->image = $image;

            }
        }
        $testimonial->save();
        Session::flash('success_message', 'Great! Testimonial successfully updated!');
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

       $testimonial = Testimonial::findOrFail($id);
       $testimonial->delete();
        Session::flash('success_message', 'Service successfully deleted!');
        return redirect()->route('testimonials.index');
    }

    public function DeleteSelected(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'testimonial_id' => 'required',
        ]);
        foreach ($input['testimonial_id'] as $index => $id) {
           $testimonial = Testimonial::findOrFail($id);
           $testimonial->delete();
        }
        Session::flash('success_message', 'Testimonials successfully deleted!');
        return redirect()->back();

    }
    public function detail(Request $request)
    {
       $testimonial = Testimonial::findOrFail($request->input('id'));
        return view('admin.testimonials.single', ['title' => 'Testimonial Detail', 'testimonial' =>$testimonial]);
    }


}
