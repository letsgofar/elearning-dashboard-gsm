<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raportschool extends Model
{
    protected $fillable = ['name', 'slug', 'jenis_modul', 'nama_modul', 'nilai_modul'];
}
