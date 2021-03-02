<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligamodel extends Model
{
    use HasFactory;
    protected $table = "Liga";

    protected $fillable = ['id','Nombre'];

}
