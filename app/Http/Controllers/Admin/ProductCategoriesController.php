<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductCategoriesController extends Controller
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
        $categories = ProductCategory::all();
        return view('admin.product-categories.index', ['title' => 'Categories List','categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-categories.create', ['title' => 'Add Categories']);
    }

    public function getCategories(Request $request)
    {
//        dd("working");
        $columns = array(
//            0 => 'select',
            0 => 'id',
            1 => 'name',
            2 => 'slug',
            7 => 'action'
        );

        $totalData = ProductCategory::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $categories = ProductCategory::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = ProductCategory::count();
        } else {
            $search = $request->input('search.value');
            $categories= ProductCategory::where('name', 'like', "%{$search}%")
                ->orWhere('slug', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = ProductCategory::where('name', 'like', "%{$search}%")
                ->orWhere('slug', 'like', "%{$search}%")
                ->count();
        }


        $data = array();
//        dd($categories);
        if ($categories) {
            foreach ($categories as $r) {
                $edit_url = route('product-categories.edit', $r->id);
                $nestedData['select'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="category_id[]" value="'.$r->id.'">
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
            'slug' => 'required|unique:product_categories,slug',

        ]);
        $category = new ProductCategory();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
//        $category->slug = $this->createSlug($request->input('name'),0);
        $category->save();
        Session::flash('success_message', 'Success! Category has been saved successfully!');
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
        return ProductCategory::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
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
        $category = ProductCategory::findOrFail($id);
        return view('admin.product-categories.edit', ['title' => 'Update Categories Details'])->withCategory($category);
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
            'slug' => 'required|unique:product_categories,slug,'.$id,
        ]);

        $category =  ProductCategory::findOrFail($id);
        $category->slug = $request->input('slug');
        $category->name = $request->input('name');
//        $category->slug = $this->createSlug($request->input('name'),$id);
        $category->save();
        Session::flash('success_message', 'Success! Category has been updated successfully!');
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
        $category = ProductCategory::findOrFail($id);
        $category->delete();
        Session::flash('success_message', 'Category successfully deleted!');
        return redirect()->route('product-categories.index');
    }

    public function getCategoryDetail(Request $request){

        $category = ProductCategory::findOrFail($request->input('id'));
        return view('admin.product-categories.single', ['title' => 'Category Details'])->withCategory($category);

    }
    public function DeleteSelectedCategories(Request $request)
    {
//        dd("working");
        $input = $request->all();
        $this->validate($request, [
            'category_id' => 'required',

        ]);
        foreach ($input['category_id'] as $key => $val) {
//            dd("working");
            ProductCategory::findOrFail($val)->delete();


        }
        Session::flash('success_message', 'Categories successfully deleted!');
        return redirect()->back();

    }
}
