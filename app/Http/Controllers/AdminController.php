<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Comment;
use App\discussion;
use App\Document;
use App\Program;
use App\Question;
use App\Students_slip;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\notice;
use Illuminate\Support\Facades\Notification;
use Livewire\WithFileUploads;
use Illuminate\Support\Arr;


class AdminController extends Controller
{
    use WithFileUploads;

    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){

        $c_student = count(User::all()->toArray());
        $c_program = count(Program::all()->toArray());
        $c_teacher = count(Teacher::all()->toArray());
        $c_discussion = count(Discussion::all()->toArray());

        $latest_stu = User::orderBy('created_at', 'desc')
            ->limit(10)->get();

        $latest_pro = Program::orderBy('created_at', 'desc')
            ->limit(4)->get();


        return view('admin.dashboard')
            ->with(['current' => 'Dashboard', 'clogged' => auth()->user()->name,
                'c_student' => $c_student, 'c_program' => $c_program,
                'c_teacher' => $c_teacher, 'c_discussion' => $c_discussion,
                'latest_stu' => $latest_stu, 'latest_pro' => $latest_pro]);
    }

    public function getStudents(){
        $data = Students_slip::orderBy('registration_date', 'desc')->get()->toArray();
        return view('admin.student')->with(["current" => 'Students', 'data' => $data]);
    }

    public function getStandard(){
        return view('admin.standard')->with(["current" => 'Courses - Standard']);
    }

    public function getEps(){
        return view('admin.eps')->with(["current" => 'Courses - Courses - EPS']);
    }

    public function getTeachers(){
        $data = Teacher::all();
        $addedCourses = Program::all();
        return view('admin.teachers')
            ->with(["current" => 'Teachers', 'teachers' => $data, 'Courses' => $addedCourses]);
    }

    public function getDiscussions(){
        return view('admin.discussion')->with(["current" => 'Discussion']);
    }

    public function getDocuments(){

        $docs = Document::orderBy('created_at', 'desc')->get();
//
//        foreach ($docs as $d){
//            $pre_test = Document::find($d->course_id)->questions->where('chapter','pre-test');
//            dd($pre_test);
//        }

        return view('admin.document')
            ->with(["current" => 'Documents', 'docs' => $docs]);
    }

    public function getClassroom(){

        $u_data = User::all()->toArray();
        $t_data = Teacher::all()->toArray();
        $p_data = Program::all()->toArray();

        return view('admin.classroom')
            ->with(["current" => 'Classroom',
                'allUsers' => $u_data, 'allTeachers' => $t_data, 'allCourses' => $p_data]);
    }

    public function addStandardProgram(Request $request){

        $new_des = $request['description'];
        $old_des = Program::select('description')
            ->where(['category' => $request['category']])->get()->toArray();

        if ($old_des != null) {
            $request['description'] = $old_des[0]['description'];
        } else {
            $request['description'] = $new_des;
        }

        $request->validate([
            'category' => 'required',
            'course_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);


        $request['program'] = 'Standard';

        Program::create($request->all());

        return redirect()->back()->with('message', 'The course added successfully');
    }

    public function addEpsProgram(Request $request){

        $request->validate([
            'category' => 'required',
            'course_name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);


        $request['program'] = 'Eps';
        Program::create($request->all());

        return redirect()->back()->with('message', 'The course added successfully');
    }

    public function createTopic(Request $request){

        $this->validate($request, [
            'title' => 'required'
        ]);

        Discussion::create($request->all());
        return redirect()->back();
    }

    public function insertComment(Request $request, $topic_id){

        $this->validate($request, [
            'newComment' => 'required'
        ]);

        $data = [
            'user_id' => auth()->id(),
            'user_name' => Auth::user()->name,
            'forum_id' => $topic_id,
            'commented_data' => $request['newComment'],
        ];

        Comment::create($data);
        return redirect()->back();
    }

    public function addTeacher(Request $request){

        $this->validate($request, [
            "full_name" => "required",
            "address" => "required",
            "mobile" => "required",
            "speciality" => "required"
        ]);

        $data = [
            "full_name" => $request['full_name'],
            "address" => $request['address'],
            "mobile" => $request['mobile'],
            'speciality' => $request['speciality']
        ];

        Teacher::create($data);

        return redirect()->back();
    }

    public function assignCourse(Request $request, $id){

        $this->validate($request, [
            'course_name' => 'required'
        ]);


        $assign = Teacher::select('assigned_course')
            ->where(['id' => $id])->get()->toArray();


        if ($assign[0]['assigned_course'] == null)
            $assign[0]['assigned_course'] = $request['course_name'];
        else
            $assign[0]['assigned_course'] = $assign[0]['assigned_course'] . ' - ' . $request['course_name'];


        Teacher::where(['id' => $id])
            ->update(['category' => $request['category'],
                'course_name' => $request['course_name'],
                'assigned_course' => $assign[0]['assigned_course']]);

        return redirect()->back();
    }

    public function sendNotice(Request $request){
        $users = User::all();
        Notification::send($users, new notice(Auth::user(), $request['message']));
        return redirect()->back();
    }

    public function save($docs){
        foreach ($docs as $doc) {
            $fileName = $doc->getClientOriginalName();
            $doc->storeAs('documents', $fileName, 'public');
        }
    }

    public function createContent(Request $request){

        $c_id = Program::select()->where(['course_name' => $request['course_name']])->get()->toArray();

        $this->validate($request, [
            'course_name' => 'required',
        ]);

        $data = Document::where(['course_name' => $request['course_name']])->get();

        if ($data->isEmpty()) {

            $attachFile = array();

            if ($request->has('files')) {
                for ($i = 0; $i < count($request['files']); $i++) {
                    $attachFile[$i] = $request['files'][$i]->getClientOriginalName();
                }
                $this->save($request['files']);
                $attachFile = json_encode($attachFile);

                $data = [
                    'course_id' => $c_id[0]['id'],
                    'course_name' => $request['course_name'],
                    'course_title' => json_encode($request['course_title']),
                    'course_content' => json_encode($request['course_content']),
                    'course_attachment' => $attachFile
                ];
            } else {

                $data = [
                    'course_id' => $c_id[0]['id'],
                    'course_name' => $request['course_name'],
                    'course_title' => json_encode($request['course_title']),
                    'course_content' => json_encode($request['course_content'])
                ];
            }

            Document::create($data);

        } else {


            $temp_title = json_decode($data[0]->course_title);
            $temp_content = json_decode($data[0]->course_content);
            $temp_attachment = json_decode($data[0]->course_attachment);

            if ($request->has('files')) {
                for ($i = 0; $i < count($request['files']); $i++) {
                    $attachFile[$i] = $request['files'][$i]->getClientOriginalName();
                }
                $this->save($request['files']);

                $update_data = [
                    'course_title' => json_encode(Arr::collapse([$temp_title, Arr::wrap($request['course_title'])])),
                    'course_content' => json_encode(Arr::collapse([$temp_content, Arr::wrap($request['course_content'])])),
                    'course_attachment' => json_encode(Arr::collapse([$temp_attachment, $attachFile]))
                ];

            }else{

                $update_data = [
                    'course_title' => json_encode(Arr::collapse([$temp_title, Arr::wrap($request['course_title'])])),
                    'course_content' => json_encode(Arr::collapse([$temp_content, Arr::wrap($request['course_content'])])),
                ];
            }


            Document::where(['course_name' => $request['course_name']])
                ->update($update_data);

            // added question to the database
            if($request['question'] != null){

                for ($i=0;$i<count($request['question']); $i++){

                    $q_data = [
                        'question' => $request['question'][$i],
                        'answer' => $request['answer'][$i],
                        'course_id' => $c_id[0]['id'],
                        'chapter' => $request['course_title'][0]
                    ];
                    Question::create($q_data);
                }
            }


            if($request['p_question'] != null){

                for ($i=0;$i<count($request['p_question']); $i++){

                    $q_data = [
                        'question' => $request['p_question'][$i],
                        'answer' => $request['answer_p'][$i],
                        'course_id' => $c_id[0]['id'],
                        'chapter' => 'pre-test',
                    ];
                    Question::create($q_data);
                }
            }
        }

        return redirect()->back();
    }

    public function allowStud(Request $request, $id){

        $check = Students_slip::select('payment')->where('id', $id)->get()->toArray();

        if ($check[0]['payment']) {
            Students_slip::where('id', $id)->update(['payment' => false]);
        } else {
            Students_slip::where('id', $id)->update(['payment' => true]);
        }

        return redirect()->back();
    }

    public function createClass(Request $request){

        $type = $request['users'];

        if (count($type) > 1) {
            $type = 'Group';
        } else {
            $type = "Single";
        }

        $data = [
            "className" => $request['className'],
            "course_name" => $request['course_name'],
            "type" => $type,
            "teacher" => $request['teacher'],
            'students' => json_encode($request['users'])
        ];

        Classroom::create($data);
        return redirect()->back();
    }
}
