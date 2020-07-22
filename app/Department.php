<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use Notifiable;
    protected $fillable = [
        'id', 'name',
    ];
}
