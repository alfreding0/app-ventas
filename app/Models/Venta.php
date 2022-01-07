<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'venta';

    public function personal(){
        return $this->belongsTo(Personal::class, 'id_personal');
    }

    public function detalle_venta()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta');
    }
}
