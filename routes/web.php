<?php

use App\Http\Controllers\Admin\{
    PlanController
};

use Illuminate\Support\Facades\Route;



/**
    * Routes Plans
*/
Route::get('/admin/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('/admin/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('/admin/plans', [PlanController::class, 'store'])->name('plans.store');
Route::get('/admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
Route::delete('/admin/plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
Route::any('/admin/plans/search ', [PlanController::class, 'search'])->name('plans.search');


// Route::get('/admin/plans', [Admin\PlanController::class, 'plans.index']);

Route::get('/', function () {
    return view('welcome');
});
