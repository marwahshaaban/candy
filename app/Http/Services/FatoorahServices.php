<?php

namespace App\Http\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
//use Illuminate\Http\Request;
class FatoorahServices 
{
    private $base_Url;
    private $headers;
    private $request_client;


 public function __construct(Client $request_client ) {
    $this->request_client=$request_client;
    $this->base_Url=env(key:'fatoora_base_Url');
    $this->headers = [
        'Content-Type'=>'application/json',
        
        'authorization'=> 'Bearer ' . env(key: 'fatoora_token')
    ];


 }

 public function buildRequest($uri,$method,$body=[]){
 
          $request=new Request($method, $this->base_Url.$uri,$this->headers);
        
        
  // if(!$body)
   //return false;

    $response= $this->request_client->send($request,[
       'json'=> $body
    ]);

   if($response->getStatusCode() != 200){
        //return false;
    }
 
  return  $response=json_decode($response->getBody(),associative:true);
 

 }

 public function sendPayment($data){

   return  $response=$this->buildRequest("v2/SendPayment","post",$data);
  
 }

 public function  getPaymentStatus($data){
  return  $response=$this->buildRequest("v2/getPaymentStatus","post",$data);
 
}
}