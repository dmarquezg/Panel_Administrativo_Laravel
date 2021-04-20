<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public function Pedido()
    {
        return $this->hasOne("App\Models\Pedido");
    }

    public function showPedidos() {
        return $this-> hasMany("App\Models\Pedido");
    }

    public function Producto(){
      return $this->belongsToMany("App\Models\Pedido_Producto");
    }

    Protected $fillable = ['nombre', 'apellido_paterno','apellido_materno'];

    use HasFactory;
}
