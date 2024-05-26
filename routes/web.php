<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/user/projectlist',[UserController::class,'projectList'])->name('user.projectList');
Route::get('/user/singleProject/{id}',[UserController::class,'singleProject'])->name('user.singleProject');
Route::get('/user/request/{id}',[UserController::class,'projectRequest'])->name('user.projectRequest');
Route::post('/user/request/store',[UserController::class,'RequestStore'])->name('user.requestStore');
Route::get('/user/signin',[UserController::class,'Signin'])->name('user.signin');
Route::post('/user/signstore',[UserController::class,'Signinstore'])->name('user.signinstore');
Route::get('/user/dashbord',[UserController::class,'userDashbord'])->name('user.dashbord');
Route::get('/user/invoice',[UserController::class,'userInvoice'])->name('user.invoice');
Route::post('/user/search',[UserController::class,'ProjectSearch'])->name('user.search');

Route::get('/admin',[AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/project',[AdminController::class, 'Projects'])->name('admin.projects');
Route::get('/admin/project/create',[AdminController::class, 'projectsCreate'])->name('admin.projects.create');
Route::post('/admin/project/store',[AdminController::class, 'projectStore'])->name('admin.project.store');
Route::get('/admin/project/unit_list/{id}',[AdminController::class, 'projectsUnitList'])->name('admin.projects.unitList');
Route::get('/admin/project/addProperty/{id}',[AdminController::class, 'Addproperty'])->name('admin.projects.addProperty');
Route::post('/admin/property/store',[AdminController::class, 'propertyStore'])->name('admin.property.store');
Route::get('/admin/notification',[AdminController::class, 'Notification'])->name('admin.notification');
Route::get('/admin/adduser/{id}',[AdminController::class, 'AddUser'])->name('admin.addUser');
Route::post('/admin/userstore',[AdminController::class, 'userStore'])->name('admin.userStore');
Route::get('/admin/leadlist',[AdminController::class, 'leadList'])->name('admin.leadlist');
Route::get('/admin/report',[AdminController::class, 'Report'])->name('admin.report');
Route::get('/admin/generatereport/{id}',[AdminController::class, 'generateReport'])->name('admin.generatereport');
Route::post('/admin/reportstore',[AdminController::class, 'reportStore'])->name('admin.reportStore');