<?php

namespace App\Models;

use App\Models\admins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Iklan extends Model
{
    protected $primaryKey = 'id';
    use HasFactory;
    protected $table = 'banner_iklans';
    public function admin()
    {
        return $this->hasMany(admins::class, 'id',  'id_admin');
    }
    
    
}