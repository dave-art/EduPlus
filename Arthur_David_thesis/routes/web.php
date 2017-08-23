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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/', 'ClassController@classSelect');
Route::get('/myClass/{classID}', 'CourseController@courseClassTest');

Route::get('/myClass', 'CourseController@courseClassTest');
Route::get('/userProfile', function () {
    return view('userProfile');
});

Route::get('/studentProfile/{studentID}', 'ProfileController@studentPage');

Route::post('/feedbackForm', 'ProfileController@addFeedback');
Route::post('/commitChanges', 'ProfileController@submittedWork'); 

Route::post('/addedUnit', 'CourseController@addUnit');

Route::get('/assignments/{unitsId}', 'AssignmentsController@assignments');

Route::post('/myAssignments', 'AssignmentsController@assignmentsUpload');


Route::get('/menu', 'StudentController@test');
//upload a file
Route::post('/menu', 'CourseController@addProjectDue');

Route::get('/myCourses/{id}', 'CourseController@unitCourseTest');
Route::post('/myCourses', 'CourseController@addProjectDue');

Route::get('/classPostUpload', function () {
    return view('classPostUpload');
});
Route::post('/classPostUpload', 'UploadController@addPost');

Route::get('/classFormUpload', function () {
    return view('classFormUpload');
});;
Route::post('/classFormUpload', 'UploadController@addForm');

Route::get('/mail/{studentID}', 'ProfileController@contactMail');
Route::post('/mail', 'ProfileController@sendMail');


Route::get('/testing/{classID}', 'HomeController@testing');

Route::post('/questionForm', 'QuestionsController@questionUpload');

Route::post('/removeAssignment', 'CourseController@removeProject');

Route::post('/deleteAssignment', 'CourseController@deleteProject');

Route::post('/deleteClassPost', 'CourseController@deletePosts');

Route::post('/deleteForm', 'CourseController@deleteForms');
