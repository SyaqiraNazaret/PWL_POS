<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';    //Mendefinisikan nama tabel yang digunakan model ini
    protected $primaryKey = 'user_id';  //Mendefinisikan nama field yang digunakan

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama'];
}
