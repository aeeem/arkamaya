<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tingkat_kursus extends Model
{
    protected $table = 'tingkat_kursuses';
    public $timestamps = false;
    protected $fillable = [
        'nama_tingkatan',
    ];

}
