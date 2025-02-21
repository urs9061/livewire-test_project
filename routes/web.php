<?php

use Illuminate\Support\Facades\Route;
//use App\Livewire\Student;
use App\Livewire\Students\CreateStudent;
use App\Livewire\Students\StudentForm;
use App\Livewire\Students\StudentList;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/student', CreateStudent::class);
Route::get('/student/form', StudentForm::class);
Route::get('/student/list', StudentList::class);


