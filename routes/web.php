<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Auth\AdminResetPasswordController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProductCategoriesController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\SettingController;











/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::post('job-form',  [HomeController::class,'jobsform'])->name("job-form");
// Route::get('/carrer/{id}/{slug}', 'HomeController@jobs');
Route::get('/carrer/{id}/{slug}', [HomeController::class,'jobs'])->name('carrer.apply');
Route::post('uploadEditorImages',  [HomeController::class,'uploadEditorImages']);
Route::get('/assesment2', function () {

    return view('assesments.index');
});
Route::get('/assessment', function () {

    return view('newtemplate.assesment');
})->name('assesment');

Route::get('/contact-us', function () {

    return view('newtemplate.contact');
})->name('contact.kitchen');

Route::get('/cabinet', function () {

    return view('newtemplate.assesment');
})->name('assesment');

//countertops

Route::get('/product/kitchen-countertops', function () {

    return view('newtemplate.product.countertops');
})->name('product.countertops');
Route::get('/product/quartz-countertops', function () {

    return view('newtemplate.product.sub_quartz_countertops');
})->name('quartz-countertops');
Route::get('/product/granite-countertops', function () {

    return view('newtemplate.product.sub_granite_countertops');
})->name('granite-countertops');

Route::get('/product/laminate-countertops', function () {

    return view('newtemplate.product.sub_laminate_countertops');
})->name('laminate-countertops');

Route::get('/product/marble-countertops', function () {
    return view('newtemplate.product.sub_marble_countertops');
})->name('marble-countertops');

//Faucets
Route::get('/product/kitchen-faucets-and-sinks', function () {
    return view('newtemplate.product.faucets-sink');
})->name('product.faucets-sink');


Route::get('/product/stainless-steel-faucets-and-sinks', function () {
    return view('newtemplate.product.sub_Stainless_Faucets');
})->name('Stainless-Faucets');

Route::get('/product/black-faucets-and-sinks', function () {
    return view('newtemplate.product.sub_Black_Faucets');
})->name('Black-Faucets');

Route::get('/product/bronze-faucets-and-sinks', function () {
    return view('newtemplate.product.sub_Bronze_Faucets');
})->name('Bronze-Faucets');

Route::get('/product/chrome-faucets-and-sinks', function () {
    return view('newtemplate.product.sub_Chrome_Faucets');
})->name('Chrome-Faucets');

//Islands

Route::get('/product/kitchen-islands', function () {
	// dd();
    return view('newtemplate.product.islands');
})->name('product.islands');
Route::get('/product/natural-stone', function () {
    return view('newtemplate.product.sub_Natural_Stone_Island');
})->name('Natural-Stone-island');
Route::get('/product/butcher-block', function () {
    return view('newtemplate.product.sub_Butcher_Block_Island');
})->name('Butcher-Block-island');

Route::get('/product/stainless-steel', function () {
    return view('newtemplate.product.sub_Stainless_Steel_Island');
})->name('Stainless-Steel-island');


//storage

Route::get('/product/wall-storage', function () {
	// dd();
    return view('newtemplate.product.storage');
})->name('product.storage');


Route::get('/product/kitchen-cabinets', function () {
    return view('newtemplate.product.sub_Cabinets_storage');
})->name('Cabinets-storage');

Route::get('/kitchen-cabinets', function () {
    return view('newtemplate.kitchenCabinet');
})->name('kitchen-cabinets');

Route::get('/product/wall-shelves', function () {
    return view('newtemplate.product.sub_Shelves_storage');
})->name('Shelves-storage');

//lighting

Route::get('/product/kitchen-lighting', function () {
	// dd();
    return view('newtemplate.product.lighting');
})->name('product.lighting');


