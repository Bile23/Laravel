<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController; 

// Route::get('/', function () {
//     return view('welcome');
// });



//-------------------------------
// Anonymous function
//-------------------------------

    // Route :: get ('invoices',function(){

    //     return view('invoices');

    // });

//-------------------------------
// Controller
// php artisian make : controller InvoiceController -- will show under app and http
//-------------------------------


Route :: get ('invoices',[InvoiceController :: class,'show']); // include the controller 
Route :: post ('invoices-create',[InvoiceController :: class,'create']); 
// Route :: get ('get-name',[InvoiceController :: class,'jsonResponse']); 




