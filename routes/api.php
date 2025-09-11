<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\QuestionController;


Route::get('/questionnaires', [QuestionnaireController::class, 'index']);
Route::post('/questionnaires', [QuestionnaireController::class, 'store']);
Route::get('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'show']);
Route::put('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'update']);
Route::delete('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'destroy']);


Route::get('/{questionnaireId}/questions', [QuestionController::class, 'index']);
Route::post('/{questionnaireId}/questions', [QuestionController::class, 'store']);
Route::get('/{questionnaireId}/questions/{question}', [QuestionController::class, 'show']);
Route::put('/{questionnaireId}/questions/{question}', [QuestionController::class, 'update']);
Route::delete('/{questionnaireId}/questions/{question}', [QuestionController::class, 'destroy']);
