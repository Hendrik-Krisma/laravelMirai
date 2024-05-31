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
}
