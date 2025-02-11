<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comanda extends Model
{

    use HasFactory;

    protected $table = 'comandas';
    protected $fillable = [
        'mesa_id',
        'producto',
        'cantidad',
        'descripcion',
    ];

    public function mesa(): BelongsTo
    {
        return $this->belongsTo(Mesa::class, 'mesa_id', 'id');
    }

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'comanda_id', 'id');
    }
}

