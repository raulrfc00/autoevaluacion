<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduls extends Model
{
    use HasFactory;

    protected $table = 'moduls'; // Nombre de la tabla

    protected $primaryKey = 'id'; // La clave principal, 'id' es el valor predeterminado y no necesita ser definido explícitamente

    public $timestamps = false; // Deshabilitar timestamps

    // protected $keyType = 'INT'; pordefecto se considera INT 

    public function cicle()
    {
        return $this->belongsTo(Cicle::class);
    }

    public function resultats_aprenentatge()
    {
        return $this->hasMany(ResultatsAprenentatge::class);
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuaris::class, 'usuaris_has_moduls');
    }
}
