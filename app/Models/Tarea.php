<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "usuario_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "usuario_id");
    }
}
