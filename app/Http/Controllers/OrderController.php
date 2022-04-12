<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shopcart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Order::where('user_id',Auth::id())->get();
        return view('home.order',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datalist=Shopcart::where('user_id',Auth::id())->get();
        foreach ($datalist as $dl) {
            $rs=Product::where('id',$dl->product_id)->first();
            $rs->stock=$rs->stock-$dl->quantity;
            $data = new Order;
            $data->user_id = Auth::id();
            $data->product_id = $dl->product_id;
            $data->seller_id=$dl->product->user_id;
            $data->order_date=Carbon::now('Europe/Istanbul');
            $data->finish_date=Carbon::now('Europe/Istanbul')->addMonth(3);
            $data->months=Carbon::now('Europe/Istanbul')->addMonth(3);
            $data->price=$dl->product->price;
            $data->total=$dl->product->price;
            $data->ip=$_SERVER["REMOTE_ADDR"];
            $data->payment=$request->input('payment');
            $data->save();
            $rs->save();
            Shopcart::destroy($dl->id);
        }
        return redirect()->route('allproduct')/*->with('success','Siparişiniz Alınmıştır.')*/;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,$id)
    {
        Order::destroy($id);
        return redirect()->back()->with('success','Başarıyla Silindi');
    }
}
