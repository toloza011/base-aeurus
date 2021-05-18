<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contactos;


class asuntos extends Model
{
    use HasFactory;
    protected $fillable = ['asun_nombre','asun_estado'];

    public function contactos(){
        return $this->hasMany(contactos::class,'contac_id_asunto');
    }
}
