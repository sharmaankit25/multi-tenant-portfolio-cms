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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** 
 * Admin Panel/Dashboard manage Routes
 */
Route::group(['middleware' => 'auth','prefix'=>'manage'], function () {
    Route::resources([
        'achievers' => 'AchieverController',
        'admissions' => 'AdmissionController',
        'albums' => 'AlbumController',
        'challans'=> 'ChallanController',
        'departments' => 'DepartmentController',
        'documents' => 'DocumentController',
        'events'    =>  'EventController',
        'feedbacks' =>  'FeedbackController',
        'feedback_responses'    =>  'FeedbackResponses',
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
        'users'     => 'UserController'
    ]);
});
