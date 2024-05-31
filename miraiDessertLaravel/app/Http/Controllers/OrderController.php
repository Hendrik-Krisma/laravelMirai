<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data = Order::all();
        return view('tableOrders',compact('data'));
    }

    public function tambahDataOrder(){
        return view('tambahDataOrder');
    }
    public function insertData(Request $request){
        Order::create($request->all());
        return redirect()->route('penjualanMirai');
    }

    public function tampilkandata($id){

        $data = Order:: find($id);
        // dd($data);

        return view('tampildata', compact('data')); 
    }

    public function updatedata(Request $request, $id){
        $data = Order:: find($id);
        $data->update($request->all()); 
        return redirect()->route('penjualanMirai')->with('success', 'Data Berhasil Di Update');

    }

    public function delete($id){
        $data = Order:: find($id);
        $data->delete(); 
        return redirect()->route('penjualanMirai')->with('success', 'Data Berhasil Di Hapus');

    }
}
