<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Service;
use App\Setting;
use App\Work;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;
use Mail;
use Illuminate\Support\Facades\Session;
use Artisan;
use Illuminate\Support\Facades\URL;
use App\Project;
use App\before_after;
use App\ProjectImage;

use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('theme.index');
    }
    
    public function ajaxHome()
    {
        return view('theme.ajax-home');
    }
    public function projectDetail()
    {
        return view('theme.portfolio-detail');
    }
    public function aboutUs()
    {
        return view('newtemplate.about');
    }
    public function projects()
    {
        return view('theme.projects');
    }
    public function contact()
    {
        return view('theme.contact');
    }
    public function career()
    {
        return view('theme.career');
    }
	public function career_request(Request $request)
    {
		$data=$request->all();
		// dd($data);
		
		   $mail=Mail::send('newtemplate/emails/career', $data, function ($m) use ($data) {
            // $m->from($data['email'], $data['name']);
            $m->to('career@asasaconstruction.com',$data['name'])
			->subject($data['post']);
			
        });
		// dd($request);
        // return view('theme.career');
    }
    public function mainProduct()
    {
        return view('theme.main-product');
    }
    public function productList()
    {
        return view('theme.products-list');
    }
    public function categoryProductList($slug)
    {
        $category = ProductCategory::where("slug",$slug)->first();
        return view('theme.category-products-list',['category'=>$category]);
    }
    public function singleProduct()
    {
        return view('theme.single-product');
    }
    
    public function landingPage()
    {
        return view('theme.landing1');
    }
    public function product($slug)
    {
        $product = Product::where("slug",$slug)->first();
        return view('theme.product',['product'=>$product]);
    }
    public function counterTops()
    {
        return view('theme.counter-tops');
    }
    public function flooring()
    {
        return view('theme.flooring');
    }
    public function kitchenAccessories()
    {
        return view('theme.kitchen-accessories');
    }
    public function bathroomAccessories()
    {
        return view('theme.bathroom-accessories');
    }
    public function singleService($slug){
        $service = Service::where("slug",$slug)->first();
        return view('theme.single-service',['service'=>$service]);
    }
    public function blogs(){
		// dd();
        $blogs = Post::orderBy('id', 'DESC')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('newtemplate.blog.index',['blogs'=>$blogs,'tags'=>$tags,'categories'=>$categories]);
    }
    public function singleBlog($slug){
        $blog = Post::where("slug",$slug)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('newtemplate.blog.single-blog',['blog'=>$blog,'tags'=>$tags,'categories'=>$categories]);
    }
    public function temp($slug){
		// dd();
        $blog = Post::where("slug",$slug)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('newtemplate.blog.temp',['blog'=>$blog,'tags'=>$tags,'categories'=>$categories]);
    }
    public function tagBlog($slug){
        $tg = Tag::where("slug",$slug)->first();
        $blogs = $tg->posts;
        $categories = Category::all();
        $tags = Tag::all();
        return view('theme.tag-blog',['blogs'=>$blogs,'tags'=>$tags,'categories'=>$categories,'tg'=>$tg]);
    }
    public function singleProject($slug){
        $blog = Work::where("slug",$slug)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('theme.portfolio-single',['work'=>$blog,'tags'=>$tags,'categories'=>$categories]);
    }
		
public function single_Project($slug){
        $blog = Work::where("slug",$slug)->first();
        $categories = Category::all();
        $tags = Tag::all();
// dd();
        return view('newtemplate.projects.projects-single',['work'=>$blog,'tags'=>$tags,'categories'=>$categories]);
    }
