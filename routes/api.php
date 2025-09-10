<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionnaireController;

Route::get('/questionnaires', [QuestionnaireController::class, 'index']);
Route::post('/questionnaires', [QuestionnaireController::class, 'store']);
Route::get('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'show']);
Route::put('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'update']);
Route::delete('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'destroy']);
