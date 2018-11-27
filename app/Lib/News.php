<?php

namespace App\Lib;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class News extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

}
