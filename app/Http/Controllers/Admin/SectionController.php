<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Section;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::pluck('name','id')->toArray();
        return view('admin.sections.index',['sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        switch ($section->id){
            case 1:
                return $this->sectionOne($section->id);
            break;
            case 2:
                return $this->sectionTwo($section->id);
            break;
            case 3:
                return $this->sectionThree($section->id);
            break;
            case 4:
                return $this->sectionFour($section->id);
            break;
            case 5:
                return $this->sectionFive($section->id);
            break;
            case 6:
                return $this->sectionSix($section->id);
            break;
            case 7:
                return $this->sectionSeven($section->id);
            break;
            case 8:
                return $this->sectionEight($section->id);
            break;
            case 9:
                return $this->sectionNine($section->id);
            break;
            case 10:
                return $this->sectionTen($section->id);
            break;
            case 11:
                return $this->sectionEleven($section->id);
            break;
            case 12:
                return $this->sectionTwelve($section->id);
            break;
            case 13:
                return $this->sectionThirteen($section->id);
            break;
            case 14:
                return $this->sectionFourteen($section->id);
            break;
            case 15:
                return $this->sectionFifteen($section->id);
            break;
            case 16:
                return $this->sectionSixteen($section->id);
            break;
            case 17:
                return $this->sectionSeventeen($section->id);
            break;
            case 18:
                return $this->sectionEighteen($section->id);
            break;
            case 19:
                return $this->sectionNineteen($section->id);
            break;
            case 20:
                return $this->sectionTwenty($section->id);
            break;
            case 21:
                return $this->sectionTwentyone($section->id);
            break;
            case 22:
                return $this->sectionTwentytwo($section->id);
            break;
            case 23:
                return $this->sectionTwentythree($section->id);
            break;
            case 24:
                return $this->sectionTwentyfour($section->id);
            break;
            case 25:
                return $this->sectionTwentyfive($section->id);
            break;
            case 26:
                return $this->sectionTwentysix($section->id);
            break;
            case 27:
                return $this->sectionTwentyseven($section->id);
            break;
            case 28:
                return $this->sectionTwentyeight($section->id);
            break;
            case 29:
                return $this->sectionTwentynine($section->id);
            break;
            case 30:
                return $this->sectionThirty($section->id);
            break;
            case 31:
                return $this->sectionThirtyOne($section->id);
            break;
            case 32:
                return $this->sectionThirtyOne($section->id);
            break;
            case 33:
                return $this->sectionThirtyOne($section->id);
            break;

        }

    }

    public function sectionOne($id){

        $data_file = public_path('data/home_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);

    }
    public function sectionTwo($id){
        $data_file = public_path('data/about_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionThree($id){

        $data_file = public_path('data/product_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionFour($id){

        $data_file = public_path('data/product_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionFive($id){

        $data_file = public_path('data/product_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionSix($id){

        $data_file = public_path('data/product_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionSeven($id){

        $data_file = public_path('data/simple_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionEight($id){

        $data_file = public_path('data/simple_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionNine($id){

        $data_file = public_path('data/simple_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTen($id){

        $data_file = public_path('data/simple_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionEleven($id){

        $data_file = public_path('data/specialities_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwelve($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionThirteen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionFourteen($id){

        $data_file = public_path('data/about_main_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionFifteen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionSixteen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionSeventeen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionEighteen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionNineteen($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwenty($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwentyone($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwentytwo($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwentythree($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwentyfour($id){

        $data_file = public_path('data/about_main_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    public function sectionTwentyfive($id){

        $data_file = public_path('data/privacy_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }

    public function sectionTwentysix($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }

    public function sectionTwentyseven($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }

    public function sectionTwentyeight($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }


    public function sectionTwentynine($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }

    public function sectionThirty($id){

        $data_file = public_path('data/web_development_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }

    public function sectionThirtyOne($id){

        $data_file = public_path('data/simple_columns.json');
        $content = File::get($data_file);
        $columns = json_decode($content,TRUE);
        $section = Section::findOrFail($id);
        $storedColumns = json_decode($section->content,TRUE);
        return view('admin.sections.edit',['section'=>$section,'all_columns'=>$columns,'storedColumns'=>$storedColumns]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {

        $storedColumns = json_decode($section->content,TRUE);
        $data = array();
        if(!empty($request->file())){

            foreach($request->file() as $name=>$file_data){


                if ($request->hasFile($name)) {

                    if ($request->file($name)->isValid()) {

                        $this->validate($request, [
                            $name => 'required|image|mimes:jpeg,png,jpg,svg'
                        ]);

                        $file = $request->file($name);

                        $fileName = $file->getClientOriginalName();

                        $newFileName = rand().$fileName;

                        $destinationPath = public_path('/uploads/');

                        $request->file($name)->move($destinationPath,$newFileName);

                        if (isset($storedColumns[$name])) {
                            if (file_exists(public_path('/uploads/'.$storedColumns[$name]))) {

                                $delete_old_file = public_path('/uploads/'.$storedColumns[$name]);

                                File::delete($delete_old_file);
                            }
                        }


                        $data[$name] = $newFileName;

                    }


                }


            }

        }

        $input = $request->all();


        unset($input['_token']);

        unset($input['_method']);
        if(count($data)>0){
            $input = array_merge($input,$data);
        }


        $section->content =  json_encode($input);

        $section->save();


        Session::flash('success_message', 'Great! Section has been saved successfully!');
        return redirect()->back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Section  $section
   * @return \Illuminate\Http\Response
   */
    public function destroy(Section $section)
    {
        //
    }
}
