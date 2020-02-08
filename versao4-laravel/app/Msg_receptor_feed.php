<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msg_receptor_feed extends Model
{
    protected $fillable=['id','mensagem','usuario_id','emissor_id'];

    public function user(){
        return $this->belongsTo(User::class, 'usuario_id','id');
    }

    public function emissor(){
        return $this->belongsTo(Msg_emissor_feed::class, 'emissor_id','id');
    }
}
