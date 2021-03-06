<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'ttd', 'jabatan', 'hak_akses', 'no_telepon', 'email', 'password', 'alamat'];
}
