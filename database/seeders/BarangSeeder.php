<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 11,
                'kategori_id' => 1,
                'barang_kode' => 'A1',
                'barang_nama' => 'Mie Sedap',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 1,
                'barang_kode' => 'A2',
                'barang_nama' => 'White Coffe',
                'harga_beli' => 2500,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 21,
                'kategori_id' => 2,
                'barang_kode' => 'B1',
                'barang_nama' => 'Cuttonbuds',
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 22,
                'kategori_id' => 2,
                'barang_kode' => 'B2',
                'barang_nama' => 'Potongan Kuku',
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 31,
                'kategori_id' => 3,
                'barang_kode' => 'C1',
                'barang_nama' => 'Baju Kemeja',
                'harga_beli' => 75000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 32,
                'kategori_id' => 3,
                'barang_kode' => 'C2',
                'barang_nama' => 'Celana',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 41,
                'kategori_id' => 4,
                'barang_kode' => 'D1',
                'barang_nama' => 'Sepatu Bayi 1th',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 42,
                'kategori_id' => 4,
                'barang_kode' => 'D2',
                'barang_nama' => 'Sepatu Bayi 2th',
                'harga_beli' => 30000,
                'harga_jual' => 35000,
            ],
            [
                'barang_id' => 51,
                'kategori_id' => 5,
                'barang_kode' => 'E1',
                'barang_nama' => 'Pengharum Ruangan',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 52,
                'kategori_id' => 5,
                'barang_kode' => 'E2',
                'barang_nama' => 'Kapur Barus',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
