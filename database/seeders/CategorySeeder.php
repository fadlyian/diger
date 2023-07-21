<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => "1",
            'name' => "Desain",
            'image' => "kategori-desain.png",
            'description' => "Produk digital yang didesain untuk memenuhi kebutuhan kreativitas dan desain pengguna.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "2",
            'name' => "Film",
            'image' => "kategori-film.png",
            'description' => "Produksi audiovisual yang dirancang untuk diputar di bioskop, stasiun televisi, atau platform streaming online.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "3",
            'name' => "Musik",
            'image' => "kategori-musik.png",
            'description' => "Produksi audio yang mencakup berbagai jenis musik seperti pop, rock, jazz, klasik, hip-hop, dan berbagai genre musik lainnya.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "4",
            'name' => "Pendidikan",
            'image' => "kategori-pendidikan.png",
            'description' => "Produk atau layanan yang dirancang untuk membantu pembelajaran, seperti buku, kursus online, dan lainnya.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "5",
            'name' => "Software Development",
            'image' => "kategori-software.png",
            'description' => "Produk dan layanan yang dirancang untuk membantu pengembangan perangkat lunak.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "6",
            'name' => "Tulisan dan Publikasi",
            'image' => "kategori-tulisan.png",
            'description' => "Produk atau layanan yang berfokus pada tulisan dan penerbitan karya tulis, baik dalam bentuk digital maupun fisik.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
