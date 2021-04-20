<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function Pedido()
    {
        return $this->hasOne("App\Models\Pedido");
    }

    public function showPedido() {
        return $this-> hasMany("App\Models\Pedido");
    }

    Protected $fillable = ['nombre', 'apellido_paterno','apellido_materno'];

    use HasFactory;
}
