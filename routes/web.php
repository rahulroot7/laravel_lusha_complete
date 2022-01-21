<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('admin-login','LoginController@index');  
Route::post('/login-submit', 'LoginController@dologin')->name('login.submit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// front pages
Route::get('/plans','CustomerController@plans');
Route::get('/enterprise','PagesController@enterprise');
Route::get('/customers','PagesController@customers');
Route::get('/about','PagesController@about');
// career post job
Route::get('/careers','PagesController@career');
Route::get('/careers-job/{id}','PagesController@career_job');
Route::post('/apply-career','PagesController@apply_career_job')->name('career.job');
// end career 
Route::get('/our-data','PagesController@our_data');
Route::get('/data-sources ','PagesController@data_sources');
Route::get('/community-program  ','PagesController@community_program');
Route::get('/terms-of-use','PagesController@terms_of_use');
Route::get('/faq','PagesController@faq');
Route::get('/extension','PagesController@site_extension'); 
Route::get('/prospecting-platform','PagesController@prospecting_platform');
Route::get('/site-api','PagesController@site_api');
Route::get('/site-integrations','PagesController@site_integrations');
Route::get('/term-services','PagesController@term_services');
Route::get('/privacy-policy','PagesController@privacy_policy');
Route::get('/help-support','PagesController@help_support');
Route::get('/api-documents','PagesController@api_documents');
Route::get('/privacy-center','PagesController@privacy_center');

Route::get('/blogs','BlogController@all_blog');
Route::get('/single-blogs/{id}','BlogController@single_blog');
// end front
//Admin common routing start here
Route::get('admin-login','Admin\LoginController@index');  
Route::post('/admin-submit', 'Admin\LoginController@dologin')->name('admin.login.submit');
//Admin common routing end here 

Route::group(['middleware' => 'auth'], function(){
    //Admin Access Only
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard','Admin\DashboardController@index');
    Route::post('/admin-logout', 'Admin\DashboardController@logout')->name('admin.logout');
    Route::get('/admin/api/add-api', 'Admin\AdminController@add_api');
    Route::get('/admin/api/all-api', 'Admin\AdminController@all_api');
    Route::get('/admin/list/all-list', 'Admin\ListController@all_list');
    Route::get('/admin/team/all-team', 'Admin\TeamController@all_team');
    Route::get('/admin/integrations/add-integrations', 'Admin\AdminController@add_integrations');
    Route::get('/admin/integrations/all-integrations', 'Admin\AdminController@all_integrations');
    Route::get('/admin/plan/add-plan', 'Admin\PlanController@add_plan');
    Route::post('admin/plan-store','Admin\PlanController@planstore')->name('plan.store'); 
    Route::get('/admin/plan/all-plan', 'Admin\PlanController@view_plan');
    Route::get('admin/edit-plan/{id}','Admin\PlanController@edit_plan')->name('edit.plan'); 
    Route::put('admin/update-plan/{id}','Admin\PlanController@update_plan')->name('plan.update');
    Route::get('admin/plan-delete/{id}','Admin\PlanController@plan_destroy'); 
    Route::get('/admin/prospecting/all-prospecting', 'Admin\AdminController@all_prospecting');
    Route::get('/admin/contactSale/all-contact-sale', 'ContactSaleController@all_contact_sale');
    Route::post('admin/contactSale/activate/{id}','ContactSaleController@contact_activate');

     // blog route
    Route::get('admin/blog/add-blog','BlogController@add_blog');
    Route::post('admin/blog-store','BlogController@blog_store')->name('blog.store');
    Route::get('admin/blog/all-blog','BlogController@all_blog_admin');
    Route::get('admin/edit-blog/{id}','BlogController@edit_blog')->name('edit.blog');
    Route::get('admin/blog-delete/{id}','BlogController@blog_destroy');
    Route::put('admin/update-blog/{id}','BlogController@update_blog')->name('blog.update');
    // blog category
    Route::get('admin/blog/blog-category','BlogController@blog_category');
    Route::post('admin/blog/create-category','BlogController@create_category');
    Route::get('admin/edit-category/{id}','BlogController@edit_category');
    Route::get('admin/category-delete/{id}','BlogController@category_delete');
    Route::post('admin/update-category','BlogController@update_category');
    // end blog
    // career pages
    Route::get('admin/career/add-career','CareerController@add_career');
    Route::get('admin/career/all-career','CareerController@all_career_admin');
    Route::post('admin/career-store','CareerController@career_store')->name('career.store');
    Route::get('admin/edit-career/{id}','CareerController@edit_career')->name('edit.career');
    Route::get('admin/career-delete/{id}','CareerController@career_delete');
    Route::put('admin/update-career/{id}','CareerController@update_career')->name('career.update');
    Route::get('admin/career-list','CareerController@career_list');
    Route::get('admin/career-user-delete/{id}','CareerController@career_user_delete');
    // end career pages
});

 //Customer Access Only
Route::group(['middleware' => 'customer'], function(){
    Route::get('/dashboard','CustomerController@dashboard');
    Route::get('/prospecting','CustomerController@prospecting');
    Route::get('/list','CustomerController@list');
    Route::get('/team','CustomerController@team');
    Route::get('/integrations','CustomerController@integrations');
    Route::get('/api','CustomerController@api');
    Route::get('/get-free-credits','CustomerController@free_credits');
    Route::get('/add-list','UserListController@create');
    Route::post('/add-list','UserListController@store');
    Route::get('/list-edit/{id}','UserListController@list_edit');
    Route::put('/list-update/{id}','UserListController@list_update');
    Route::get('/list-delete/{id}','UserListController@list_delete');
    Route::post('/contact-sale','ContactSaleController@contact_sales_store');
    Route::get('/labs','CustomerController@lab');
    Route::get('/account','CustomerController@account');
    Route::put('/account-update/{id}','CustomerController@account_update');
    Route::get('/account-reset-password/{id}','CustomerController@account_reset_password');
    Route::get('/support','CustomerController@support');
    Route::get('/join-community','CustomerController@join_community');
    Route::get('/prospecting-filter/{id}','ProspectingFilterController@prospecting_filter');
    Route::post('/add-prospecting','ProspectingFilterController@add_prospecting');
    Route::get('/prospecting-list/{id}','ProspectingFilterController@prospecting_list');
    //  plan checkout
    Route::get('/checkout/{id}','PlanCheckoutController@checkout');
    Route::post('/payment', 'PlanCheckoutController@payStripe');
    // end plan checkout

});

});	

    