<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            'name'=>'Microwave Oven',
            'price' => '70000',
            'description'=> 'An for food ',
            'category' => 'Oven',
            'gallery' => 'https://cdn.pixabay.com/photo/2019/12/20/22/10/microwave-4709390_960_720.png'
           
        ]);
    }
}
