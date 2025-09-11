<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

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

        return response()->json($questionnaire, 201);
    }

    public function show(Question $question)
    {
        return $question;
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'questionnaire_id' => 'required|exists:questionnaires,id',
            'text' => 'required|string',
            'type' => 'required|string',
        ]);

        $question->update($request->all());
    }

    public function destroy(Question $question)
    {
        $question->delete();
    }
}
