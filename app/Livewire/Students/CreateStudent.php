<?php

namespace App\Livewire\Students;

use Livewire\Component;

class CreateStudent extends Component
{
    public $fname;
    public $lname;
    public $fullname;
    public function save()
    {
        $this->fullname = $this->fname . ' ' . $this->lname;
    }

    public function render()
    {
        return view('livewire.students.create-student');
    }
}
