<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatment';

    protected $primarykey ='id';

    protected $fillable =["name","birth","advice"];
}
