<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\CronJob;
use App\Http\Controllers\Controller;
use App\Permission;
use App\Area;
use Auth;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class AreaController extends Controller
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

        return view('admin.areas.index', ['title' => 'Slider List']);
    }
    public function get(Request $request){
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'created_at',
            3 => 'action'
        );

        $totalData = Area::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
           $areas = Area::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Area::count();
        }else{
            $search = $request->input('search.value');
           $areas = Area::where('title', 'like', "%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Area::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if($areas){
            foreach($areas as $r){
                $edit_url = route('areas.edit',$r->id);
                $nestedData['id'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="area_id[]" value="'.$r->id.'">
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
        return view('admin.areas.create', ['title' => 'Add Area']);
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
        ]);

        $input = $request->all();
        $area = new Area();
        $area->title = $input['title'];
        $area->type = $input['type'];


        $area->save();

        Session::flash('success_message', 'Great! Area has been saved successfully!');
        $area->save();
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
       $area = Area::findOrFail($id);
        return view('admin.areas.profile-setting', ['title' => 'Edit Profile'])->withArea($area);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name','id')->all();

        $area = Area::findOrFail($id);
        return view('admin.areas.edit', ['title' => 'Update Area Details','categories' => $categories])->withArea($area);
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
        $area = Area::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $input = $request->all();
        $area->title = $input['title'];
        $area->type = $input['type'];
         $area->save();
        Session::flash('success_message', 'Great! Area successfully updated!');
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

       $area = Area::findOrFail($id);
       $area->delete();
        Session::flash('success_message', 'Area successfully deleted!');
        return redirect()->route('areas.index');
    }

    public function DeleteSelected(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'area_id' => 'required',
        ]);
        foreach ($input['area_id'] as $index => $id) {
           $area = Area::findOrFail($id);
           $area->delete();
        }
        Session::flash('success_message', 'Areas successfully deleted!');
        return redirect()->back();

    }
    public function detail(Request $request)
    {
       $area = Area::findOrFail($request->input('id'));
        return view('admin.areas.single', ['title' => 'Area Detail', 'area' =>$area]);
    }


}
