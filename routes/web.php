<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController; 
use App\Http\Controllers\comp_res; 

use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::group(['namespace'=>'App\Http\Controllers\LoginController','middleware'=>'guest:web'],function(){

route::get('/login',[LoginController::class,'login'])->name ('login');
route::post('/login',[LoginController::class,'signin'])->name ('signin');

//route::get('/sorry',[LoginController::class,'check_avilable'])->name ('sorry');

route::get('/logup',[LoginController::class,'logup'])->name ('logup');
route::post('/logup',[LoginController::class,'signup'])->name ('signup');

});


/// ضيف
route::group(['namespace'=>'App\Http\Controllers\HomeController'],function(){

route::get('/',[HomeController::class,'home'])->name ('home');
################# filtering route in home ##########
route::get('/home2',[HomeController::class,'home_filter'])->name ('home2');
route::get('/home3',[HomeController::class,'vila'])->name ('home3');
route::get('/home4',[HomeController::class,'shaleh'])->name ('home4');
route::get('/home5',[HomeController::class,'ard'])->name ('home5');
route::get('/home6',[HomeController::class,'mahl'])->name ('home6');
route::post('/search',[HomeController::class,'search'])->name ('search');
route::get('/about',[HomeController::class,'about_me'])->name ('about_me');
################# filtering route int home ##########

 ################# filtering route in dash ##########
route::get('/dash_home_filter',[HomeController::class,'home_filter2'])->name ('home61');
route::get('/dash_vila',[HomeController::class,'vila2'])->name ('home7');
route::get('/dash8_shaleh',[HomeController::class,'shaleh2'])->name ('home8');
route::get('/dash_land',[HomeController::class,'ard2'])->name ('home9');
route::get('/dash_market',[HomeController::class,'mahl2'])->name ('home10');
route::get('/dash_all',[HomeController::class,'home_filterall2'])->name ('home11');
// route::post('/search',[HomeController::class,'search2'])->name ('search');
################# filtering route int dash ########## 
////////////////// filter users in dash ////////////////////
/* route::get('/dash_user_active',[HomeController::class,'active'])->name ('active');
route::get('/dash_user_dont_active',[HomeController::class,'dont_active'])->name ('dont_active');
route::get('/dash_user_manger',[HomeController::class,'mange'])->name ('mange');  */
}); 
/////// مع تسجيل دخول 

/* route::group(['namespace'=>'App\Http\Controllers\HomeController','middleware'=>'auth:web'],function(){ */
Route::group(['middleware' => 'auth:web'], function () {
#################### resorse controller route ##################
route::resource('/process',comp_res::class);
#################### end resorse controller route ##############


route::get('/dashboard',[HomeController::class,'dashboard'])->name ('dashboard')->where('type', 1);
route::post('/edit_admin/{id}',[HomeController::class,'edit_admin'])->name ('edit_admin')->where('type', 1);
/* route::get('/edit_admin_for_user/{id}',[HomeController::class,'edit_page'])->name ('admin_for_edit_user')->where('type', 1); */

 

route::get('/Showproduct/{id}' ,[HomeController::class,'show_home_info'])->name ('Showproduct');
route::post('/send_email' ,[HomeController::class,'send_email_to_around'])->name ('send');


route::GET('/AddProduct' ,[HomeController::class,'AddProduct'])->name ('AddProduct');
route::Post('/store' ,[comp_res::class,'store'])->name ('store');

route::GET('/addland' ,[HomeController::class,'addland'])->name ('addland');
route::Post('/storeland' ,[comp_res::class,'storeland'])->name ('storeland');

route::GET('/addmarket' ,[HomeController::class,'addmarket'])->name ('addmarket');
route::Post('/storeaddmarket' ,[comp_res::class,'storeaddmarket'])->name ('storeaddmarket');


//route::get('/profile',[profileController::class,'showprof'])->name ('showprof');
route::get('/profile',[profileController::class,'showProfile'])->name ('showprof');
route::post('/edit/{id}',[comp_res::class,'edit'])->name ('edit2'); 
route::post('/edit_home/{id}',[comp_res::class,'edit_product'])->name ('edit_product'); 
route::post('/edit_home2/{id}',[HomeController::class,'go_to_edit_product'])->name ('go_to_edit_product'); 
/* route::get('/dlelet',[profileController::class,'destroy'])->name ('delete');
route::get('/edit',[profileController::class,'edit'])->name ('edit'); */


route::get('/logout',[HomeController::class,'logout'])->name ('logout');

/* route::post('/logup',[LoginController::class,'signup'])->name ('signup');
route::get('/logup',[LoginController::class,'logup'])->name ('logup');
  */

});