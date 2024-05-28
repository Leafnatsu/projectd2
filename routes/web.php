<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController As Dashboard;

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::name('promote.')->prefix('/')->group(function(){

    //     Route::get('/',[Index::class, 'promote'])->name('index');

    //     Route::prefix('index')->group(function() {


        //     });
        // });




Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('promote.index');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menu'])->name('promote.menu');










Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function(){

    Route::get('/', [Dashboard::class, 'product'])->name('index');

    Route::prefix('product')->group(function() {



    });

    // Route::get('product/add', [Dashboard::class, 'product_add'])->name('product.add');

    Route::get('category', [Dashboard::class, 'category'])->name('category');

});
