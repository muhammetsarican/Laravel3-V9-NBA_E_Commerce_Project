<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function productdetail($id)
    {
        $data=Product::find($id);
        $images=image::where('product_id',$id)->get();
        $data=[
            'data'=>$data,
            'image'=>$images,
        ];
        return view('home.product_detail',$data);
    }
    public function allproduct()
    {
        $datalist=Product::all();
        $data=Category::all();
        return view('home.all_products',['data'=>$data,'datalist'=>$datalist]);
    }
    protected $appends=[
        'getparent'
    ];
    public static function getparent($id){
        $data=Category::find($id);

        if($data->parent_id==0){
           return $data->id;
        }
        return HomeController::getparent($data->parent_id);
    }
    public function index(){
        return view('home.index');
    }
    public function allproducts(){
        return view('home.all_products');
    }
    public function about(){
        return view('home.about');
    }
    public function cart(){
        return view('home.shopping_cart');
    }
    public function blog(){
        return view('home.blog');
    }
    public function contact(){
        return view('home.contact');
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $kullanici=$request->only('email','password');
            if(Auth::attempt($kullanici)){
                print_r($kullanici);
                $request->session()->regenerate();
                return view('admin.index')/*->intended('admin')*/;
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records']);
        }
        else {
            return view('admin/login');
        }
    }
    public function adminlogout(Request $veri){
        Auth::logout();
        $veri->session()->invalidate();
        $veri->session()->regenerateToken();
        return redirect()->route('admin_login');
    }
    public function logout(Request $veri){
        Auth::logout();
        $veri->session()->invalidate();
        $veri->session()->regenerateToken();
        return back();
    }
}
