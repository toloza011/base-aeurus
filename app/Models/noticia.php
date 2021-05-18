<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\galeria_noticia;

class noticia extends Model
{
    use HasFactory;
    protected $fillable = ['not_titulo','not_resumen','not_contenido','not_portada','not_estado'];

    public function imagenes(){
        return $this->hasMany(galeria_noticia::class,'gnot_noticias_id');
    }
}
