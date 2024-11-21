<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController; 
use App\Http\Controllers\TaskController; 
use App\Http\Controllers\LoginController;
use App\Http\Middleware\EnsureTokenIsValid;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route :: get ('get-name',[InvoiceController :: class,'jsonResponse']); 
Route :: get ('index',[InvoiceController :: class,'index']); 
Route :: post ('store',[InvoiceController :: class,'store']); 
Route :: get ('show/{id}',[InvoiceController :: class,'show']); 
Route :: put ('update/{id}',[InvoiceController :: class,'update']); 
Route :: delete ('destroy/{id}',[InvoiceController :: class,'destroy']); 
Route :: apiResource('taskmanger',TaskController :: class);

Route :: apiResource('users', UserController :: class)->middleware('auth:sanctum');
Route :: post ('login',[LoginController :: class,'login']); 
Route :: post ('register',[LoginController :: class,'register']); 





