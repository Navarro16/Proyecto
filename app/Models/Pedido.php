<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Mesa;
use App\Models\Plato;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cedulaUsuario', 'cedula');
    }

    public function mesa(): BelongsTo
    {
        return $this->belongsTo(Mesa::class, 'idMesa', 'id');
    }

    public function plato(): BelongsTo
    {
        return $this->belongsTo(Plato::class, 'idPlato', 'id');
    }

    // public function platos(): BelongsToMany
    // {
    //     return $this->belongsToMany(Plato::class, 'platos_pedidos', 'idPedido', 'idPlato');
    // }
}
