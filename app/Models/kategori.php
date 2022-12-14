<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;
    // protected $fillable = ['id', 'nama_kategori', 'foto_kategori'];
    protected $primaryKey = 'id';
    protected $table = 'kategoris';
    public function admin()
    {
        return $this->hasMany(User::class, 'id', 'id_admin');
    }

}
