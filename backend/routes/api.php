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
Route::get('/feedbacks',[
    'uses'=>'Tester1Controller@getfeedback'
]);
Route::delete('/deletefeedbacks/{id}',[
    'uses'=>'Tester1Controller@deletefeedback'
]);
Route::put('/editfeedbacks/{id}',[
    'uses'=>'Tester1Controller@editfeedback'
]);
