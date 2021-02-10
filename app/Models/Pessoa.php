<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    public function contatos(){
        return $this->hasMany('App\Models\Contato');
    }

    protected $guarded =[];

    protected $dates = ['data_aniversario'];
}
