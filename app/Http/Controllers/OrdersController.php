<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candytype;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class OrdersController extends Controller
{
    // 
    
    public function orderto ($id) { 
       
        
        $can=Candytype::find($id); 
        
        return view('Order.getorder')->with('can', $can);
        
    } 
    public function order (Request $request){ 
        
        $user=Auth::user();
        $candy=Candytype::find($request->can_id);
        
        $order=new Order;
        //  dd($pizza);
        $order->name=$candy->name;
        $order->size=$request->size;
        $order->total=$request->size * $candy->price;
        //  dd($order);
        $order->description=$candy->description;
        // dd($order);
        $order->price=$candy->price;
        $order->user_id=$user->id;
        
        
        
     /*   if($request->hasFile('image')){
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
           }*/
           $order->image=$candy->image;
           $order->save();
          return redirect("/myorder");

    } 
    public function myorder() { 
        $all=0;
          $user=Auth::user();
          $orders=Order::where('user_id',$user->id)->get();
          foreach($orders as $order){
$all=$all+$order->total;

          }
        
        return view('Order.myorder',['orders'=>$orders,])->with('all',$all);
    } 

    public function show($id)
    {
        // 
        $order=Order::find($id);
        return view('Order.show')->with('order',$order);
    }

    public function destroy($id)
    {
        // 
        // $order=Order::find($id);
        // $order->delete();
         $user=Auth::user();
        $order=Order::where('id',$id)->delete(); 
        
        $order=Order::where('user_id',$user->id)->get();
        return redirect('/myorder')->with('order',$order)->with('success','Order deleted')  ;   
        // 
        
    }  
    public function edit($id){ 
        $user=Auth::user();
        
          $order=Order::where('id',$id)->first();
     return view('Order.showupdateorder')->with('order',$order);
       
      } 
      public function updateorder( Request $request) {
      //dd($request); 
      $order=Order::where('id',$request->id)->first();
      $order->name=$request->name;
      $order->size=$request->size;
      $order->save();
      return redirect('/myorder')->with('order',$order)->with('success','Order updated')  ; 
      } 
    
} 
 
    
