<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get("/aluno", [AlunoController::class,"index"])->name("aluno");
Route::post("/criaraluno", [AlunoController::class,"store"])->name("criaraluno");
Route::put("/aluno/{id}", [AlunoController::class,"update"])->name("aluno");
Route::delete("/deletealuno/{id}", [AlunoController::class,"destroy"])->name("deletealuno");
