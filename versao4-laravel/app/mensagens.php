<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensagens extends Model
{
    protected $fillable = ['remetente_user_id', 'destino_user_id', 'msglida', 'assunto', 'mensagem'];

    public function remetente(){
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

    public function destinatario(){
        return $this->hasMany(User::class, 'usuario_id', 'id');
    }
}
