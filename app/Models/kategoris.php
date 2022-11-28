<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoris extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    public function kategoris()
    {
        return $this->belongsTo(admins::class, 'id_admin', 'id_admin');
    }

}
