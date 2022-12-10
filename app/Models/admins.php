<?php

namespace App\Models;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admins extends Model
{
    use HasFactory;

    public function kategoris()
    {
        return $this->hasMany(kategori::class, 'id', 'id');
    }
}
