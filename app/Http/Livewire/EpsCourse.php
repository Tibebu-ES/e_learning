<?php

namespace App\Http\Livewire;

use App\Program;
use App\User;
use Livewire\Component;


class EpsCourse extends Component
{

    public $join = 10;
    public $pending = 5;
    public $asked = 2;
    public $programs = [];
    public $category = [];



    public function mount()
    {
        $category = Program::where('program', 'Eps')-> distinct('category')->get('category');
        $this->category = $category->toArray();
        return $this->category;
    }


    public function getEpsCourse($cat)
    {

        $programs = Program::where('category',$cat)->get()->toArray();
        return $this->programs = $programs;
    }


    public function render()
    {
        return view('livewire.eps-course');
    }
}
