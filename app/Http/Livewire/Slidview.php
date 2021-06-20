<?php

namespace App\Http\Livewire;

use App\Answers;
use App\ClassProgress;
use App\Classroom;
use App\Document;
use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Arr;
use PDF;


class Slidview extends Component
{
    public $section_meta, $section_contents;
    public $count = 0;
    public $rate;
    public $p_id;
    public $checkContent, $checkClass, $checkDocs;
    public $title, $content, $attach;   // fetch and hold the current course data accordingly
    public $temp_length_start = 0;      // question counter for the current course
    public $temp_questions = [];        // holds questions for the current course
    public $temp_user_answers = [];     // holds student answers
    public $pre_btn = false;
    public $jump = false;
    public $finished = false;           // seize the status of the last data
    public $questions = false;          // holds the status of answer input filed
    public $class_id;
    public $class_type;
    public $answers;                    // temp value for each question
    public $ans_counter = 0;            // users' answer counter
    public $j = 0;

    /*  don't forget
     *  Turn on the class end section at last
     */

    /*
     *  implement the followings
     *  flash messages
     *  pre-class test
     *  group chat
     *  public folder clean up
     *
     *  password reset
     *
     *  handle question ans where
     *  user login back to the lesson
     */


    public function mount()
    {
        $this->checkContents();
    }

    public function checkContents()
    {

        $p_id = session()->pull('p_id', 'null');
        $this->p_id = $p_id;


        $all_classes = Classroom::all();
        $docs = Document::where(['course_id' => $p_id])->get();

        if ($all_classes->isEmpty() && $docs->isEmpty()) {
            $this->checkContent = false;
            $this->checkClass = true;
            $this->checkDocs = false;

        } else {

            $tempStudent = false;

            foreach ($all_classes as $single_c) {
                for ($i = 0; $i < count(json_decode($single_c->students)); $i++) {

                    $temp = data_get(json_decode($single_c->students), $i);
                    if (($temp == Auth::user()->name) && ($docs[0]['course_name'] == $single_c->course_name
                            && ($single_c->start == true))) {
                        $tempStudent = true;
                        $this->class_id = $single_c->id;
                        break;
                    }

                }
            }

            if (!$tempStudent) {

                $this->checkContent = false;
                $this->checkClass = true;
                $this->checkDocs = false;

            } else {

                $titles = json_decode($docs[0]['course_title']);
                $contents = json_decode($docs[0]['course_content']);
                $attachments = json_decode($docs[0]['course_attachment']);
                $this->section_meta = $docs[0]['course_name'];
                $this->title = $titles;
                $this->content = $contents;
                $this->attach = $attachments;

                $this->checkContent = true;
                $this->checkClass = false;
                $this->checkDocs = false;

                $this->init_data();
            }
        }

    }

    public function init_data()
    {
        $this->class_type = Classroom::select('type')->where(['id' => $this->class_id])->get()->toArray();
        $this->rate = (100 / (1 + (count($this->title))));

        $getCurrentCount = ClassProgress::select('current_count')
            ->where(['user_id' => auth()->id(), 'course_name' => $this->section_meta])
            ->get()->toArray();

        if ($getCurrentCount != null) {

            $this->count = $getCurrentCount[0]['current_count'];
            $this->next($getCurrentCount[0]['current_count']);

        } else {

            $this->next(null);
        }
    }


