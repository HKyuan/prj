<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';

    protected $primarykey ='id';

    protected $fillable =["name","birth","advice"];
}
