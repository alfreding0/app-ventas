<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';

    public function venta()
    {
        return $this->hasMany(Venta::class, 'id_personal');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id_personal');
    }
}
