<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(){
        //untuk menambahkan data 
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['cus', 'Pelanggan', now()]);
        // return 'insert data baru berhasil';

        //untuk mengupdate data yang sudah ada 
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '. $row. ' baris';

        //untuk menghapus data 
        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Data berhasil dihapus. Jumlah data yang dihapus: '. $row. ' baris';

        //untuk mrnampilkan data yang ada di m_level
        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
