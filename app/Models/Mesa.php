<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mesa extends Model
{


    use HasFactory;

    protected $table = 'mesas';
    protected $fillable = [
        'comanda_id',
        'estado',
        'formaPago',
        'aPagar',
    ];

    public function comandas(): HasMany
    {
        return $this->hasMany(Comanda::class, 'mesa_id', 'id');
    }
}

