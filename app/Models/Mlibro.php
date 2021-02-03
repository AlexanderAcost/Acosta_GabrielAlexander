<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlibro extends Model
{
    use HasFactory;
    protected $table='libro';

    protected $primaryKey = 'id';
}
