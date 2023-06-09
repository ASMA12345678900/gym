<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class userModel extends Model
{



    public function mytrainer(){
        return $this->hasMany('App\Models\UserModel', 'id', 'Trainer_id');
    }
}



