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



/**************************************************
 ********         Admin Panel             ********
 **************************************************/
Route::group(["middleware"=>['auth']],function (){
    Route::get('/KT_Admin/dashboard','adminconmtroller@index' );
/**************************************************
  ****************** Contact ************************
 **************************************************/

Route::get('/KT_Admin/contact','admin\contactcontroller@index');
Route::post('/KT_Admin/contact','admin\contactcontroller@update');

/***********************************************
  *****************  End Contact ******************
 ************************************************/
/**************************************************
 ****************** Home ************************
 **************************************************/

Route::get('/KT_Admin/home','admin\homepagecontroller@index');
Route::post('/KT_Admin/home','admin\homepagecontroller@update');

/***********************************************
 *****************  End Home ******************
 ************************************************/

/**************************************************
 ****************** Static ************************
 **************************************************/

Route::get('/KT_Admin/static','admin\staticcontroller@index');
Route::post('/KT_Admin/static','admin\staticcontroller@update');

/***********************************************
 *****************  End Static ******************
 ************************************************/

/**************************************************
 ****************** Department ********************
 **************************************************/

Route::get('/KT_Admin/department','admin\departmentcontroller@index');
Route::get('/KT_Admin/department/Edit/{id}','admin\departmentcontroller@Edit');
Route::get('/KT_Admin/department/Delete/{id}','admin\departmentcontroller@Delete');
Route::get('/KT_Admin/department/Active/{id}','admin\departmentcontroller@Active');
Route::get('/KT_Admin/department/NotActive/{id}','admin\departmentcontroller@NotActive');
Route::post('/KT_Admin/department/update/{id}','admin\departmentcontroller@Update');
Route::post('/KT_Admin/department/store','admin\departmentcontroller@Store');
Route::get('/KT_Admin/Department/Create','admin\departmentcontroller@create');

/************************************************
 *****************  End Department **************
 **************************************************/



/**************************************************
 ****************** Program ********************
 **************************************************/

Route::get('/KT_Admin/Program','admin\programcontrpller@index');
Route::get('/KT_Admin/Program/Edit/{id}','admin\programcontrpller@Edit');
Route::get('/KT_Admin/Program/Delete/{id}','admin\programcontrpller@Delete');
Route::get('/KT_Admin/Program/Active/{id}','admin\programcontrpller@Active');
Route::get('/KT_Admin/Program/NotActive/{id}','admin\programcontrpller@NotActive');
Route::post('/KT_Admin/Program/update/{id}','admin\programcontrpller@Update');
Route::post('/KT_Admin/Program/store','admin\programcontrpller@Store');
Route::get('/KT_Admin/Program/Create','admin\programcontrpller@create');

/************************************************
 *****************  End Program **************
 **************************************************/


/**************************************************
 ****************** Section ********************
 **************************************************/

Route::get('/KT_Admin/Section/{id}','admin\sectioncontroller@index');
Route::get('/KT_Admin/Section/Edit/{id}','admin\sectioncontroller@Edit');
Route::get('/KT_Admin/Section/Delete/{id}','admin\sectioncontroller@Delete');
Route::get('/KT_Admin/Section/Active/{id}','admin\sectioncontroller@Active');
Route::get('/KT_Admin/Section/NotActive/{id}','admin\sectioncontroller@NotActive');
Route::post('/KT_Admin/Section/update/{id}','admin\sectioncontroller@Update');
Route::post('/KT_Admin/Section/store/{id}','admin\sectioncontroller@Store');
Route::get('/KT_Admin/Section/Create/{id}','admin\sectioncontroller@create');

/************************************************
 *****************  End Section **************
 **************************************************/

/**************************************************
 ****************** Magazine ********************
 **************************************************/

Route::get('/KT_Admin/mag','admin\magcontroller@index');
Route::get('/KT_Admin/mag/Edit/{id}','admin\magcontroller@Edit');
Route::get('/KT_Admin/mag/Delete/{id}','admin\magcontroller@Delete');
Route::get('/KT_Admin/mag/Active/{id}','admin\magcontroller@Active');
Route::get('/KT_Admin/mag/NotActive/{id}','admin\magcontroller@NotActive');
Route::post('/KT_Admin/mag/update/{id}','admin\magcontroller@Update');
Route::post('/KT_Admin/mag/store','admin\magcontroller@Store');
Route::get('/KT_Admin/mag/Create','admin\magcontroller@create');



      Route::post('KT_Admin/article_img','admin\magcontroller@image' );
     Route::get('KT_Admin/article_img','admin\magcontroller@image' );
     Route::post('KT_Admin/upload/article_img','admin\magcontroller@uploadimage' );
    Route::post('KT_Admin/article_img','admin\magcontroller@image' );

 /**********************************************
   *****************  End Magazine **************
 ************************************************/

/**************************************************
 ****************** Slider ********************
 **************************************************/

Route::get('/KT_Admin/slider','admin\slidercontroller@index');
Route::get('/KT_Admin/slider/Edit/{id}','admin\slidercontroller@Edit');
Route::get('/KT_Admin/slider/Delete/{id}','admin\slidercontroller@Delete');
Route::post('/KT_Admin/slider/update/{id}','admin\slidercontroller@Update');
Route::post('/KT_Admin/slider/store','admin\slidercontroller@Store');
Route::get('/KT_Admin/slider/Create','admin\slidercontroller@create');

/************************************************
 *****************  End Slider **************
 **************************************************/



/**************************************************
 ****************** Testimonial ********************
 **************************************************/

Route::get('/KT_Admin/testimonial','admin\testimonialcontroller@index');
Route::get('/KT_Admin/testimonial/Edit/{id}','admin\testimonialcontroller@Edit');
Route::get('/KT_Admin/testimonial/Delete/{id}','admin\testimonialcontroller@Delete');
Route::post('/KT_Admin/testimonial/update/{id}','admin\testimonialcontroller@Update');
Route::post('/KT_Admin/testimonial/store','admin\testimonialcontroller@Store');
Route::get('/KT_Admin/testimonial/Create','admin\testimonialcontroller@create');

/************************************************
 *****************  End Testimonial **************
 **************************************************/
/**************************************************
 ****************** Gallery ********************
 **************************************************/

Route::get('/KT_Admin/gallery','admin\gallerycontroller@index');

Route::get('/KT_Admin/gallery/Delete/{id}','admin\gallerycontroller@Delete');

Route::post('/KT_Admin/gallery/store','admin\gallerycontroller@Store');
Route::get('/KT_Admin/gallery/Create','admin\gallerycontroller@create');


    Route::get('/KT_Admin/Flight','ordercontroller@flight');
    Route::post('/KT_Admin/hajj/update/{id}','ordercontroller@h_update');
    Route::post('/KT_Admin/trip/update/{id}','ordercontroller@t_update');
    Route::post('/KT_Admin/flight/update/{id}','ordercontroller@f_update');
    Route::get('/KT_Admin/Hajj','ordercontroller@hajj');
    Route::get('/KT_Admin/Trip','ordercontroller@trip');

/************************************************
 *****************  End Gallery **************
 **************************************************/
Route::get('/KT_admin/logout',function (){
    auth()->logout();
    return view('auth.login');
});
});
//  */
Route::get('/KT_admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/KT_admin/login', 'Auth\LoginController@login');

/**************************************************
 ********           End   Admin Panel     ********
 **************************************************/


/**************************************************
 ********           Web Site           ********
 **************************************************/
Route::get('/{local}','sitecontroller@index');
Route::get('/','sitecontroller@publish');
Route::get('/Offers/{local}','sitecontroller@offers');
Route::get('/Offer/{id}/{local}','sitecontroller@offer');
Route::get('/Contact/{local}','sitecontroller@contact');
Route::get('/About/{local}','sitecontroller@about');
Route::post('/Flight/{local}','sitecontroller@Flight');
Route::post('/Trip/{local}','sitecontroller@Trip');
Route::post('/hajj/{local}','sitecontroller@Hajj');

/**************************************************
 ********          End Web Site           ********
 **************************************************/



