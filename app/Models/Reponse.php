<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    // Nom de la table (optionnel si Laravel devine bien)
    protected $table = 'reponses';

    // Les champs remplissables
    protected $fillable = [
        'label',
        'question_id',
        'url_image',
        'valeur',
    ];

    /**
     * Relation : une réponse appartient à une question
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
