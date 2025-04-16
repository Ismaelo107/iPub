<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = [
        //'comanda_id',
        'categoria_id',
        'nombre',
        'tipo',
        'precio_venta',
        'precio_compra',
    ];


    public function comanda(): BelongsTo
    {
        return $this->belongsTo(Comanda::class, 'comanda_id', 'id');
    }
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }


}
