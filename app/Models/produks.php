<?php

namespace App\Models;

use App\Models\admins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produks extends Model
{
    use HasFactory;

    public function adminProduk()
    {
        return $this->hasMany(admins::class, 'id', 'id_admin');
    }
}
