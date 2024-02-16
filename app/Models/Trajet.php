<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = ['start_city', 'end_city', 'distance', 'duration'];

}
