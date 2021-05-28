<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_product'=> 'nasi padang',
            'harga_product' => 10000,
            'desc_product' => 'rendang',
            'pic_product' => 'This Picture',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'nama_product'=> 'pecel',
            'harga_product' => 5000,
            'desc_product' => 'daun',
            'pic_product' => 'Gambar ini',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'nama_product'=> 'bakso',
            'harga_product' => 45000,
            'desc_product' => 'bulat',
            'pic_product' => 'Picture',
            'category_id' => 2
        ]);
    }
}
