<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Questionnaire;

class QuestionController extends Controller
{
    public function index($questionnaireId)
    {
        $questions = Question::where('questionnaire_id', $questionnaireId)->get();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'questionnaire_id' => 'required|exists:questionnaires,id',
            'text' => 'required|string',
            'type' => 'required|string',
        ]);

        $question = Question::create($request->all());

        return response()->json($question, 201);
    }

    public function show(Question $question)
    {
        return $question;
    }

    public function update(Request $request, Questionnaire $questionnaire, Question $question)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        // Vérifie que la question appartient bien au questionnaire
        if ($question->questionnaire_id !== $questionnaire->id) {
            return response()->json(['message' => 'Cette question n\'appartient pas à ce questionnaire'], 404);
        }

        $question->update($request->only(['title']));

        return response()->json($question, 200);
    }


    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->delete();
    }
}
