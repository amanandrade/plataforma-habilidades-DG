<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab_habilidade extends Model
{
    protected $fillable=['id','habilidades'];

    public function users(){
        return $this->belongsToMany(user::class, 'tags', 'usuario_id','habilidade_id');
    }
}
