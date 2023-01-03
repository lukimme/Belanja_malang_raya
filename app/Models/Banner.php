<?php

namespace App\Models;

use App\Models\admins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    protected $primaryKey = 'id_gambar';
    use HasFactory;
    protected $table = 'banner_iklans';
    public function admin()
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->hasMany(admins::class, 'id',  'id');
=======
        return $this->hasMany(admins::class, 'id',  'id_admin');
>>>>>>> parent of d971488... pemberian hak akses
=======
        return $this->hasMany(admins::class, 'id',  'id_admin');
>>>>>>> parent of d971488... pemberian hak akses
=======
        return $this->hasMany(admins::class, 'id',  'id_admin');
>>>>>>> parent of d971488... pemberian hak akses
=======
        return $this->hasMany(admins::class, 'id',  'id_admin');
>>>>>>> parent of d971488... pemberian hak akses
=======
        return $this->hasMany(admins::class, 'id',  'id_admin');
>>>>>>> parent of d971488... pemberian hak akses
    }
    
    
}
