<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['id','nome_curso'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
