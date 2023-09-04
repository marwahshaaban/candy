<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\FatoorahServices;
use Auth;
use App\Models\Order;
class fatoorahController extends Controller
{
    //
    private $fatoorahServices;
    public function __construct(FatoorahServices $fatoorahServices ) {
        $this->fatoorahServices=$fatoorahServices;

    }

    public function payorder($all){
        
        $user=Auth::user();
        $order=Order::where('user_id',$user->id); 
    
        $data=[
        'CustomerName' =>  $user->name,
        'CustomerMobile'     => '1234567890',
        'NotificationOption' => 'all',
        'DisplayCurrencyIso' => 'SAR',
        'CustomerEmail' =>  $user->email,
        'InvoiceValue' => $all,
        'Language' => 'en',
        'CallBackUrl' => 'http://127.0.0.1:8000/paymentcallBack',
        'ErrorUrl' => 'https://www.google.com/',
           
        ];
        $order->delete();
      return  $this->fatoorahServices->sendPayment($data);
    }

    public function paymentcallBack(Request $request){
        $data=[];
        $data['Key']=$request->paymentId;
        $data['KeyType']='paymentId';
        
        return  ($this->fatoorahServices->getPaymentStatus($data));


    }
}
