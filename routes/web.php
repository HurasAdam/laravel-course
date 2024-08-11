<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::controller(JobController::class)->group(function(){
    Route::view("/","home");
    Route::get('/jobs', 'index');
    Route::get('jobs/create',  'create');
    Route::get('jobs/{job}', 'show');
    Route::post("jobs",  'store');
    Route::get('jobs/{job}/edit', 'edit');
    Route::patch('jobs/{job}', 'update');
    Route::delete('jobs/{job}','destroy');
    Route::view("/contact","contact");
});

