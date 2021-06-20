<?php

namespace App\Http\Livewire;

use App\Answers;
use App\ClassProgress;
use App\Document;
use App\Question;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class PreLesssonTest extends Component
{
    public $count = 0;
    public $index = 0;
    public $c_id;
    public $data = [];
    public $answers;
    public $temp_user_answers;
    public $course_name;
    public $contents;
    public $checkContent;
    public $last_page = false;


    public function mount(){
        $this->checkUrl();
    }

    public function checkUrl()
    {

        $cc = auth()->user()->students_slips;
        $p_id = session()->pull('p_id', 'null');

        foreach ($cc as $c) {
            if ($c->program_id == $p_id) {
                $this->c_id = $p_id;
                $this->course_name = $c->course_name;
                $this->init_data();
                return;
            }
        }

        return redirect()->back();
    }

    public function init_data()
    {
        $this->data = Question::where(['chapter' => 'pre-test', 'course_id' => $this->c_id])->get();

        if (!$this->data->isEmpty()) {
            $this->checkContent = true;
            $this->contents = $this->data[$this->count]->question;
            $this->count++;
        } else {
            $this->checkContent = false;
        }
    }

    public function next()
    {
        $this->getUserAnswers();

        if ($this->count < count($this->data)) {
            $this->contents = $this->data[$this->count]->question;
            $this->count++;
        } else {
            $this->last_page = true;
            $this->getStudentResult();
        }

    }

    public function getUserAnswers()
    {
        $this->validate([
            'answers' => 'required'
        ]);

        if ($this->answers != "") {
            Arr::set($this->temp_user_answers,$this->index, $this->answers);
            $this->index++;
        }

        $this->answers = "";
    }

    public function getStudentResult()
    {
        $total = 0;

        $this->temp_correct_ans = Arr::flatten($ans_chapters = Question::select('answer')
            ->where(['course_id' => $this->c_id, 'chapter' => 'pre-test'])
            ->get()->toArray());


        for ($i = 0; $i < count($this->temp_user_answers); $i++) {
            if (Str::lower($this->temp_user_answers[$i]) == Str::lower($this->temp_correct_ans[$i])) {
                $total++;
            }
        }

        $chapter_ans = new Answers();
        $chapter_ans->chapter = 'pre-test';
        $chapter_ans->result = $total;
        $chapter_ans->amount = count($this->temp_user_answers);
        $chapter_ans->user_id = auth()->id();
        $chapter_ans->course_id = $this->c_id;
        $chapter_ans->save();
    }

    public function render()
    {
        return view('livewire.pre-lessson-test');
    }
}
