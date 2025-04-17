<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'comanda_id',
        'categoria_id',
        'nombre',
        'descripcion',
        'unidades',
        'precio_venta',
        'precio_compra',
    ];

    // Relación con la categoría del producto
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Relación opcional con una comanda (si más adelante querés usarlo)
    public function comanda()
    {
        return $this->belongsTo(Comanda::class);
    }
}
