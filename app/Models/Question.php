<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Colonnes autorisées pour le mass assignment
    protected $fillable = [
        'title',
        'questionnaire_id'
    ];

    // Relation inverse : chaque question appartient à un questionnaire
    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
