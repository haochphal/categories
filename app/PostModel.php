<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table='posts';
    protected $primarykey='id';
    protected $fillable=[
        'title',
        'description'
    ];
}
