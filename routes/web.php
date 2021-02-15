<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterHealthOfficer;
use App\Http\Controllers\Auth\RegisterDonorMoneyController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\MonthlySalaryController;
use App\Http\Controllers\GraphsController;
use App\Http\Controllers\HierarchicalController;
use APP\Http\Controllers\OfficerListsController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view("auth.login");
});
Route::get('/officerlist',function(){
     $all_officers = DB::table('health_officers_generals')->get();
     if(count($all_officers)){
        return view("officerlists", ['officers'=>$all_officers]);
     }
     else{
         return view("officerLists");
     }

});
//donorlist
Route::get('/donorlist',function(){
    $all_officers = DB::table('register_donor_money')->get();
    if(count($all_officers)){
       return view("donorlist", ['donors'=>$all_officers]);
    }
    else{
        return view("donorlist");
    }

});
Route::get('/registerofficer', [RegisterHealthOfficer::class,'index'])->name('registerofficer');
Route::post('/registerofficer', [RegisterHealthOfficer::class,'store']);
Route::get('/registerdonormoney', [RegisterDonorMoneyController::class, 'index'])->name('registerdonormoney');
Route::post('/registerdonormoney', [RegisterDonorMoneyController::class, 'store']);
Route::get('/patientlist', [PatientsController::class ,'index'])->name('patientlist');
Route::get('/money', [MonthlySalaryController::class, 'index'])->name('money');
Route::post('/money', [MoneyDistributedController::class, 'store']);
Route::get('/graphs', [GraphsController::class, 'index'])->name('graphs');
Route::get('/graphical',[HierarchicalController::class, 'index'])->name('graphical');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
