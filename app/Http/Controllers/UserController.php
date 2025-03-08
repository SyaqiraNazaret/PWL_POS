<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true

        // dd($user->isDirty());

        $user->wasChanged(); // false
        $user->wasChanged('username'); // false
        $user->wasChanged(['username', 'level_id']); // false
        $user->wasChanged('nama'); // true
        $user->wasChanged(['nama', 'username']); // false
        dd($user->wasChanged(['nama', 'username'])); //true
    }
}

    // //Coba Akses model User Model
    // $user = UserModel::all(); //ambil semua data dari tabel m_user
    // return view('user', ['data' => $user]);

    //Modifikasi 1
   // tambah data user dengan Eloquent Model
    //     $data = [
    //     'username' => 'customer-1',
    //     'nama' => 'Pelanggan',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 4
    //     ];

    //     UserModel::insert($data); //tambahkan data ke tabel m_user

    // // coba akses model UserModel
    //     $user = UserModel::all(); // ambil semua data dari tabel m_user
    //     return view('user', ['data' => $user]);

    // Modifikasi 2
    // tambah data user dengan Eloquent Model
    // $data = [
    //     'nama' => 'Pelanggan Pertama'
    //     ];

    //     UserModel::where('username', 'customer-1')->update($data); //update data user

    //Praktikum 4
    // $data = [
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama' => 'Manager 3',
    //     'password' => Hash::make('12345')
    // ];
    // UserModel::create($data);

        //1. 
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);
        //2.
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);
        //3.
        // $user = UserModel::firstWhere('level_id',1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        //$user = UserModel::where('level_id', 2)->count();
        //dd($user);

        //Prak 4 - 2.4
        // $user = UserModel::firstOrNew(
        //     [ // Kondisi pencarian (hanya berdasarkan username)
        //         'username' => 'manager33',
        //     ]
        // );
          
        // // Jika user baru, isi data tambahan
        // if (!$user->exists) {
        //     $user->nama = 'Manager Tiga Tiga';
        //     $user->password = Hash::make('12345'); 
        //     $user->level_id = 2;
        //     $user->save(); // Simpan user baru
        // }

    // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

