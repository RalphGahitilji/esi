<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau_etude extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'libelle_niveau',
        
    ];
}