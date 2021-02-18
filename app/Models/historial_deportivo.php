<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historial_deportivo extends Model
{
    use HasFactory;
    protected $table = "HistorialDeportivo";

    protected $fillable = ['id'];
}
