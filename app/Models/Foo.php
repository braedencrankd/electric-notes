<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    protected $table = 'foo';

    protected $fillable = ['name', 'value'];
}
