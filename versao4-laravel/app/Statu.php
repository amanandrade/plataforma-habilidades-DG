<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $fillable=['id','nome_status'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
