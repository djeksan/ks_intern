<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

<<<<<<< HEAD
    protected $table="users";
    protected $primaryKey="id";

=======
>>>>>>> 4a5eaf5b59f47980ff7ab839b8f6b46f9661c9f5
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'firstName','lastName','passwordTokin','city', 'email', 'password',
=======
        'name', 'email', 'password',
>>>>>>> 4a5eaf5b59f47980ff7ab839b8f6b46f9661c9f5
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
