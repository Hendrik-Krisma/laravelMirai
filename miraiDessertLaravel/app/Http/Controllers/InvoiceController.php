<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $data = Invoice::all();
        return view('invoices',compact('data'));
    }

    public function tambahDataInvoice(){
        return view('tambahDataInvoice');
    }
    public function insertInvoice(Request $request){
        Invoice::create($request->all());
        return redirect()->route('invoices');
    }
}
