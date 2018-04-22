<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
protected $primaryKey = 'nip';
     protected $fillable = [
        'name', 'age','date_of_birth','created_at','updated_at'
    ];

}
