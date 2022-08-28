<?php

use Illuminate\Support\Facades\Route;
use Faker\Generator as Faker;

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
Route::post('upload', [\App\Http\Controllers\MinistryController::class , 'upload'])->name('upload');
Route::get('upload', function (Faker $generator){
    $ms = \App\Models\Ministry::all();
//    dd();
    foreach ($ms as $m){
        $m->update([
            'DEFENDANT' => $generator->firstName.' '.$generator->firstNameMale.' '.$generator->firstNameMale.' '.$generator->lastName
        ]);
    }
    return 'suc';
});
