<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    use HasFactory;

    public function adminProduk()
    {
        return $this->hasMany(admins::class, 'id', 'id_admin');
    }
}
