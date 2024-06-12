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

    public function tampilkanDataOrder($id){
        $data = Order:: find($id);
        // dd($data);
        return view('tampilDataOrder', compact('data')); 
    }

    public function updateDataOrder(Request $request, $id){
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
