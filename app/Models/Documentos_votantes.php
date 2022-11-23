<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos_votantes extends Model
{
    protected $table = 'documentos_votantes';
    protected $fillable = ['votante_id', 'votante_nome', 'votante_documento', 'votante_documento_tipo'];
}