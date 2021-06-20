<?php

namespace App\Http\Livewire;

use App\Classroom;
use App\Teacher;
use App\User;
use Livewire\Component;

class ClassRoomData extends Component
{
    public $classrooms;

    public function mount(){
        $classrooms = Classroom::orderBy('created_at', 'desc')->get()->toArray();
        $this->classrooms = $classrooms;
    }

    public function updateStart($status,$id){

        if($status == 1){
            Classroom::where('id',$id)
                ->update(['start'=>false]);
        }else{
            Classroom::where('id',$id)
                ->update(['start'=>true]);
        }

        return redirect(route('admin.classroom'));
    }

    public function render(){
        return view('livewire.class-room-data');
    }
}
