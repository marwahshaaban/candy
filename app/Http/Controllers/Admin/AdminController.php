<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validation;
class AdminController extends Controller
{
    //
    public function adminlogin(){
        return view('Admin.adminlogin');
}
  
    public function saveAdminlogin1(){
        return view('Admin.admin');
    }
 
    public function saveAdminlogin(Request $request){
  
       $this->validate($request,[
          'email'=>'required|email',
          'password'=>'required|min:6'

        ]
        );
     
    
    if(auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
    {
       
        return redirect('/Adminlogin1');}
  
    return back();
    }
}
