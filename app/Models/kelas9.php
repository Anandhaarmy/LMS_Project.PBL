<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas9 extends Model
{
    protected $table = "kelas9";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nis', 'nama' 
    ];

}
