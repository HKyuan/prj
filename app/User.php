<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primarykey = 'id';

    protected $fillable =["number","password","type","name"];
}
