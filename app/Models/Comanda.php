<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesa_id',
        'producto',
        'cantidad',
        'descripcion',
        'stock_id' // Añadir este campo
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
