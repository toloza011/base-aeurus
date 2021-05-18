<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comunas;

class contactos extends Model
{
    use HasFactory;
    protected $fillable = ['contac_nombre','contac_id_asunto','contac_email','contac_telefono','contac_mensaje','contac_path_documento','contac_fecha','contac_id_comuna'];

    public function comuna(){
        return $this->belongsTo(comunas::class, 'contac_id_comuna');
    }

    public function asunto(){
        return $this->belongsTo(asuntos::class, 'contac_id_asunto');
    }
}
