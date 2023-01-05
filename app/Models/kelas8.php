<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas8 extends Model
{
    protected $table = "kelas8";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nis', 'nama' 
    ];

}
