<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candytype;
class CandyController extends Controller
{
    //
      
    public function minue(){ 
        $types=Candytype::all();
      // return response()->json( $types);
    return View('Candy.allcandy')->with('types',$types); 
    }
}
