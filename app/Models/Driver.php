<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [ 'image', 'typ_veicl', 'matricule', 'price', 'method_payment', 'description'];
}
