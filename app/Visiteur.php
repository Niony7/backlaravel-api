<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $table = 'visiteurs';

    protected $fillable = ['NumVisiteur', 'nom', 'NbJours', 'TarifJournalier'];

}
