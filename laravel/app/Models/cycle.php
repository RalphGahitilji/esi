<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'libelle_annee_academique',
    ];
}