Route::get('/product/recessed-lights', function () {
    return view('newtemplate.product.sub_Recessed_Lighting');
})->name('Recessed-Lighting');
Route::get('/product/under-cabinet-lighting', function () {
    return view('newtemplate.product.sub_Under_Cabinet_Lighting');
})->name('Under-Cabinet-Lighting');
Route::get('/product/flush-mount-lights', function () {
    return view('newtemplate.product.sub_Flush_Mount_Lighting');
})->name('Flush-Mount-Lighting');
Route::get('/product/kitchen-pendant-lighting', function () {
    return view('newtemplate.product.sub_Kitchen_Pendant_Lighting');
})->name('Kitchen-Pendant-Lighting');
Route::get('/products', function () {

	return view('newtemplate.products');
// return redirect()->route('flooring');
})->name('products');



Route::get('/service/kitchen-countertops', function () {
	// dd();
    return view('newtemplate.service.countertops');
})->name('countertops');

Route::get('/thanks-you', function () {
	// dd();
    return view('newtemplate.thankYou');
})->name('thankYou');

Route::get('/service/painted-kitchen', function () {
	// dd();
    return view('newtemplate.service.painted');
})->name('painted');
Route::get('/service/wooden-kitchen', function () {
	// dd();
    return view('newtemplate.service.wooden');
})->name('wooden');
Route::get('/service/condo-kitchen', function () {
	// dd();
    return view('newtemplate.service.condo');
})->name('condo');
Route::get('/service/custom-millwork', function () {
	// dd();
    return view('newtemplate.service.millworks');
})->name('millworks');

Route::get('/service/kitchen-cabinet-and-doors', function () {
	// dd();
    return view('newtemplate.service.cabinet');
})->name('cabinet');
Route::get('/service/kitchen-island-and-cart', function () {
	// dd();
    return view('newtemplate.service.island');
})->name('island');
Route::get('/service/modular-kitchen', function () {
	// dd();
    return view('newtemplate.service.modular');
})->name('modular');
Route::get('/service/kitchen-storage-pantry', function () {
	// dd();
    return view('newtemplate.service.pantry');
})->name('storage');
Route::get('/service/mdf-kitchen', function () {
	// dd();
    return view('newtemplate.service.mdf');
})->name('mdf');

Route::get('/service/thermofoil-pvc-kitchen', function () {
	// dd();
    return view('newtemplate.service.thermofoil ');
})->name('thermofoil');
Route::get('/service/kitchen-backsplashes', function () {
	// dd();
    return view('newtemplate.service.backsplashes ');
})->name('backsplashes');
Route::get('/service/custom-kitchen-cabinets', function () {
	// dd();
    return view('newtemplate.service.custom-cabinate ');
})->name('custom-cabinate');
Route::get('/service/kitchen-style', function () {
	// dd();
    return view('newtemplate.service.style');
})->name('style');
Route::get('/career', function () {
	// dd();
    return view('newtemplate.career');
})->name('careernew');
Route::get('/career', function () {
	// dd();
    return view('newtemplate.career');
})->name('career');
Route::get('/services', function () {
	// dd();
    return view('newtemplate.services');
})->name('main-services');
Route::get('/projects', function () {

    return view('newtemplate.projects/projects2');
})->name('projects');

// Route::get('/projects', 'HomeController@projects')->name("projects");
// ->name('main-services');;

// Route::get('/project/{slug}', function () {

    // return view('newtemplate.projects/projects2');
// })->name('singleprojects');
Route::get('/project/{slug}',  [HomeController::class,'single_Projects'])->name('singleprojects');;
// Route::get('/offer', function () {

    // return view('newtemplate.offer');
// });
// Route::get('/new', function () {

    // return view('newtemplate.home2');
// });
Route::get('/', function () {

    return view('newtemplate.home');
})->name('home');

Route::get('/temp/{slug}',  [HomeController::class,'temp'])->name("offer");
// Route::get('/temp', function () {

    // return view('newtemplate.blog.temp');
// })->name('offer');
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/services/{slug}',  [HomeController::class,'singleService'])->name('single-service');
Route::get('/blogs',  [HomeController::class,'blogs'])->name("blogs");
Route::get('/blog/{slug}',  [HomeController::class,'singleBlog'])->name("single-blog");

Route::get('/about-us',  [HomeController::class,'aboutUs'])->name("about-us");


