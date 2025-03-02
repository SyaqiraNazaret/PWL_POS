<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 11,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-03',
                'stok_jumlah' => 1000
            ],
            [
                'stok_id' => 2,
                'barang_id' => 12,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 1000
            ],
            [
                'stok_id' => 03,
                'barang_id' => 21,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 950
           ],
            [
                'stok_id' => 4,
                'barang_id' => 22,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 200
            ],
            [
                'stok_id'=> 5,
               'barang_id' => 31,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 179
            ],
            [
                'stok_id' => 6,
                'barang_id' => 32,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 200
            ],
            [
                'stok_id' => 7,
                'barang_id' => 41,
                'user_id' => 3,
                'stok_tanggal' => '2025-10-03',
                'stok_jumlah' => 175
            ],
            [
                'stok_id' => 8,
                'barang_id' => 42,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 200
            ],
            [
                'stok_id' => 9,
                'barang_id'=> 51,
                'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 190
            ],
            [
                'stok_id' => 10,
                'barang_id'=> 52,
            'user_id' => 3,
                'stok_tanggal' =>'2025-10-03',
               'stok_jumlah' => 800
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
