<?php

namespace App\Http\Controllers\Admin;

use App\Advantage;
use App\ItemImage;
use App\ItemKeypoint;
use App\ItemPrice;
use App\ItemQuestion;
use App\ProductCategory;
use App\ProductImage;
use App\Service;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;
use File;

class ProductsController extends Controller
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
        return view('admin.products.index', ['title' => 'Services List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = [''=>"Select Category"] + ProductCategory::pluck('name','id')->toArray();
        return view('admin.products.create', ['title' => 'Add Product','categories'=>$services]);
    }

    public function getServiceItems(Request $request)
    {
//        dd("working");
        $columns = array(
            0 => 'id',
            1 => 'title',
            7 => 'action'
        );

        $totalData = Product::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $service_items = Product::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Product::count();
        } else {
            $search = $request->input('search.value');
            $service_items= Product::where('title', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Product::where('title', 'like', "%{$search}%")
                ->count();
        }


        $data = array();
//        dd($service_items);
        if ($service_items) {
            foreach ($service_items as $r) {
                $edit_url = route('products.edit', $r->id);


                $nestedData['id'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="item_id[]" value="'.$r->id.'">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['title'] = $r->title;
                $nestedData['action'] = '
                                <div>
                                <td>

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
            'title' => 'required',
            'slug' => 'required|unique:products',
            'description' => 'required',
            'feature' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $service = new Product();
        $service->title = $request->input('title');
        $service->slug = $request->input('slug');
        $service->description = $request->input('description');
        $service->price = $request->input('price');
        $service->features = $request->input('feature');
        $service->category_id = $request->input('category');
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
                $service->image = $fileName;

            }
        }
        $service->save();
        if(count($request->uploadedImages )> 0){
            foreach ($request->uploadedImages as $key => $picture) {
                $serviceImage = new ProductImage();
                $serviceImage->product_id = $service->id;
                $serviceImage->image = $picture;
                $serviceImage->save();
            }
        }
        if(count($request->title_p )> 0){
            foreach ($request->title_p as $key => $title_p) {
                $item_price = new Advantage();
                $item_price->product_id = $service->id;
                $item_price->point = $title_p;
                $item_price->status = $request->status[$key];
                $item_price->save();
            }
        }

        Session::flash('success_message', 'Success! Product has been saved successfully!');
        return redirect()->back();

    }


    public function saveServiceImages(Request $request)
    {

        $image = $request->file('file');
        //$imageName = time() . $image->getClientOriginalName();
        $imageName = $image->getClientOriginalName();
//        $imageName = time().$imageName;
        $image->move('uploads/service', $imageName);
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
    public function deleteServiceImage($product_id, $image_id){
        $productImage =  ProductImage::where('id',$image_id)->first();
        if ($productImage)
        {
            $productImage->delete();
            $delete_old_file="uploads/service/".$productImage->image_name;
            File::delete($delete_old_file);
        }
        Session::flash('success_message', 'Great! Product has been deleted successfully!');
        return redirect()->back()->withSuccess('Product image has been deleted successfuly.');
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
        $service_item = Product::findOrFail($id);
        $services = [''=>"Select Products"] + ProductCategory::pluck('name','id')->toArray();
        return view('admin.products.edit', ['title' => 'Update Product Details','service_item'=>$service_item,'categories'=>$services]);
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
            'title' => 'required',
            'slug' => 'required|unique:products,slug,'. $id .'',
            'description' => 'required',
            'features' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $input = $request->all();
        $service = Product::findOrFail($id);
        $service->title = $request->input('title');
        $service->slug = $request->input('slug');
        $service->description = $request->input('description');
        $service->price = $request->input('price');
        $service->features = $request->input('features');
        $service->category_id = $request->input('category');
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
                $delete_old_file="uploads/post/".$service->featured_image;
                File::delete($delete_old_file);
                $service->image = $fileName;
            }
        }
        $service->save();
        if(array_key_exists('uploadedImages', $input)){
            foreach ($request->uploadedImages as $key => $picture) {
                $serviceImage = new productImage();
                $serviceImage->product_id = $service->id;
                $serviceImage->image = $picture;
                $serviceImage->save();
            }
        }
        if(array_key_exists('title_p', $input)){
            foreach ($request->title_p as $key => $title_p) {
                $price_id = $request->price_id[$key];
                if ($price_id != 0){
                    $item_price = Advantage::findOrFail($price_id);
                }else{
                    $item_price = new Advantage();

                }
                $item_price->product_id = $service->id;
                $item_price->point = $title_p;
                $item_price->status = $request->status[$key];
                $item_price->save();
            }
        }

        Session::flash('success_message', 'Success! Product has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_item = Product::findOrFail($id);
        $service_item->delete();
        Session::flash('success_message', 'Product successfully deleted!');
        return redirect()->route('products.index');
    }

    public function deletePrice($id)
    {
        $service_item = Advantage::findOrFail($id);
        $service_item->delete();
        Session::flash('success_message', 'Pros /cons successfully deleted!');
        return redirect()->back();
    }

    public function getServiceItemDetail(Request $request){

        $service_item = Product::findOrFail($request->input('id'));
        return view('admin.products.single', ['title' => 'Product Details','service_item'=>$service_item]);

    }
    public function DeleteSelectedServiceItems(Request $request)
    {
//        dd("working");
        $input = $request->all();
        $this->validate($request, [
            'item_id' => 'required',

        ]);
        foreach ($input['item_id'] as $key => $val) {
//            dd("working");
            Product::findOrFail($val)->delete();


        }
        Session::flash('success_message', 'Products successfully deleted!');
        return redirect()->back();

    }
}