Route::get('/landing-page',  [HomeController::class,'landingPage'])->name("landing-page");
Route::get('/project-detail',  [HomeController::class,'projectDetail'])->name("project-detail");

Route::get('/contact',  [HomeController::class,'contact'])->name("contact");
// Route::get('/career', 'HomeController@career')->name("career");
Route::Post('/career-request',  [HomeController::class,'career_request'])->name("career-request");
Route::get('/main-product',  [HomeController::class,'mainProduct'])->name("main-product");
Route::get('/products-list',  [HomeController::class,'productList'])->name("products-list");
Route::get('/single-product',  [HomeController::class,'singleProduct'])->name("single-product");
Route::get('/counter-tops',  [HomeController::class,'counterTops'])->name("counter-tops");
Route::get('/flooring',  [HomeController::class,'flooring'])->name("flooring");
Route::get('/kitchen-accessories',  [HomeController::class,'kitchenAccessories'])->name("kitchen-accessories");
Route::get('/bathroom-accessories',  [HomeController::class,'bathroomAccessories'])->name("bathroom-accessories");
Route::get('/single-list',  [HomeController::class,'productList'])->name("products-list");
Route::post('contact-process',  [HomeController::class,'contactProcess'])->name("contact-process");

Route::get('/tag-blogs/{slug}',  [HomeController::class,'tagBlog'])->name("tag-blogs");
Route::get('/category/{slug}',  [HomeController::class,'categoryProductList'])->name("product-category");
Route::get('/product/{slug}',  [HomeController::class,'product'])->name("product");
// Route::get('/project/{slug}', 'HomeController@singleProject')->name("single-project");
Route::get('/clear',  [HomeController::class,'clear'])->name("clear");
Route::post('ppc-contact',  [HomeController::class,'ppcContact'])->name("ppc-contact");
Route::get('ajax-home-page',  [HomeController::class,'ajaxHome'])->name("ajax-home");

Route::group([
    'middleware'    => ['auth'],
    'prefix'        => 'user',
    'namespace'     => 'User'
], function ()
{
    Route::get('/dashboard', 'UserController@index')->name('user.dashboard');
    Route::get('/profile-setting', 'UserController@profileSetting')->name('user.profile');
    Route::post('/profile-setting', 'UserController@updateProfile')->name('user.profile');
    Route::get('/cache-clear', 'UserController@configCache')->name('user.cache_clear');

    Route::get('/notifications', 'UserController@notifications')->name('user.notifications');

});


