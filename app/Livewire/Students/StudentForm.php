<?php

namespace App\Livewire\Students;

use Livewire\Component;
use App\Models\Student;

class StudentForm extends Component
{
    public $first_name;
    public $last_name;
    public $grade;
    public $age;
    public $gender;
    public $address;
    public $tp_no;
    
    public function store_student()
    {
        $this->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'grade' => 'required|string|max:20',
            'age' => 'required|integer',
            'gender' => 'required|string|max:10|in:Male,Female',
            'address' => 'required|string|max:200',
            'tp_no' => 'required|string|max:15',
        ]);
        StudentForm::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'grade' => $this->grade,
            'age' => $this->age,
            'gender' => $this->gender,
            'address' => $this->address,
            'tp_no' => $this->tp_no,
        ]);

        $this->reset(['first_name', 'last_name', 'grade','age','gender','address','tp_no']);

        session()->flash('message', 'Student Created Successfully.');
    }
    public function render()
    {
        return view('livewire.students.student-form');
    }
}
