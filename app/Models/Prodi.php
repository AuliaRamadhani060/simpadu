<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    // public function mahasiswa()
    // {
    //     return $this->hasMany(Mahasiswa::class, 'Id', 'Id');
    // }

}
