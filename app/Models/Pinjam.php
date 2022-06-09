<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = "pinjam";

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function pengarang()
    {
        return $this->belongsTo('App\Models\pengarang', 'pengarang_id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Models\buku', 'buku_id');
    }

}
