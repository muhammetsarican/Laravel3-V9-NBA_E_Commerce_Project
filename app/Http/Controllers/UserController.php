<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user_profile');
    }
    public function login()
    {
        return view('home.login');
    }
    public function register()
    {
        return view('home.register');
    }
//    public function logincheck(Request $request)
//    {
//        $data=User::find(3);
//        if($data->email==$request->input('email'))
//        {
//            if( $data->password==$request->input('password')){
//                print_r($data->name);
//                return view('home.index')/*->intended('admin')*/;
//            }
//            return back()->withErrors(['email'=>'The provided credentials do not match our records']);
//        }
//        else {
//            return view('home/login');
//        }
//    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $kullanici=$request->only('email','password');
            if(Auth::attempt($kullanici)){
                print_r($kullanici);
                $request->session()->regenerate();
                return view('home.index')/*->intended('admin')*/;
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records']);
        }
        else {
            return view('home/login');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $data=new User;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->password=$request->input('password');
        $data->profile_photo_path=Storage::putFile('image',$request->file('photo'));
        $data->save();
        return redirect()->route('user_login');
    }

    public function create(Request $request)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
