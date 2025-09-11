<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reponse;
use App\Models\Question;

class ReponseController extends Controller
{
    public function index($questionId)
    {
        $reponses = Reponse::where('question_id', $questionId)->get();
        return response()->json($reponses, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'label' => 'required|string|max:255',
            'url_image' => 'nullable|string|max:255',
            'valeur' => 'required|integer',
        ]);

        $reponse = Reponse::create($validated);

        return response()->json($reponse, 201);
    }

    public function show(Question $question, Reponse $reponse)
    {
        // Vérifie que la réponse appartient bien à la question
        if ($reponse->question_id !== $question->id) {
            return response()->json(['message' => 'Réponse non trouvée pour cette question'], 404);
        }

        return response()->json($reponse, 200);
    }

    public function update(Request $request, Question $question, Reponse $reponse)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'url_image' => 'nullable|string|max:255',
            'valeur' => 'required|integer',
        ]);

        $reponse->update($validated);

        return response()->json($reponse, 200);
    }

    public function destroy(Reponse $reponse)
    {
        $reponse->delete();

        return response()->json(['message' => 'Réponse supprimée avec succès'], 200);
    }
}
