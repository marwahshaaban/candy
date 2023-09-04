<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candytype extends Model
{
    use HasFactory; 
//     public function user(){
//         return $this->belongsTo(User::class);
//    }
protected $fillable = [
    
    'name',
    'description',
    'price',
    'image',
    'size',
    'created_at',
    'update_at',
];

protected $hidden = [
    'created_at',
    'update_at',
];
}
