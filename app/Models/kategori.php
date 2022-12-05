<?php

namespace App\Models;

use App\Models\admins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;
// protected $fillable = ['id_admin', 'nama_kategori', 'foto_kategori'];
    // protected $table = 'kategoris';
    public function admin()
    {
        return $this->hasMany(admins::class, 'id', 'id_admin');
    }

}