public function single_Projects($slug){
        $blog = Project::where("slug",$slug)->first();
        $categories = Category::all();
        $tags = Tag::all();
			$id=$blog->id;
// dd($id);
// dd($id);
        $before_after = before_after::where('work_id','=',$id)->get();
        $projectimages = ProjectImage::where('work_id','=',$id)->get();

        return view('newtemplate.projects.single',['work'=>$blog,'tags'=>$tags,'categories'=>$categories,'before_after'=>$before_after,'projectimages'=>$projectimages]);
    }
    public function ppcContact(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        $settings = Setting::pluck('value','name')->toArray();
        if(count($settings)==0){
            $settings = array();
        }
        $to = ['nilofar.j@netmatico.com','googleppc@netmatico.com','zeeshan.m@netmatico.com'];
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' =>$request->input('phone'),
            'logo' => $settings['admin_logo'],
            'to' => $to,

        );

        Mail::send('admin.emails.ppc', $data, function ($message) use ($data) {
            $message->to($data['to'],'')
                ->from('contact@netmatico.com','asasaconstruction.com')
                ->subject('contact-us');
        });
        Session::flash('success_message', 'Great! Email has been Sent successfully!');

        return redirect()->back();
    }

    public function contactProcess(Request $request){
		// dd();
        $this->validate($request, [
            'name' => 'required|max:255',
            'message' => 'required',
            // 'phone' => 'required',
            'email' => 'required|max:255',
        ]);
        $settings = Setting::pluck('value','name')->toArray();
        if(count($settings)==0){
            $settings = array();
        }
		// $to = ['nilofar.j@netmatico.com','googleppc@netmatico.com','zeeshan.m@netmatico.com'];
        $to = ['contact@asasaconstruction.com'];
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'msg' =>$request->input('message'),
            'logo' => $settings['admin_logo'],
            'to' => $to,

        );

        Mail::send('admin.emails.contact', $data, function ($message) use ($data) {
            $message->to($data['to'],'')
                ->from('contact@asasaconstruction.com')
                ->subject('contact-us');
        });
        Session::flash('success_message', 'Great! Email has been Sent successfully!');

        return redirect()->back();
    }
    public function clear(){
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('optimize');
        dd("cache cleared");
    }
	 public function jobsform(Request $request){
	  
	  // dd();
	 $this->validate($request, [
            'firstname' => 'required|max:255',
            'Resume'=> 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|max:255',
        ]);
        $settings = Setting::pluck('value','name')->toArray();
        if(count($settings)==0){
            $settings = array();
        }
		
		// $to = ['nilofar.j@netmatico.com','googleppc@netmatico.com','zeeshan.m@netmatico.com'];
        // $to = ['asifshah2k15@gmail.com'];
		$to = ['career@asasaconstruction.com'];
        $data = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'post' => $request->input('post'),
            'city' =>$request->input('city'),
            'postal' =>$request->input('postal'),
            'state' =>$request->input('state'),
            'address' =>$request->input('address'),
			'logo' => "https://www.asasaconstruction.com/uploads/1859343406logo.svg",
            'to' => $to,
			
			// 'image' => 'https://www.asasaconstruction.com/newtemplate/asasa/main-service/8.jpg',
			// $data['to']
		
           
        );
		
		if($request->file('Resume')){
			 $file = $request->file('Resume');
		 // dd($data);
                $destinationPath = public_path('/uploads/appliction');
                //$extension = $file->getClientOriginalExtension('logo');
                $image = $file->getClientOriginalName('Resume');
                $image = rand().$image;
                $request->file('Resume')->move($destinationPath, $image);
				$data['Resume']='/uploads/appliction/'.$image;
		}
		$return = Mail::send('admin.emails.application', $data, function ($message) use ($data) {
			 $name=$data['firstname'].' '.$data['lastname'];
            $message->to($data['to'],$name)
			// ->attach(public_path($data['image']))
			// ->attach(public_path('newtemplate/asasa/main-service/8.jpg'))
                // ->from('contact@asasaconstruction.com','ASASA Construction')
				 ->from('asifshah4005@gmail.com','ASASA Kitcehn')
                ->subject($data['post']);
				// dd($data);
				if(isset($data['Resume'])){
				$message->attach(public_path($data['Resume']));
				}
				 
				// ;
				// ->attachData($data['image'], array $options = []);
        });
		
		if(count(Mail::failures()) > 0){
		   
			Session::flash('error_message', 'Failed to send  email, please try again.');
		}else{
			Session::flash('success_message', 'Great! Email has been Sent successfully!');
		}
		 return redirect()->back();
		// dd($data);
  } 
  public function jobs(Request $request,$id,$slug){

$data['id']=$id;
return view('newtemplate.jobs',$data);
	 }
	 
	
	public function uploadEditorImages(Request $request){
	  // echo  $fileName = date('Ymdhis',time());
	  // dd();
	  if ($request->hasFile('featured_image')) {
            if ($request->file('featured_image')->isValid()) {
                $this->validate($request, [
                    'featured_image' => 'required|image|mimes:jpeg,png,jpg'
                ]);
                $file = $request->file('featured_image');
                $destinationPath = "uploads/post/content";
                $extension = $file->getClientOriginalExtension('featured_image');
                $fileName = $file->getClientOriginalName('featured_image');
                $fileName = date('Ymdhis',time()).'.'.$extension;
                //renameing image
                $request->file('featured_image')->move($destinationPath, $fileName);
                $url = URL::to('/').'/'.$destinationPath.'/'.$fileName;
				return $url;

            }
        }
  }
}
