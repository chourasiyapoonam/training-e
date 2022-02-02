<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{
    use HasFactory;
    protected $table= 'hr';
     protected $primarykey = 'id';
    protected $fillable = ['name' , 'Password' , 'email' , 'Role'];
    public $timestamps = false;

}
