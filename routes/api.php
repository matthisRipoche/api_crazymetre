<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ReponseController;

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

Route::get('/questions/{question}/reponses', [ReponseController::class, 'index']);
Route::post('/questions/{question}/reponse', [ReponseController::class, 'store']);
Route::get('/questions/{question}/reponses/{reponse}', [ReponseController::class, 'show']);
Route::put('/questions/{question}/reponses/{reponse}', [ReponseController::class, 'update']);
Route::delete('/questions/{question}/reponses/{reponse}', [ReponseController::class, 'destroy']);
