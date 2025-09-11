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
}
