<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    // public function show(){

    //     // $this->getUser();
    //     $name = 'Rethabile';
    //     return view('invoices',['name'=> $name]);

    // }

    public function create(Request $request){

        $data = $request->all();

        Invoice :: create([
            'amount'=> $data['amount'],
            'invoice_number'=> $data['invoice_number'],
        ]);

        // dd($request);//pre-debug

    }

    public function jsonResponse(){
        return response()->json(['NAME'=>'BILE']);
    }

    
    public function index(){
        
        $data = Invoice::get();

        return response()->json(['data'=> $data]);
    }

    public function store(Request $request){
        
        $data = $request->all();

        Invoice :: create([
            'amount'=> $data['amount'],
            'invoice_number'=> $data['invoice_number'],
        ]);

    }

    public function show($id){

        $data = Invoice :: find($id);
        
        return response()->json(['data'=> $data]);
  
    }

    public function update(Request $request,$id){

        $invoice = Invoice :: find($id);
        $data = $request->all();

        $invoice->update([
            'amount'=> $data['amount'],
            'invoice_number'=> $data['invoice_number'],
        ]);
        
        return response()->json(['data'=> 'record successfully created']);
  
    }

     public function destroy($id){

        $invoice = Invoice :: find($id);
        $invoice->delete();
        
        return response()->json(['data'=> 'record successfully deleted']);
  
    }
    
    
}
