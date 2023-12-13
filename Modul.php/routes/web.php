<?php

use Illuminate\Support\Facades\Route;

Route::get('/students/{id}/grades', [StudentController::class, 'viewGrades'])->name('students.grades');
Route::get('/students/{id}/grades/{grade}', [StudentController::class, 'editGrade'])->name('students.editGrade');
Route::put('/students/{id}/grades/{grade}', [StudentController::class, 'updateGrade'])->name('students.updateGrade');
