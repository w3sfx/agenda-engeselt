<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*Representa os dados, regras e lógicas de negócios.*/

class Event extends Model
{
    use HasFactory;

    protected $dates = ['date']; /*Manter o formato de data*/

    protected $guarded = []; /*Tudo que for enviado pelo post pode ser atualizado*/

}

