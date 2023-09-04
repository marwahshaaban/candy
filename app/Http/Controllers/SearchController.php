<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Models\Candytype;
class SearchController extends Controller
{
    //
    function search(){

        return view('search');

    }

    function find(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);

           $search_text = $request->input('query');
           $products=Candytype::where('name','LIKE','%'.$search_text.'%')
                      ->paginate(2);
            return view('search',['products'=>$products]);

    }
}
