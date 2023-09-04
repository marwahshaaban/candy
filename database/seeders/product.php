<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('candytypes')->insert([
            'name'=> 'Mississippi Mud',
            'description'=>"Cupcake",
            'price'=>800,
            'image'=> "product-8.jpg",
            'size'=>'100'
        ]);
    }
}
