<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Colocar as colunas/campos que quero que sejam preenchidas
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
