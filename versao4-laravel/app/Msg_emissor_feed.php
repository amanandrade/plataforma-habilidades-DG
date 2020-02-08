<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msg_emissor_feed extends Model
{
    protected $fillable = ['id', 'mensagem', 'estado', 'usuario_id'];
    
    public function user() {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }
}