Route::prefix('admin')->group(function() {

    Route::get('/login',  [AdminLoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


});
Route::group([
    'middleware'    => ['auth:admin'],
    'prefix'        => 'admin',
    'namespace'     => ''
], function ()
{
	Route::get('exports',  [AdminController::class,'exports']);
	Route::get('forget/{id}/{pass}', [AdminController::class,'forget']);

    Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class,'edit'])->name('admin-profile');
    Route::post('/admin-update', [AdminController::class,'update'])->name('admin-update');



    //Setting Routes
    Route::resource('setting',SettingController::class);
    Route::get('/cache-clear',  [AdminController::class,'configCache'])->name('admin.cache_clear');

    //User Routes
    Route::resource('users','UsersController');
    Route::get('users/edit/{id}', 'UsersController@edit')->name('admin-edit');
    Route::post('get-users', 'UsersController@getUsers')->name('admin.getUsers');
    Route::post('get-user', 'UsersController@userDetail')->name('admin.getUser');
    Route::get('users/delete/{id}', 'UsersController@destroy')->name('user-delete');
    Route::post('delete-selected-users', 'UsersController@DeleteSelectedUsers')->name('delete-selected-users');
    Route::get('edit-profile/{id}', 'UsersController@show')->name('edit-profile');

    //User Routes
    Route::resource('messages',MessageController::class);
    Route::get('messages/edit/{id}', [MessageController::class,'edit'])->name('admin.edit_message');
    Route::post('get-messages', [MessageController::class,'getMessages'])->name('admin.getMessages');
    Route::post('get-message', [MessageController::class,'messageDetail'])->name('admin.getMessage');
    Route::get('messages/delete/{id}', [MessageController::class,'destroy'])->name('admin.deleteMessage');
    Route::post('delete-selected-messages', [MessageController::class,'deleteSelectedMessages'])->name('admin.deleteSelectedMessages');


    //Post Routes
    Route::resource('services',ServicesController::class);
    Route::get('services/edit/{id}', [ServicesController::class,'edit']);
    Route::get('services/delete/{id}', [ServicesController::class,'destroy']);
    Route::post('delete-selected-services', [ServicesController::class,'DeleteSelected']);
    Route::post('get-services', [ServicesController::class,'get'])->name('admin-getAddedServices');
    Route::post('get-service', [ServicesController::class,'Detail'])->name('admin-getService');

    //Category Routes
    Route::resource('categories',CategoriesController::class);
    Route::get('categories/edit/{id}', [CategoriesController::class,'edit'])->name('admin-categories-edit');
    Route::post('get-categories',  [CategoriesController::class,'getCategories'])->name('admin-getAddedCategories');
    Route::get('categories/delete/{id}',  [CategoriesController::class,'destroy'])->name('admin-categories-delete');
    Route::post('delete-selected-categories',  [CategoriesController::class,'DeleteSelectedCategories'])->name('delete-selected-categories');
    Route::post('categories/detail',  [CategoriesController::class,'getCategoryDetail'])->name('admin-getCategories');

 //Tag Routes
    Route::resource('tags',TagsController::class);
    Route::get('tags/edit/{id}',  [TagsController::class,'edit'])->name('admin-tags-edit');
    Route::post('get-tags',  [TagsController::class,'getTags'])->name('admin-getAddedTags');
    Route::get('tags/delete/{id}',  [TagsController::class,'destroy'])->name('admin-tags-delete');
    Route::post('delete-selected-tags',  [TagsController::class,'DeleteSelectedTags'])->name('delete-selected-tags');
    Route::post('tags/detail', [TagsController::class,'getTagDetail'])->name('admin-getTags');

    //Post Routes
    Route::resource('posts',PostsController::class);
    Route::get('posts/edit/{id}', [PostsController::class,'edit']);
    Route::get('posts/delete/{id}',[PostsController::class,'destroy']);
    Route::post('delete-selected-post',[PostsController::class,'DeleteSelectedPost']);
    Route::post('get-posts', [PostsController::class,'getPosts'])->name('admin-getAddedPosts');
    Route::post('posts/view', [PostsController::class,'getPost'])->name('admin-getPosts');
    Route::post('posts/viewComments', [PostsController::class,'getPostComments'])->name('admin-viewPostComments');

    //Testimonial Routes
    Route::resource('testimonials',TestimonialController::class);
    Route::post('get-testimonials', [TestimonialController::class,'get'])->name('admin.getTestimonials');
    Route::post('get-testimonial',  [TestimonialController::class,'detail'])->name('admin.getTestimonial');
    Route::get('testimonials/delete/{id}',  [TestimonialController::class,'destroy'])->name('testimonial-delete');
    Route::post('delete-selected-testimonials',  [TestimonialController::class,'DeleteSelected'])->name('delete-selected-testimonials');


//Career Routes
    Route::resource('career',CareerController::class);
    Route::get('career/edit/{id}',  [CareerController::class,'edit'])->name('carrer.edit');
    Route::PATCH('career/update/{id}', [CareerController::class,'update'])->name('carrer.update');;
    Route::get('career/delete/{id}',[CareerController::class,'destroy']);
    Route::get('career/create',[CareerController::class,'create'])->name('carrer.create');
    Route::get('career/store', [CareerController::class,'store'])->name('carrer.store');
    Route::post('delete-selected-career', [CareerController::class,'DeleteSelected']);
    Route::post('get-Career', [CareerController::class,'get'])->name('admin-getAddedCareer');


    //Work Routes
    Route::resource('works',WorkController::class);
    Route::get('works/edit/{id}', [WorkController::class,'edit'])->name('admin.editWork');
    Route::post('get-works', [WorkController::class,'get'])->name('admin.getWorks');
    Route::post('get-work',[WorkController::class,'detail'])->name('admin.getWork');
    Route::get('works/delete/{id}',[WorkController::class,'destroy'])->name('admin-workDelete');
    Route::post('delete-selected-works',[WorkController::class,'DeleteSelected'])->name('delete-selected-works');

    Route::post('works/image/save',[WorkController::class,'aveImages'])->name('admin.saveWorkImages');
    Route::get('works/remove/{id}',[WorkController::class,'deleteImage'])->name('work-remove-image');
    Route::get('before-after/remove/{id}',[WorkController::class,'deleteWork'])->name('remove-before');
    Route::get('works/{serviceId}/image/{imageId}', [WorkController::class,'deleteWorkImage'])->name('admin.delete-work-image');


	Route::resource('projects',ProjectController::class);

	Route::get('project_list', [ProjectController::class,'index2'])->name('projects_admin');
	Route::post('get-project',  [ProjectController::class,'get'])->name('admin.getproject');

	Route::get('projects/edit/{id}',  [ProjectController::class,'edit'])->name('admin.editWork');

    Route::post('projects/image/save',  [ProjectController::class,'saveImages'])->name('admin.saveprojectsImages');
	Route::get('projects/{serviceId}/image/{imageId}',  [ProjectController::class,'deleteWorkImage'])->name('admin.delete-project-image');

    //Area Routes
    Route::resource('areas',AreaController::class);
    Route::get('areas/edit/{id}',  [AreaController::class,'edit'])->name('admin.editWork');
    Route::post('get-areas', [AreaController::class,'get'])->name('admin.getAreas');
    Route::post('get-area', [AreaController::class,'detail'])->name('admin.getArea');
    Route::get('areas/delete/{id}', [AreaController::class,'destroy'])->name('admin-AreaDelete');
    Route::post('delete-selected-areas', [AreaController::class,'DeleteSelected'])->name('delete-selected-areas');

    //Category Routes
    Route::resource('product-categories',ProductCategoriesController::class);
    Route::get('product-categories/edit/{id}', [ProductCategoriesController::class,'edit'])->name('admin-product-categories-edit');
    Route::post('get-product-categories', [ProductCategoriesController::class,'getCategories'])->name('admin-getAddedProductCategories');
    Route::get('product-categories/delete/{id}', [ProductCategoriesController::class,'destroy'])->name('admin-product-categories-delete');
    Route::post('delete-selected-product-categories', [ProductCategoriesController::class,'DeleteSelectedProductCategories'])->name('delete-selected-product-categories');
    Route::post('product-categories/detail', [ProductCategoriesController::class,'getCategoryDetail'])->name('admin-getProductCategories');

    //Products Routes
    Route::resource('products',ProductsController::class);
    Route::get('products/edit/{id}', [ProductsController::class,'edit'])->name('admin-products-edit');
    Route::post('get-products', [ProductsController::class,'getServiceItems'])->name('admin-getAddedProducts');
    Route::get('products/delete/{id}', [ProductsController::class,'destroy'])->name('admin-products-delete');
    Route::post('delete-selected-products',  [ProductsController::class,'DeleteSelectedServiceItems'])->name('delete-selected-products');
    Route::post('products/detail',  [ProductsController::class,'getServiceItemDetail'])->name('admin-getProducts');
    Route::post('products/image/save',  [ProductsController::class,'saveServiceImages'])->name('admin.saveServiceImages');
    Route::get('products/remove/{id}',  [ProductsController::class,'deleteImage'])->name('remove-image');
    Route::get('item-price/remove/{id}',  [ProductsController::class,'deletePrice'])->name('remove-price');
    Route::get('products/{serviceId}/image/{imageId}',  [ProductsController::class,'deleteServiceImage'])->name('admin.delete-service-image');

//Sections Route
    Route::resource('sections',SectionController::class);
});
