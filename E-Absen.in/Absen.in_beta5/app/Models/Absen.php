<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $fillable = ['tgl', 'waktu', 'keterangan', 'id', 'longlat'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'id', 'id_absen');
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
    }
}
