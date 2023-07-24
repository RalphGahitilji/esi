<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use HasFactory;
    protected $table = 'etudiants';

    protected $fillable = [
        'matricule',
        'annee_academique',
        'nom',
        'prenom',
        'date_de_naissance',
        'telephone',
        'photo',
    ];
}