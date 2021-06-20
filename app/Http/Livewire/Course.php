<?php

namespace App\Http\Livewire;

use App\Program;
use App\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Course extends Component
{

    public $join = 10;
    public $pending = 5;
    public $asked = 2;
    public $programs = [];
    public $category = [];


    public function mount()
    {
        $data = Program::distinct()->where(['program'=> 'Standard'])
            ->get(['category','description'])->toArray();
        $this->category = $data;
        return $this->category;
    }


    public function getCourses($cat)
    {

        $programs = Program::where('category',$cat)->get()->toArray();
        return $this->programs = $programs;
    }


    public function render()
    {
        return view('livewire.course');
    }
}
