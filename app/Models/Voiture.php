<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $casts = [					//conversion des variables
    	'puissance' => 'int',
    	'prix' => 'float'
    ];

    protected $fillable = [					//variables pouvant être remplies
    	'modele',
    	'marque',
    	'puissance',
    	'annee',
    	'finition',
    	'description',
    	'photo_principale',
    	'prix'
    ];

}
