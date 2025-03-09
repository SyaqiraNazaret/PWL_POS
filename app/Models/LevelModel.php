<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    protected $table = 'm_level'; // Sesuaikan dengan tabel di database
    protected $primaryKey = 'level_id';
    protected $fillable = ['level_name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class);
    }
}
