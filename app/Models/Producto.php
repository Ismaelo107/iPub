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
        'comanda_id',
        'nombre',
        'precio_venta',
        'precio_compra',
    ];


    public function comanda()
    {
        return $this->belongsTo(Comanda::class, 'comanda_id', 'id');
    }


}
