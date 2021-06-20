<?php

namespace App\Http\Livewire;

use App\Program;
use Livewire\Component;
use Livewire\WithFileUploads;

class ClassContent extends Component
{
    use WithFileUploads;

    public $doc_files = [];
    public $steps = [];
    public $q_steps = [];
    public $pq_steps = [];
    public $addedCourses;


    public function mount(){
        $data =  Program::select('id','course_name')->get()->toArray();
        $this->addedCourses = $data;
    }

    public function addPQuestion(){
        $this->pq_steps[] = count($this->pq_steps) + 1;
    }

    public function addQuestion(){
        $this->q_steps[] = count($this->q_steps) + 1;
    }

    public function addContent(){
        $this->steps[] = count($this->steps) + 1;
    }

    public function removePQuestion($index){
        unset($this->pq_steps[$index]);
    }

    public function removeStep($index){
        unset($this->steps[$index]);
    }

    public function removeQuestion($index){
        unset($this->q_steps[$index]);
    }

    public function removeFile($index){
        unset($this->doc_files[$index]);
    }

    public function render(){
        return view('livewire.class-content');
    }


    //    public function save(){
//
//        $this->validate([
//            'doc_files.*' => 'file|max:1024',
//        ]);
//
//        foreach ($this->doc_files as $doc){
//            $doc->store('doc_files','public');
//        }
//
//        return redirect()->back();
//    }

}
