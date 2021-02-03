<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meditorial extends Model
{
    use HasFactory;
    protected $table='editorial';

    protected $primaryKey = 'id';
}
