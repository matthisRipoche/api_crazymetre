<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    // Colonnes autorisées pour le mass assignment
    protected $fillable = [
        'title',
    ];

    // Relation avec les questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
