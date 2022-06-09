<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengarang extends Model
{
    use HasFactory;
    protected $table = "pengarang";

    public function buku()
    { 
        return $this->hasOne('App\Models\admin\buku', 'pengarang_id');
    }

    public function pinjam()
    { 
        return $this->hasOne('App\Models\Pinjam', 'pengarang_id');
    }
}
