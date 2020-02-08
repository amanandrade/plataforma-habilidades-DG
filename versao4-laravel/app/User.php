<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password','telefone', 'genero','nascimento','foto','estado','curso_id','status_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id', 'id');
    }

    public function statu(){
        return $this->belongsTo(Statu::class, 'status_id','id');
    }

    public function habilidades(){
        return $this->belongsToMany(Tab_habilidade::class, 'tags','usuario_id','habilidade_id');
    }

    // public static function habilidadesTwo(){
    //     return $this->belongsToMany(Tab_habilidade::class, 'tags','usuario_id','habilidade_id');
    // }

    public function emissor() {
        return $this->hasMany(Msg_emissor_feed::class);
    }
    public function receptor(){
        return $this->hasMany(Msg_receptor_feed::class);
    }
}
