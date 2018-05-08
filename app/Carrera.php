<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Carrera extends Model
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code','namecarre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password', 'remember_token',
    ];
}
