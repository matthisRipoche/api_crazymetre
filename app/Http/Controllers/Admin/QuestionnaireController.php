<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questionnaire; // Assure-toi que le modèle existe

class QuestionnaireController extends Controller
{
    // Affiche la liste des questionnaires
    public function index()
    {
        $questionnaires = Questionnaire::all();
        return $questionnaires;
    }

    // Enregistre un nouveau questionnaire
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Questionnaire::create($request->all());
    }

    public function show(Questionnaire $questionnaire)
    {
        return $questionnaire;
    }

    // Met à jour un questionnaire
    public function update(Request $request, Questionnaire $questionnaire)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $questionnaire->update($request->all());
    }

    // Supprime un questionnaire
    public function destroy(Questionnaire $questionnaire)
    {
        $questionnaire->delete();
    }
}
