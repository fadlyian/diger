<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "1",
            'name' => "Komik",
            'Image' => "komik.png",
            'file' => "Komik.pdf",
            'price' => "9000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '99',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "2",
            'name' => "manga",
            'Image' => "manga.png",
            'file' => "manga.pdf",
            'price' => "10000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '9',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "3",
            'name' => "metalica",
            'Image' => "metalica.png",
            'file' => "metalica.pdf",
            'price' => "14000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '92',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "4",
            'name' => "doraemon",
            'Image' => "doraemon.png",
            'file' => "doraemon.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '91',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "5",
            'name' => "product1",
            'Image' => "product1.png",
            'file' => "product1.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '919',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "6",
            'name' => "product2",
            'Image' => "product2.png",
            'file' => "product2.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '199',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "1",
            'category_id' => "1",
            'name' => "product3",
            'Image' => "product3.png",
            'file' => "product3.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '94',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'user_id' => "2",
            'category_id' => "2",
            'name' => "product4",
            'Image' => "product4.png",
            'file' => "product4.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '199',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'user_id' => "2",
            'category_id' => "3",
            'name' => "product5",
            'Image' => "product5.png",
            'file' => "product5.pdf",
            'price' => "20000",
            'type' => 'e-book',
            'sizeFile' => '1,2MB',
            // 'pages' => '94',
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
