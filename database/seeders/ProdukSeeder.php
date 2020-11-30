<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert(array(
            ['NAMA'=>"Flashdisk 4GB KingStone",
            'ID_KATEGORI'=> '3',
            'HARGA_JUAL'=>'85000',
            'HARGA_BELI'=>'60000'],
            ['NAMA'=>"Flashdisk 6GB KingStone",
            'ID_KATEGORI'=> '4',
            'HARGA_JUAL'=>'100000',
            'HARGA_BELI'=>'80000'],
            ['NAMA'=>"Flashdisk 8GB KingStone",
            'ID_KATEGORI'=> '5',
            'HARGA_JUAL'=>'120000',
            'HARGA_BELI'=>'100000']
        ));
    }
}
