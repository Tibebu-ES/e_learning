<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Answers;
use App\ClassProgress;
use App\Comment;
use App\Discussion;
use App\Notifications\notice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;


class UserController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        $stud_progress = ClassProgress::where(['user_id'=>auth()->id()])->get()->toArray();
        $stud_course = auth()->user()->students_slips()->orderBy('created_at','desc')->get();
        return view('student.dashboard',compact('stud_course','stud_progress'));
    }

    public function course(){
        return view('student.course');
    }

    public function classroom(){

        $pre_test = Answers::where(['user_id' => auth()->id(),'chapter' => 'pre-test'])->get();
        $stud_course = auth()->user()->students_slips->toArray();

        return view('student.classroom',compact('stud_course','pre_test'));
    }

    public function profile(){
        $data = Discussion::orderBy('created_at','desc')->get()->toArray();
        return view('student.profile')->with(['disc'=>$data]);
    }

    public function insertComment(Request $request,$topic_id){

        $this->validate($request,[
            'newComment' => 'required'
        ]);

        $data = [
            'user_id'=> auth()->id(),
            'user_name'=> Auth::user()->name,
            'forum_id'=>$topic_id,
            'commented_data' => $request['newComment'],
        ];

        Comment::create($data);

        $title = Discussion::select('title')->where('id',$topic_id)->get()->toArray();

        $admin_user = Admin::all();
        Notification::send($admin_user, new notice(Auth::user(),Auth::user()->name.' has commented on '.$title[0]['title'] ));

        return redirect()->back();
    }

    public function updateProfile(Request $request){

        $data = [
            'name'=>$request['name'],
            'description'=>$request['description']
        ];


        User::where('id',auth()->id())->update($data);
        return redirect()->back();
    }

    public function virtualClass(Request $request, $p_id){

        $cc = auth()->user()->students_slips;

        foreach ($cc as $c){
            if($c->program_id == $p_id){
                $request->session()->put('p_id', $p_id);
                return view('student.virtual_class')
                    ->with(['user'=> Auth::user()]);
                break;
            }
        }


        return redirect(route('student.classroom'));
    }

    public function preClass(Request $request, $p_id){

        $request->session()->put('p_id', $p_id);
        return view('student.pre_test')
            ->with(['user'=> Auth::user()]);
    }
}
