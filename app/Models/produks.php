<?php

namespace App\Models;

use App\Models\User;
use App\Models\kategori;
use App\Models\penjuals;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produks extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function penjual()
    {
        return $this->hasMany(penjuals::class, 'id', 'id_penjual');
    }

    public function kategori()
    {
        return $this->hasMany(kategori::class, 'id', 'id_kategori');
    }
    
    public function admin()
    {
        return $this->hasMany(User::class, 'id', 'id_admin');
    }
}
