<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;

    public $table = "contactos";

    protected $fillable = [
        "id",
        "correo_contacto",
        "correo_user"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
