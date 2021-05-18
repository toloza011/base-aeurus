<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comunas;

class contactos extends Model
{
    use HasFactory;
    protected $fillable = ['con_nombre','con_id_asunto','con_email','con_telefono','con_mensaje','con_path_documento','con_fecha','con_id_comuna'];

    public function comuna(){
        return $this->belongsTo(comunas::class, 'contac_id_comuna');
    }

    public function asunto(){
        return $this->belongsTo(asuntos::class, 'contac_id_asunto');
    }
}
