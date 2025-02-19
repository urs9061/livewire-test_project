<?php

namespace App\Livewire\Students;

use Livewire\Component;
use App\Models\Student;

class StudentList extends Component
{
    public $students;

    public function mount()
    {
        $this->students = Student::all();
    }

    public function render()
    {
        return view('livewire.student-list', ['students' => $this->students]);
    }
}
