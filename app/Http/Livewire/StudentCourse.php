<?php

namespace App\Http\Livewire;

use App\Notifications\notice;
use App\Program;
use App\Students_slip;
use App\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class StudentCourse extends Component
{
    public $allCourses = [];
    public $allRegCourses = [];

    public function mount()
    {
        $pdata = Program::all()->toArray();
        $sdata = Students_slip::all()->toArray();
        $this->allCourses = $pdata;
        $this->allRegCourses = $sdata;
    }

    public function register($program_id, $cname, $des, $cat)
    {
        $data = [
            'program_id' => $program_id,
            'course_name' => $cname,
            'user_id' => auth()->id(),
            'user_name' => Auth::user()->name,
            'description' => $des,
            'category' => $cat,
            'registration_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ];

        Students_slip::create($data);
        $totReq = Program::where('id', $program_id)->get('requested')->toArray();
        $totRequests = $totReq[0]['requested'];
        $totRequests++;
        Program::where('course_name', $cname)->update(['requested' => $totRequests]);

        $admin_user = Admin::all();
        Notification::send($admin_user, new notice(Auth::user(),Auth::user()->name.' has registered <strong>'.$cname.'</strong>' ));

        return $this->redirect(route('student.course'));
    }

    public function render()
    {
        return view('livewire.student-course');
    }
}
