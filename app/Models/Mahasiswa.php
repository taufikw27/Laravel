<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $table ="mahasiswa_baru";

    protected $fillable = [
        'nama', 'jk', 'no_hp', 'umur' 
    ];
}
