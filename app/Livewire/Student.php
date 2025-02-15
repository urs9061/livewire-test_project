<?php

namespace App\Livewire;

use Livewire\Component;



class Student extends Component
{
    public $fname;
    public $lname;
    public $fullname;

    public function PrintName()
    {
        $this->fullname = $this->fname . ' ' . $this->lname;
    }

    public function render()
    {
        return view('livewire.student');
    }
}
