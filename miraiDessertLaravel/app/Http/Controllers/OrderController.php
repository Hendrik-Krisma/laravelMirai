<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function tampilkandata($id){
        $data= Order::find($id);
        
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data= Order::find($id);
        $data->update($request->all());
        return redirect()->routes('tableOrders')->with('success','Data Berhasil Di update');
    }
}
