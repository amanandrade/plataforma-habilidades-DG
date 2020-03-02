<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensagens extends Model
{
    public function remetente(){
        return $this->belongsTo();
    }

    public function destinatario(){
        return $this->hasMany();
    }
}
