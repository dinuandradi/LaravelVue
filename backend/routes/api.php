<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/AddnewProject',[

    'uses'=>'ProjectsController@addproject'
    
]); 

Route::get('/currentprojects',[
    'uses'=>'ProjectsController@getproject'
]);

Route::delete('/deleteproject/{id}',[
    'uses'=>'ProjectsController@deleteproject'
]);

Route::put('/editproject/{id}',[
    'uses'=>'ProjectsController@editproject'
]);

Route::post('/RegisterUser',[
    'uses'=>'PeopleController@adduser'
]);


Route::get('/currentproductions',[
    'uses'=>'ProductionsController@getproductions'
]);







Route::post('/Logint',[
    'uses'=>'PeopleController@loginpeople'
]);

Route::post('/Logintest',[
    'uses'=>'PeopleController@logintest'
]);

Route::post('Loginpass', 'PeopleController@loginpass');

 
Route::middleware('auth:api')->group(function () {
    Route::get('people', 'PeopleController@details');
 
});

// Route::post('/Loginjwt',[
//     'uses'=>'PeopleController@loginjwtplease'
// ]);

Route::post('/Logintestplease',[
    'uses'=>'PeopleController@addusertest'
]);
Route::post('/Tester',[
    'uses'=>'Tester1Controller@submitfeedback'
]);
Route::get('/getListOfTester',[
    'uses'=>'Tester1Controller@index'
]);
Route::get('/getListOfDesigner',[
    'uses'=>'Tester1Controller@getListOfDesigner'
]);
Route::get('/feedbacks',[
    'uses'=>'Tester1Controller@getfeedback'
]);
Route::delete('/deletefeedbacks/{id}',[
    'uses'=>'Tester1Controller@deletefeedback'
]);
Route::put('/editfeedbacks/{id}',[
    'uses'=>'Tester1Controller@editfeedback'
]);
Route::get('/getItem/{id}',[
    'uses'=>'Tester1Controller@getItem'
]);



Route::post('/sendimage',[
    'uses'=>'SendImageController@submitimage'
]);
Route::get('/chooseimage',[
    'uses'=>'SendImageController@getimage'
]);


Route::get('/getTheImage/{name}', array('middleware' => 'cors', 'uses' => 'SendImageController@getTheImage'));

Route::delete('/deleteimage/{id}',[
    'uses'=>'SendImageController@deleteimage'
]);
Route::put('/editimage/{id}',[
    'uses'=>'SendImageController@editimage'
]);


Route::post('/login',[
    'uses'=>'LoginController@login'
]);

Route::get('/showworker/{api_token}','LoginController@showworker');

Route::get('/logout',[
    'uses'=>'LoginController@logout'
]);
Route::post('/register',[
    'uses'=>'LoginController@register'
]);

route::get('/getUsers',[
    'uses'=>'LoginController@getlogin'
]);
route::delete('/deleteUsers/{id}',[
    'uses'=>'LoginController@deleteUsers'
]);
Route::get('/getListOfUsers',[
    'uses'=>'LoginController@index'
]);




Route::get('/getDesigners',[
    'uses'=>'LoginController@getDesigners'
]);
Route::get('/getPSupervisors',[
    'uses'=>'LoginController@getPSupervisors'
]);
Route::get('/getISupervisors',[
    'uses'=>'LoginController@getISupervisors'
]);
Route::get('/getWorkers',[
    'uses'=>'LoginController@getWorkers'
]);
Route::get('/getPTesters',[
    'uses'=>'LoginController@getDesigners'
]);


Route::get('/getworkerProfile3',[
    'uses'=>'LoginController@getworkerProfile3'
]);
Route::get('/getworkerProfile2',[
    'uses'=>'LoginController@getworkerProfile3'
]);
Route::get('/getworkerProfile1',[
    'uses'=>'LoginController@getworkerProfile1'
]);




Route::post('/Addproductiondata',[

    'uses'=>'ProductionsController@addproductions'
    
]);

Route::get('/getResult',[

    'uses'=>'ProductionsController@viewincentives'
    
]);
