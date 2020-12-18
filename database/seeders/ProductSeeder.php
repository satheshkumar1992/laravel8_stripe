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
    	for($i=1; $i<=15; $i++) {
    		$name = "product_" . $i;
    		$price = $i * 10;
    		DB::table('products')->insert([
	            'name' => $name,
	            'price' => $price,
	        ]);
    	}
    }
}
