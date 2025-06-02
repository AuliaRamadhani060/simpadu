<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    // protected $fillable = [
    //     'NIM',
    //     'Name',
    //     'TangalLahir',
    //     'Email',
    //     'Telp',
    //     'Password',
    //     'foto',
    //     'Id'
    // ];

    public function Prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'Id', 'Id');
    }
}
