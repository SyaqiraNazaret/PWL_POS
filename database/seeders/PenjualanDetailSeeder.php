<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        // Pastikan tabel barang ada dan memiliki data
        $barangList = DB::table('m_barang')->select('barang_id', 'harga_jual')->get();
        if ($barangList->isEmpty()) {
            $this->command->error("Tabel 'm_barang' kosong. Silakan jalankan BarangSeeder dulu.");
            return;
        }

        // Pastikan tabel penjualan ada dan memiliki data
        $penjualanList = DB::table('t_penjualan')->select('penjualan_id')->get();
        if ($penjualanList->isEmpty()) {
            $this->command->error("Tabel 't_penjualan' kosong. Silakan jalankan PenjualanSeeder dulu.");
            return;
        }

        // Ubah data barang menjadi array untuk array_rand()
        $barangArray = $barangList->toArray();

        $detail_id = 1;
        $data = [];

        foreach ($penjualanList as $penjualan) {
            // Pilih 3 barang acak
            $selectedKeys = array_rand($barangArray, min(3, count($barangArray)));

            foreach ((array) $selectedKeys as $key) {
                $barang = $barangArray[$key];
                
                $data[] = [
                    'detail_id'     => $detail_id++,
                    'penjualan_id'  => $penjualan->penjualan_id,
                    'barang_id'     => $barang->barang_id,
                    'harga'         => $barang->harga_jual,
                    'jumlah'        => rand(1, 5), // Jumlah acak 1-5
                ];
            }
        }

        // Insert data ke database
        DB::table('t_penjualan_detail')->insert($data);

        $this->command->info('Data t_penjualan_detail berhasil ditambahkan.');
    }
}
