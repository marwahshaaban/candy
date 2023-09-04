<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\User;
use App\Models\Candytype;
class notificationController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
      /** 
     * Write code on Method
     *
     * @return response()
     */
    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);}
        /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price'=>'required',
          'description'=>'required',
            'size'=>'required',
        ]);
      
        if($validator->fails()){
            
            return  redirect()->back()->withErrors($validator);
            }
        $product=new Candytype;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->size=$request->size;
       /*  echo $request->file('image')->store('upload');
        echo"<pre>";
        print_r($request->all());*/
        if($request->hasFile('image')){
            
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
        
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();
        
        $SERVER_API_KEY = "AAAAIG5fY6Y:APA91bEUqBjw-0-oWEEXSleeVMkE6CCedkTuXe5mJeS20387ZwHa2X8sZLwcAYAqAZJQUMpoT5i2Go4LMxq31M-k0sHgBrIxqa8qujRu2C53U5kb-ssWGSZNTxZU3wjm6b1lnlhP9hP2";
  
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => 'تمت اضافة',
                "body"=>[$request->name,
                $request->price],
                  
            ]
        ];
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
       //dd($response);
       return redirect('/Adminlogin1');
    }
    
 

}