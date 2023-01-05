<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas7 extends Model
{
    protected $table = "kelas7";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nis', 'nama' 
    ];

}
