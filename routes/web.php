<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EnquiryController;
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

Route::get('/', function () { return view('frontend/index'); });
Route::get('/about', function () { return view('frontend/about'); });
Route::get('/JagadGuruji', function () { return view('frontend/JagadGuruji'); });
Route::get('/aicte-approval-letter', function () { return view('frontend/aicte-approval-letter'); });

Route::get('/chairmans-message', function () { return view('frontend/chairmans-message'); });
Route::get('/directors-message', function () { return view('frontend/directors-message'); });
Route::get('/JagadGuruji', function () { return view('frontend/JagadGuruji'); });
Route::get('/trust', function () { return view('frontend/trust'); });
Route::get('/trustees', function () { return view('frontend/trustees'); });
Route::get('/vision-mission', function () { return view('frontend/vision-mission'); });
Route::get('/school_of_business', function () { return view('frontend/school_of_business'); });
Route::get('/school_of_management', function () { return view('frontend/school_of_management'); });
Route::get('/regulatory-committees', function () { return view('frontend/regulatory-committees'); });
Route::get('/grievance', function () { return view('frontend/grievance'); });
Route::get('/register-online', function () { return view('frontend/register-online'); });
Route::get('/nirf', function () { return view('frontend/nirf'); });
Route::get('/contact-us', function () { return view('frontend/contact-us'); });
Route::get('/alumni', function () { return view('frontend/alumni'); });
Route::get('/placement', function () { return view('frontend/placement'); });
Route::get('/infrastructure', function () { return view('frontend/infrastructure'); });
Route::get('/post-graduate', function () { return view('frontend/post-graduate'); });
Route::get('/under-graduate', function () { return view('frontend/under-graduate'); });
Route::get('/polytechnic', function () { return view('frontend/polytechnic'); });
Route::get('/polytechnic', function () { return view('frontend/polytechnic'); });
Route::get('/press', function () { return view('frontend/press'); });
Route::get('/videos', function () { return view('frontend/videos'); });
Route::get('/album', function () { return view('frontend/album'); });
Route::get('/scholarship', function () { return view('frontend/scholarship'); });
Route::get('/education-loan', function () { return view('frontend/education-loan'); });
Route::get('/photos', function () { return view('frontend/photos'); });
Route::get('/milestone', function () { return view('frontend/milestone'); });
Route::get('/anti-ragging', function () { return view('frontend/anti-ragging'); });
Route::get('/events', [App\Http\Controllers\FrontendController::class, 'events'])->name('events');
Route::get('/ceo-message', function () { return view('frontend/ceo-message'); });

Route::post('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::post('/grievance', [App\Http\Controllers\StudentController::class, 'grievance'])->name('student.grievance');
Route::post('/conact', [App\Http\Controllers\StudentController::class, 'contact'])->name('student.contact');
Route::post('/request', [App\Http\Controllers\StudentController::class, 'request'])->name('student.request');

Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::get('/registration/detail/{id}', [App\Http\Controllers\RegistrationController::class, 'registration_detail'])->name('registration-detail');
Route::post('/registration/datatable', [App\Http\Controllers\RegistrationController::class, 'RegistrationDataTable'])->name('registration.datatable');
Route::post('/regexport',[App\Http\Controllers\RegistrationController::class,'regexport'])->name('regexport'); 

Route::get('/grievancelist', [App\Http\Controllers\RegistrationController::class, 'grievancelist'])->name('grievancelist');
Route::post('/grievancelist/datatable', [App\Http\Controllers\RegistrationController::class, 'GrievanceDataTable'])->name('grievancelist.datatable');
Route::post('/grievancexport',[App\Http\Controllers\RegistrationController::class,'grievancexport'])->name('grievancexport'); 
Route::get('/grievance/detail/{id}', [App\Http\Controllers\RegistrationController::class, 'grievance_detail'])->name('grievance-detail');

Route::get('/contact', [App\Http\Controllers\RegistrationController::class, 'contact'])->name('contact');
Route::post('/contact/datatable', [App\Http\Controllers\RegistrationController::class, 'ContactDataTable'])->name('contact.datatable');
Route::post('/contactexport',[App\Http\Controllers\RegistrationController::class,'contactexport'])->name('contactexport'); 
Route::get('/contact/detail/{id}', [App\Http\Controllers\RegistrationController::class, 'contact_detail'])->name('contact-detail');

Route::get('/student_request', [App\Http\Controllers\RegistrationController::class, 'student_request'])->name('student_request');
Route::post('/request/datatable', [App\Http\Controllers\RegistrationController::class, 'RequestDataTable'])->name('request.datatable');
Route::post('/requestexport',[App\Http\Controllers\RegistrationController::class,'requestexport'])->name('requestexport'); 
Route::get('/request/detail/{id}', [App\Http\Controllers\RegistrationController::class, 'request_detail'])->name('request-detail');
// for enquiry form home
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::get('/header', [App\Http\Controllers\HomeController::class, 'header'])->name('header');
Route::put('/header/headerupdate/{id}', [App\Http\Controllers\HomeController::class, 'headerupdate']);
Route::get('/footer', [App\Http\Controllers\HomeController::class, 'footer'])->name('footer');
Route::put('/footer/footerupdate', [App\Http\Controllers\HomeController::class, 'footerupdate']);

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/event/create', [App\Http\Controllers\EventController::class, 'create'])->name('create');
Route::post('/event/store', [App\Http\Controllers\EventController::class, 'store'])->name('store');
Route::get('/event/edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('edit');
Route::put('event/update/{id}', [EventController::class, 'update']);
Route::get('event/delete/{id}', [EventController::class, 'delete']);

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'permissions'=>PermissionController::class
]);
