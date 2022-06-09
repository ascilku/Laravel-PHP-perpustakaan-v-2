<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = "buku";

    public function pengarang()
    {
        return $this->belongsTo('App\Models\pengarang', 'pengarang_id');
    }

    public function buku()
    { 
        return $this->hasOne('App\Models\buku', 'buku_id');
    }
}
