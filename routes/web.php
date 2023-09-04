<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/allcandy',[App\Http\Controllers\CandyController::class ,'minue']);
//order
Route::get('/orderto/{id}' ,[App\Http\Controllers\OrdersController::class ,'orderto']);
Route::post('/order' ,[App\Http\Controllers\OrdersController::class ,'order'] ); 
 Route::get('/myorder', [App\Http\Controllers\OrdersController::class ,'myorder']);
 Route::get('/order.show/{id}', [App\Http\Controllers\OrdersController::class ,'show']);
 Route::get('/order.destroy/{id}', [App\Http\Controllers\OrdersController::class ,'destroy']);
 Route::get('/order.edit/{id}', [App\Http\Controllers\OrdersController::class ,'edit']);
 Route::post('/updateorder',[App\Http\Controllers\OrdersController::class ,'updateorder']); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});







//notification
Route::post('/save-token', [App\Http\Controllers\notificationController::class, 'saveToken'])->name('save');
Route::post('/send-notification', [App\Http\Controllers\notificationController::class, 'sendNotification'])->name('send.notification');

//payment
Route::get('pay/{total}', [App\Http\Controllers\fatoorahController::class ,'payorder']);
Route::get('/paymentcallBack', [App\Http\Controllers\fatoorahController::class ,'paymentcallBack']);
//Admin

Route::get('/Adminlogin', [App\Http\Controllers\Admin\AdminController::class ,'adminlogin'])->name('admin.login');
Route::post('/Adminlogin1', [App\Http\Controllers\Admin\AdminController::class ,'saveAdminlogin'])->name('save.admin.login');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/Adminlogin1', [App\Http\Controllers\Admin\AdminController::class ,'saveAdminlogin1'])->name('admin.login1');
Route::get('admin/showaddproduct', [App\Http\Controllers\Admin\AdminCandyController::class ,'showaddproduct']);
Route::post('admin/addproduct', [App\Http\Controllers\Admin\AdminCandyController::class ,'addproduct'])->name('add.product');
Route::get('admin/search', [App\Http\Controllers\SearchController::class ,'search'])->name('web.search');
Route::get('admin/find', [App\Http\Controllers\SearchController::class ,'find'])->name('web.find');
Route::get('admin/editproduct/{id}', [App\Http\Controllers\Admin\AdminCandyController::class ,'editproduct']);
Route::post('admin/updatproduct', [App\Http\Controllers\Admin\AdminCandyController::class,'updatproduct']);

Route::get('admin/deleteproduct/{id}', [App\Http\Controllers\Admin\AdminCandyController::class,'deleteproduct']);
Route::get('admin/users', [App\Http\Controllers\Admin\AdminCandyController::class,'allusers']);
Route::get('admin/deleteuser/{id}', [App\Http\Controllers\Admin\AdminCandyController::class,'deleteuser']);



});