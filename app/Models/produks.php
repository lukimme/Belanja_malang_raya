<?php

namespace App\Models;

use App\Models\admins;
use App\Models\kategori;
use App\Models\penjuals;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produks extends Model
{
    use HasFactory;

    
    public function adminProduk()
    {
        return $this->hasMany(admins::class, 'id', 'id_admin');
    }

    public function kategoriProduk()
    {
        return $this->hasMany(kategori::class, 'id', 'id_kategori');
    }

    public function penjualProduk()
    {
        return $this->hasMany(penjuals::class, 'id', 'id_penjual');
    }
}
