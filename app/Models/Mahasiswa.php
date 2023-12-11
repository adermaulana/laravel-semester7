<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = '202061_mahasiswa';

    public $timestamps = false;
    protected $fillable = ['nim','nama','jurusan'];
}
