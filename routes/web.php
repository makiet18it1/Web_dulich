<?php

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

Route::get('homepage','home@homepage')->name('homepage');
Route::get('detailtour/{id}','home@detail1')->name('detailtour');
Route::get('login',function()
{
   return view('login');
});
Route::post('login','home@login')->name('login');
Route::get('register',function()
{
   return view('Register');
})->name('register');
Route::post('register1','home@register')->name('register1');
Route::get('domestic','home@domestic')->name('domestic');
Route::get('foreign','home@foreign')->name('foreign');
Route::get('admin','home@admin')->name('admin');

Route::get('addproduct',function()
{
    return view('Addproduct');
})->name('addproduct');
Route::get('menubar',function()
{
  return view('menubar');
})->name('menubar');
Route::post('addproduct1','home@addproduct')->name('addproduct1');

Route::get('logout','home@logout')->name('logout');

Route::post('editproduct','home@editproduct')->name('editproduct');
Route::get('totalarticle1','home@totalarticle')->name('totalarticle1');
Route::get('detailarticle/{id}','home@detailarticle')->name('detailarticle');
Route::get('TotalArticleAdmin','home@TotalArticleAdmin')->name('TotalArticleAdmin');
Route::post('bill','billcontroller@createbill')->name('bill')->middleware('customerlogin');
Route::get('contact',function()
{
   return view('contact');
})->name('contact');
Route::post('xulilienhe','home@xulilienhe')->name('xulilienhe');
Route::get('aboutus',function()
{
   return view('Aboutus');
})->name('aboutus');
Route::post('xulicomment','home@xulicomment')->name('xulicomment');
Route::get('city','billcontroller@city')->name('city');
Route::post('filter','home@filterfoiegn')->name('filter');
Route::post('filter2','home@filterdomestic')->name('filter2');
Route::post('findtour','home@findtour')->name('findtour');
//bill
Route::post('savebill','billcontroller@savebill')->name('savebill');
Route::get('cart','billcontroller@cart')->name('cart')->middleware('customerlogin');
Route::post('deletetour','billcontroller@deletetour')->name('deletetour');
//demo admin
Route::get('admindemo','admincontroller@admin')->name('admindemo')->middleware('adminlogin');
Route::get('totaltouradmin','admincontroller@totaltour')->name('totaltouradmin');
Route::post('addtouradmin','admincontroller@addtouradmin')->name('addtouradmin');
Route::get('deletetouradmin/{id}','admincontroller@deletetouradmin')->name('deletetouradmin');
Route::get('customeradmin','admincontroller@customer')->name('customeradmin');
Route::get('totalarticle','admincontroller@totalarticle')->name('totalarticle');
Route::get('detailarticleadmin/{id}','admincontroller@detailarticle')->name('detailarticleadmin');
Route::post('updatearticleadmin','admincontroller@updatearticle')->name('updatearticleadmin');
Route::get('deletearticleadmin/{id}','admincontroller@deletearticle')->name('deletearticleadmin');
Route::get('addtourinterface','admincontroller@addtourinterface')->name('addtourinterface');
Route::get('totalbilladmin','admincontroller@totalbilladmin')->name('totalbilladmin');
Route::get('detailbilladmin/{id}','admincontroller@detailbill')->name('detailbilladmin');
Route::get('detailtouradmin/{id}','admincontroller@detailtour')->name('detailtouradmin');
Route::post('updatetouradmin1','admincontroller@updatetour1')->name('updatetouradmin1');
Route::post('updatetouradmin2','admincontroller@updatetour2')->name('updatetouradmin2');
Route::get('message','admincontroller@message')->name('message');
Route::get('/', function () {
    return view('welcome');
});
