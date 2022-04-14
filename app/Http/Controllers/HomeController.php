<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
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
    public function getproduct(Request $request)
    {
        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data=Product::where('title',$request->input('search'))->first();
            return redirect()->route('product',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }
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
    //routes/web.php sayfasında bulunan route yönlendirmesinin içindeki '[\App\Http\Controllers\HomeController::class, 'index']'
    //bu ifade alttaki 'index' fonksiyonunu çalıştırır. Bu fonksiyon '$produclist' değişkenine 'Product' veritabanından
    // 'Select('id','title','image','price','created_at')' sorgusuyla 'id','title','image','price','created_at' değişkenlerini
    //artan ve rastgele sırayla döndürür.
    public function index(){
        $messagelist=Message::Select('id','name','subject','message','created_at')->orderByDesc('created_at')->inRandomOrder()->get();
        $productlist=Product::Select('id','title','image','price','created_at')->orderByDesc('created_at')->inRandomOrder()->get();
        return view('home.index',['productlist'=>$productlist,'messagelist'=>$messagelist]);
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
        $userinf=User::where('id',1)->first();
        return view('home.contact',['uinf'=>$userinf]);
    }
    public function sendmessage(Request $request){
        $data=new Message;
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->status='Yeni';
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir, Teşekkür ederiz.');
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
                $request->session()->regenerate();
                return redirect()->route('admin_home')/*->intended('admin')*/;
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
