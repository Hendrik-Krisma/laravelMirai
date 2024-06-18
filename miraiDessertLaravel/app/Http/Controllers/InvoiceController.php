<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $data = Invoice::all();
        return view('Invoices.invoices',compact('data'));
    }

    public function tambahDataInvoice(){
        return view('tambahDataInvoice');
    }
    public function insertInvoice(Request $request){
        Invoice::create($request->all());
        return redirect()->route('invoices');
    }

    public function tampilDataInvoice($id){

        $data = Invoice:: find($id);
        // dd($data);

        return view('tampilDataInvoice', compact('data')); 
    }

    public function updateDataInvoice(Request $request, $id){
        $data = Invoice:: find($id);
        $data->update($request->all()); 
        return redirect()->route('invoices')->with('success', 'Data Berhasil Di Update');

    }

    public function deleteDataInvoice($id){
        $data = Invoice:: find($id);
        $data->delete(); 
        return redirect()->route('invoices')->with('success', 'Data Berhasil Di Hapus');

    }
}




