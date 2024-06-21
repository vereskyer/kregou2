<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'image' => 'https://cdn.pixabay.com/photo/2021/08/03/06/47/clock-6518632_1280.jpg',
            'name' => 'Product 1',
            'korean_name' => '상품 1',
            'category_id' => 1,
            'description' => 'Product 1 description',
            'wholesale_price' => 10000,
            'supply_price' => 9000,
            'url' => 'https://example.com/product1',
            'admin_url' => 'https://example.com/admin/product1',
        ]);

        Product::create([
            'image' => 'https://cdn.pixabay.com/photo/2017/08/20/10/28/leather-shoes-2661198_1280.jpg',
            'name' => 'Product 2',
            'korean_name' => '상품 2',
            'category_id' => 1,
            'description' => 'Product 1 description',
            'wholesale_price' => 10000,
            'supply_price' => 9000,
            'url' => 'https://example.com/product1',
            'admin_url' => 'https://example.com/admin/product1',
        ]);

        Product::create([
            'image' => 'https://cdn.pixabay.com/photo/2012/11/07/02/07/jugs-64975_1280.jpg',
            'name' => 'Product 3',
            'korean_name' => '상품 3',
            'category_id' => 1,
            'description' => 'Product 1 description',
            'wholesale_price' => 10000,
            'supply_price' => 9000,
            'url' => 'https://example.com/product1',
            'admin_url' => 'https://example.com/admin/product1',
        ]);

        Product::create([
            'image' => 'https://cdn.pixabay.com/photo/2020/03/06/16/16/cornflakes-4907490_1280.jpg',
            'name' => 'Product 4',
            'korean_name' => '상품 4',
            'category_id' => 1,
            'description' => 'Product 1 description',
            'wholesale_price' => 10000,
            'supply_price' => 9000,
            'url' => 'https://example.com/product1',
            'admin_url' => 'https://example.com/admin/product1',
        ]);

        
    }
}
