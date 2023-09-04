<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candytype;
use App\Models\User;
class AdminCandyController extends Controller
{
    //
    public function addproduct(Request $request){
      

        $product=new Candytype;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->size=$request->size;
  
        if($request->hasFile('image')){
            dd(9);
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // FileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/product_images',$fileNameToStore);
        } else {
               $fileNameToStore = 'noimage.jpg';
           }
           $product->image=$fileNameToStore;
           $product->save();
           return redirect('/Adminlogin1');
     
    
    }
    public function showaddproduct(){
       
        
        return view('Admin.addproduct');
       }
    
       public function editproduct($id)
       {
           //
           $candy=Candytype::find($id);
           return view('Admin.editproduct')->with('candy',$candy);
       }
       public function updatproduct( Request $request) {
        //dd($request);
        $product=Candytype::where('id',$request->id)->first();
        $product->price=$request->price;
        $product->save();
        return redirect('/Adminlogin1');
        }

        public function deleteproduct($id)

        {
            $prud=Candytype::find($id);
    
            $prud->delete();
    
            return redirect('/admin/search');
        }

        public function allusers()

        {
            $users=User::all();
            return view('Admin/alluser')->with('users',$users);
        }
        public function deleteuser($id)
        {
            $user=User::find($id);
    
            $user->delete();
    
            return redirect('/admin/users');
        }
    
}
