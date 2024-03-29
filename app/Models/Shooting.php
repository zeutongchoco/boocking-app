<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shooting extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prenom',
        'Tel',
        'Email',
        'Designation',
        'Date_de_reservation',
        'Heure_de_debut',
        'Journee_du_shooting',
        'Date_de_livraison',
    ];
}
