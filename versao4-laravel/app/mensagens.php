<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensagens extends Model
{
    public function remetente(){
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

    public function destinatario(){
        return $this->hasMany(User::class, 'usuario_id', 'id');
    }
}
