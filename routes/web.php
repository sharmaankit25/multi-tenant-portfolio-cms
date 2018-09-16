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

/**
 * Main Website Routes
 */

Route::get('/','MainController@index')->name('main.index');

Route::get('/contact', 'MainController@contact')->name('main.contact');

Route::get('v/{slug}','MainController@page')->name('main.page');

Route::get('admissions','MainController@admission')->name('main.admission');

Route::get('challan','MainController@challan')->name('main.challan');

Route::get('/careers','MainController@careers')->name('main.careers');

Route::get('/gallery','MainController@gallery')->name('main.gallery');

Route::get('/events','MainController@events')->name('main.events');

Route::get('/feedback','MainController@feedback')->name('main.feedback');

Route::get('/notices','MainController@notice')->name('main.notice');
Route::get('/news','MainController@news')->name('main.news');

Route::get('/results','MainController@results')->name('main.results');

Route::get('/staff','MainController@staff')->name('main.staff');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin Panel/Dashboard manage Routes
 */
Route::group(['middleware' => 'auth','prefix'=>'manage'], function () {
    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resources([
        'achievers' => 'AchieverController',
        'admissions' => 'AdmissionController',
        'albums' => 'AlbumController',
        'challans'=> 'ChallanController',
        'departments' => 'DepartmentController',
        'documents' => 'DocumentController',
        'events'    =>  'EventController',
        'feedbacks' =>  'FeedbackController',
        'feedback_responses'    =>  'FeedbackResponseController',
        'jobs'  =>  'JobController',
        'notices'   => 'NoticeController',
        'organisations' => 'OrganisationController',
        'pages' => 'PageController',
        'permissions'   => 'PermissionController',
        'photos'    =>  'PhotoController',
        'results'   =>  'ResultController',
        'roles' =>  'RoleController',
        'sliders'   =>  'SliderController',
        'staffs'    =>  'StaffController',
        'staff_types'   =>  'StaffTypeController',
        'standards' =>  'StandardController',
        // 'users'     => 'UserController'
    ]);
});
