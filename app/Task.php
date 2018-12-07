<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='task';
    protected $primaryKey = 'id';
     protected $fillable = ['title', 'description'];
    public $timestamps = false;
    
    protected $guarded = ['id'];
    

}
