<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kategori')->insert([
            'Kategori' =>'Keyboard',
            'Keterangan' => 'Segala macam keyboard PC, Laptop, TV',
            'Kategori' =>'Mause',
            'Keterangan' => 'Segala Macam Mouse Wire maupun Wireless',
            'Kategori' =>'Flashdisk',
            'Keterangan' => 'Segala Macam Merek, ukuran Flashdisk', 
        ]);
    }
}
