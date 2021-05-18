<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pagina;

class galeria_paginas extends Model
{
    use HasFactory;
    protected $fillable = ['gpag_nombre','gpag_path','gpag_pagina_id'];

    public function pagina(){
        return $this->belongsTo(pagina::class, 'gpag_pagina_id');
    }
}