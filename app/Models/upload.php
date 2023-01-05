<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = "upload";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'file', 
    ];

}
