<?php

namespace App\Http\Livewire;

use App\Comment;
use App\Discussion;
use Livewire\Component;

class TopicComments extends Component
{
    public $disc = [];
    public $top_comment = [];

    public function mount(){
        $data = Discussion::orderBy('created_at','desc')->get()->toArray();
        $cdata = Comment::all();
        $this->disc = $data;
        $this>$this->top_comment = $cdata;
    }



    public function render()
    {
        return view('livewire.topic-comments');
    }
}