    public function next($current_count)
    {
        $this->getUserAnswers();

        // get count for each iteration
        $getCurrentCount = ClassProgress::select('current_count')
            ->where(['user_id' => auth()->id(), 'course_name' => $this->section_meta])
            ->get()->toArray();

        if ($this->count <= count($this->title)) {

            if ($getCurrentCount == null && $current_count == null) {

                $pro_info = [
                    'course_name' => $this->section_meta,
                    'user_id' => auth()->id(),
                    'current_value' => $this->rate,
                    'current_count' => $this->count
                ];

                $data = array(
                    'title' => $this->title[$this->count],
                    'content' => [$this->content[$this->count]]
                );

                ClassProgress::create($pro_info);
                $this->count++;

            } else {

                if ((!$this->jump) && ($this->count < count($this->title))) {
                    $data = array(
                        'title' => $this->title[$this->count],
                        'content' => [$this->content[$this->count]]
                    );
                    $this->jump = false;
                }

                if ($this->count == 0) {

                    $pre_title = $this->title[$this->count];
                    $data = $this->getChapterQuestion($pre_title);

                } else {


                    $this->pre_btn = true;

                    $pre_title = $this->title[--$this->count];

                    if ($pre_title == last($this->title)) {

                        $data = $this->getLastChapterQuestion($pre_title);

                    } else if ($pre_title == $this->title[++$this->count]) {

                        $data = array(
                            'title' => $this->title[$this->count],
                            'content' => [$this->content[$this->count]]
                        );

                        $this->count++;

                    } else {

                        $data = $this->getChapterQuestion($pre_title);

                    }
                }

            } //end of questions

            $this->section_contents = $data;
        }

    }

    public function previous()
    {
        $this->count--;

        if ($this->count > 0) {

            $data = array(
                'title' => $this->title[$this->count - 1],
                'content' => [$this->content[$this->count - 1]]
            );

            $this->section_contents = $data;

            $this->questions = false;

        } else {
            $this->pre_btn = false;
            $this->count = 1;
        }

    }


    public function getLastChapterQuestion($pre_title)
    {
        $q_data = Question::where(['chapter' => $pre_title, 'course_id' => $this->p_id])->get();

        if ($q_data->isEmpty()) {
            $data = $this->attachments();
        } else if ($q_data->isEmpty()) {

            $i = 0;
            foreach ($q_data as $q) {
                Arr::set($this->temp_questions, $i, $q->question);
                $i++;
            }

            $temp_length = count($q_data->toArray());

            if ($this->temp_length_start < $temp_length) {

                $data = array(
                    'title' => 'Quiz - ' . $pre_title,
                    'content' => [$this->temp_questions[$this->temp_length_start]]
                );
                $this->temp_length_start++;
                $this->count++;
                $this->questions = true;
            } else {

                $this->updateStudentResult($pre_title);
                $this->temp_length_start = 0;
                $this->questions = false;
                $data = $this->attachments();
            }


        } else {
            $this->temp_length_start = 0;
            $this->questions = false;
            $data = $this->attachments();
        }

        return $data;
    }

    public function getChapterQuestion($pre_title)
    {
        $q_data = Question::where(['chapter' => $pre_title, 'course_id' => $this->p_id])->get();

        if ($q_data->isEmpty()) {

            $data = array(
                'title' => $this->title[$this->count],
                'content' => [$this->content[$this->count]]
            );


            $this->count++;

            ClassProgress::where(['user_id' => auth()->id(), 'course_name' => $this->section_meta])
                ->update(['current_value' => ($this->rate * ($this->count + 1)), 'current_count' => $this->count]);

            $this->jump = true;


        } else {

            $i = 0;
            foreach ($q_data as $q) {
                Arr::set($this->temp_questions, $i, $q->question);
                $i++;
            }


            $temp_length = count($q_data->toArray());


            if ($this->temp_length_start < $temp_length) {

                $data = array(
                    'title' => 'Quiz - ' . $pre_title,
                    'content' => [$this->temp_questions[$this->temp_length_start]]
                );

                $this->temp_length_start++;
                $this->questions = true;

            } else {

                $this->updateStudentResult($pre_title);

                $this->temp_length_start = 0;

                $data = array(
                    'title' => $this->title[$this->count],
                    'content' => [$this->content[$this->count]]
                );

                $this->count++;

                ClassProgress::where(['user_id' => auth()->id(), 'course_name' => $this->section_meta])
                    ->update(['current_value' => ($this->rate * ($this->count + 1)), 'current_count' => $this->count]);

                $this->jump = true;
                $this->questions = false;
            }

        }

        return $data;
    }

