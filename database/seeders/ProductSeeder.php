<?php

namespace Database\Seeders;

use App\Models\ProductMain;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductMain::create([

            'name'          => 'product 1',
            'slug'          => 'product-1',
            'order'         => 1,
        ]);

        Products::create([
            'product_id'    => 1,
            'lang'          => 'en',
            'name'         => 'Product 1 Indonesia',
            'description'   => 'deskripsi produk 1 indonesia',
            'intensity'     => 3,
            'smoothness'    => 3,
            'body'          => 3,
            'sensation'     => 3,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Products::create([
            'product_id'    => 1,
            'lang'          => 'ja',
            'name'         => 'Product 1 English',
            'description'   => 'deskripsi produk 1 English',
            'intensity'     => 3,
            'smoothness'    => 3,
            'body'          => 3,
            'sensation'     => 3,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Products::create([
            'product_id'    => 1,
            'lang'          => 'ru',
            'name'         => 'Product 1 japan',
            'description'   => 'deskripsi produk 1 japan',
            'intensity'     => 3,
            'smoothness'    => 3,
            'body'          => 3,
            'sensation'     => 3,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        ///product 2
        ProductMain::create([

            'name'          => 'product 2',
            'slug'          => 'product-2',
            'order'         => 2,
        ]);

        Products::create([
            'product_id'    => 2,
            'lang'          => 'en',
            'name'         => 'Product 2 Indonesia',
            'description'   => 'deskripsi produk 2 indonesia',
            'intensity'     => 4,
            'smoothness'    => 4,
            'body'          => 4,
            'sensation'     => 4,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Products::create([
            'product_id'    => 2,
            'lang'          => 'ja',
            'name'         => 'Product 2 English',
            'description'   => 'deskripsi produk 2 English',
            'intensity'     => 4,
            'smoothness'    => 4,
            'body'          => 4,
            'sensation'     => 4,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Products::create([
            'product_id'    => 2,
            'lang'          => 'ru',
            'name'         => 'Product 2 japan',
            'description'   => 'deskripsi produk 2 japan',
            'intensity'     => 4,
            'smoothness'    => 4,
            'body'          => 4,
            'sensation'     => 4,
            'diameter'      => '20 mm',
            'length'        => '70 mm',
            'category'      => 1,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
