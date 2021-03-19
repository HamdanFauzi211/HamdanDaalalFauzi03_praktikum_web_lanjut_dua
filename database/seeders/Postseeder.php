<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Kopi Susu',
                'slug' => 'Harga = 10.000',
                'content' => 'Merupakan minuman pecinta mahasiswa disaat mereka lagi mengerjakan tugas di Cafe',
            ],
            [
                'title' => 'Bakso',
                'slug' =>  'Harga = 15.000',
                'content'=> 'Merupakan makanan utama kalau main ke Kota Malang',
            ]
        ]);
    }
}