    public function attachments()
    {

        if ($this->attach != null) {
            $data = array(
                'title' => 'Attachments',
                'content' => $this->attach
            );
        } else {
            $data = array(
                'title' => 'Attachments',
                'content' => ['There are no attachments'],
            );
        }


        $this->finished = true;
        $this->count++;

        ClassProgress::where(['user_id' => auth()->id(), 'course_name' => $this->section_meta])
            ->update(['current_value' => ($this->rate * ($this->count + 1)), 'current_count' => $this->count]);

        $this->count++; // to overflow the value of the count value

//        Students_slip::where(['user_id'=>auth()->id(),'course_name'=>$this->section_meta])
//            ->update(['completed'=>true]);

        //$this->courseFinale();
        return $data;
    }


    public function getUserAnswers()
    {
        if ($this->questions == true) {

            $this->validate([
                'answers' => 'required'
            ]);

            if ($this->answers != "") {
                Arr::set($this->temp_user_answers, $this->ans_counter, $this->answers);
                $this->ans_counter++;
            }
        }

        $this->answers = "";
    }

    public function updateStudentResult($chapter)
    {

        $total = 0;

        $correct_ans = Arr::flatten(Question::select('answer')
            ->where(['course_id' => $this->p_id, 'chapter' => $chapter])
            ->get()->toArray());

        $check = Answers::select('chapter')
            ->where(['course_id' => $this->p_id, 'chapter' => $chapter, 'user_id' => auth()->id()])
            ->get();


        for ($i = 0; $i < count($this->temp_user_answers); $i++) {
            if ($this->temp_user_answers[$i] == $correct_ans[$i]) {
                $total++;
            }
        }

        if ($check->isEmpty()) {

            $chapter_ans = new Answers();
            $chapter_ans->chapter = $chapter;
            $chapter_ans->result = $total;
            $chapter_ans->amount = count($this->temp_user_answers);
            $chapter_ans->user_id = auth()->id();
            $chapter_ans->course_id = $this->p_id;
            $chapter_ans->save();

        } else {

            Answers::where(['chapter' => $chapter,
                'user_id' => auth()->id(), 'course_id' => $this->p_id])
                ->update(['result' => $total]);
        }


        $this->temp_user_answers = [];
        $this->ans_counter = 0;

    }


    public function downloadDoc($f_name)
    {
        $file= public_path('storage\\documents\\').$f_name;

        //dd($file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        $url = Storage::url('app/public/documents/'.$f_name);

        //return Storage::download(asset($url),'me');

        return response()->download(asset($url), 'filename.pdf', $headers);
    }

    public function courseFinale()
    {

        // set certificate file
        $certificate = 'file://'.base_path().'/public/tcpdf.crt';

        // set additional information in the signature
        $info = array(
            'Name' => 'TCPDF',
            'Location' => 'Office',
            'Reason' => 'Testing TCPDF',
            'ContactInfo' => 'http://www.tcpdf.org',
        );

        // set document signature
        PDF::setSignature($certificate, $certificate, 'tcpdfdemo', '', 2, $info);

        PDF::SetFont('helvetica', '', 12);
        PDF::SetTitle('Hello World');
        PDF::AddPage();

        // print a line of text
        $text = view('tcpdf');

        // add view content
        PDF::writeHTML($text, true, 0, true, 0);

        // add image for signature
        PDF::Image('tcpdf.png', 180, 60, 15, 15, 'PNG');

        // define active area for signature appearance
        PDF::setSignatureAppearance(180, 60, 15, 15);

        // save pdf file
        PDF::Output(public_path('hello_world.pdf'), 'F');

        PDF::reset();

        dd('pdf created');
    }

    public function render()
    {
        return view('livewire.slidview');
    }

}
