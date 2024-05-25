<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

                Route::get('/Dashboard_Admin',[DashboardController::class ,'index']);

                Route::get('/dashboard/user', function () {
                    return view('dashboard.user.dashboard');
                })->middleware(['auth'])->name('dashboard.user');
                
                Route::get('/dashboard/admin', function () {
                    return view('dashboard.admin.dashboard');
                })->middleware(['auth:admin'])->name('dashboard.admin');


                Route::middleware(['auth:admin'])->group(function(){
                
                    Route::resource('section',SectionController::class);
                });
                
                require __DIR__.'/auth.php';
             
            }
        );