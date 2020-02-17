<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Access\Authorizable;

class login extends Model

{
    

    protected $fillable = [
        'ufname', 'ulname','uid','uemail','udep','ulevel','upassword','api_token'
    ];
    protected $hidden = [
        'password',
    ];
}
