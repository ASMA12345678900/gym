<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'image','id_salle'];

    use HasFactory;

    public function salle(){

        return $this->hasOne(Service::class);


    }

}
