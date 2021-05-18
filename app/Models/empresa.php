<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;
    protected $fillable = ['emp_razon_social','emp_email_empresarial','emp_email_contacto','emp_direccion','emp_telefono','emp_logo','emp_url_facebook','emp_url_twitter','emp_url_instagram','emp_url_youtube','emp_coords_map'];
}