<?php

namespace App\Models;

use App\Models\admins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penjuals extends Model
{
    use HasFactory;

    public function adminPenjual()
    {
        return $this->hasMany(admins::class, 'id', 'id');
    }

}
