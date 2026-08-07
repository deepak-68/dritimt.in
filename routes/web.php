<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blogs'])->name('blogs');
Route::get('/ceo-message', function () { return view('frontend/ceo-message'); });

Route::post('/store', [StudentController::class, 'store'])->name('student.store');
Route::post('/grievance', [StudentController::class, 'grievance'])->name('student.grievance');
Route::post('/conact', [StudentController::class, 'contact'])->name('student.contact');
Route::post('/request', [StudentController::class, 'request'])->name('student.request');

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
Route::get('/registration/detail/{id}', [RegistrationController::class, 'registration_detail'])->name('registration-detail');
Route::post('/registration/datatable', [RegistrationController::class, 'RegistrationDataTable'])->name('registration.datatable');
Route::post('/regexport',[RegistrationController::class,'regexport'])->name('regexport'); 

Route::get('/grievancelist', [RegistrationController::class, 'grievancelist'])->name('grievancelist');
Route::post('/grievancelist/datatable', [RegistrationController::class, 'GrievanceDataTable'])->name('grievancelist.datatable');
Route::post('/grievancexport',[RegistrationController::class,'grievancexport'])->name('grievancexport'); 
Route::get('/grievance/detail/{id}', [RegistrationController::class, 'grievance_detail'])->name('grievance-detail');

Route::get('/contact', [RegistrationController::class, 'contact'])->name('contact');
Route::post('/contact/datatable', [RegistrationController::class, 'ContactDataTable'])->name('contact.datatable');
Route::post('/contactexport',[RegistrationController::class,'contactexport'])->name('contactexport'); 
Route::get('/contact/detail/{id}', [RegistrationController::class, 'contact_detail'])->name('contact-detail');

Route::get('/student_request', [RegistrationController::class, 'student_request'])->name('student_request');
Route::post('/request/datatable', [RegistrationController::class, 'RequestDataTable'])->name('request.datatable');
Route::post('/requestexport',[RegistrationController::class,'requestexport'])->name('requestexport'); 
Route::get('/request/detail/{id}', [RegistrationController::class, 'request_detail'])->name('request-detail');
// for enquiry form home
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');




Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/setting', [HomeController::class, 'setting'])->name('setting');
Route::get('/header', [HomeController::class, 'header'])->name('header');
Route::put('/header/headerupdate/{id}', [HomeController::class, 'headerupdate']);
Route::get('/footer', [HomeController::class, 'footer'])->name('footer');
Route::put('/footer/footerupdate', [HomeController::class, 'footerupdate']);

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/create', [EventController::class, 'create'])->name('create');
Route::post('/event/store', [EventController::class, 'store'])->name('store');
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('edit');
Route::put('event/update/{id}', [EventController::class, 'update']);
Route::get('event/delete/{id}', [EventController::class, 'delete']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/update/{id}', [BlogController::class, 'update']);
Route::get('blog/delete/{id}', [BlogController::class, 'delete']);
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetail'])->name('blog.detail');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'permissions'=>PermissionController::class
]);
