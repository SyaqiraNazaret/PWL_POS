<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => "Alex",
                'penjualan_kode' => 'A11',
                'penjualan_tanggal' => '2023-08-10'
            ],
            [
                'penjualan_id' =>  2,
                'user_id' => 1,
                'pembeli' => "Brandon",
                'penjualan_kode' => 'A12',
                'penjualan_tanggal' => '2023-08-10'
            ],
            [
                'penjualan_id' =>  3,
                'user_id' => 1,
                'pembeli' => "Caca",
                'penjualan_kode' => 'A13',
                'penjualan_tanggal' => '2023-10-09'
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => "Darren",
                'penjualan_kode' => "A14",
                'penjualan_tanggal' => '2023-08-30'
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => "Eryn",
                'penjualan_kode' => "A15",
                'penjualan_tanggal' => "2023-09-01"
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => "Ferry",
                'penjualan_kode' => "A16",
                'penjualan_tanggal' => "2024-01-01"
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => "Gerry",
                'penjualan_kode' => "A17",
                'penjualan_tanggal' => "2024-01-05"
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => "Hera",
                'penjualan_kode' => "A18",
                'penjualan_tanggal' => "2024-02-02"
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => "Inay",
                'penjualan_kode' => "A18",
                'penjualan_tanggal' => "2025-04-05"
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => "Ferry",
                'penjualan_kode' => "A16",
                'penjualan_tanggal' => "2025-03-01"
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
