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

Route::get('/', function () {
    dd(Unique::byModal('App\Organisation','token','alphanumeric',8,'ORG'));
    return view('pages.main.home');
});

Route::get('v/{slug}','MainController@page')->name('main.page');

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
