<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\True_;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static  function getshopcart(){
        return Shopcart::where('user_id',Auth::id())->get();
    }
    public static  function countshopcart(){
        return Shopcart::where('user_id',Auth::id())->count();
    }
    public static  function gettotal(){
        $total=0.00;
        $data=Shopcart::where('user_id',Auth::id())->get();
        foreach ($data as $dl)
        {
            $total += $dl->quantity * $dl->product->price;
        }
        return $total;
    }
    public function index()
    {
        $datalist=Shopcart::where('user_id',Auth::id())->get();
        return view('home.shopping_cart',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data=Shopcart::where('product_id',$id)->where('user_id',Auth::id())->first();
        if($data){
            $data->quantity=$data->quantity+$request->input('quantity');
        }else{
            $data=new Shopcart;
            $data->product_id=$id;
            $data->user_id=Auth::id();
            $data->quantity=$request->input('quantity');
        }
        $data->save();
        return redirect()->back()->with('success','Ürün sepete eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(ShopcartController $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopcartController $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopcartController $shopcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopcartController $shopcart,$id)
    {
        Shopcart::destroy($id);
        return redirect()->back();
    }
}
