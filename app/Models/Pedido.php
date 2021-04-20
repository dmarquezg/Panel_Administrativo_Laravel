<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function Cliente()
    {
        return $this->belongsTo("App\Models\Cliente");
    }

    public function Producto()
    {
        return $this->belongsToMany("App\Models\Producto");
    }

    public function Vendedor()
    {
        return $this->belongsTo("App\Models\Vendedor");
    }
    
    public function pedidoProducto()
    {
        return $this->hasMany("App\Models\Pedido_Producto");
    }

    protected $fillable = ["fechapedido", "estatus", "fecha_envio", "codigo_producto", "cliente_id", "vendedor_id"];

    use HasFactory;
}
