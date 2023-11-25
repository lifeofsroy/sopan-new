<?php

namespace App\Http\Controllers\Teacher;

use App\Support\ZoomFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ZoomClass;

class TeacherClassController extends Controller
{
    public function index()
    {
        return view('pages.teacher.class.all-class');
    }

    public function createPage()
    {
        return view('pages.teacher.class.create-class');
    }

    public function all()
    {
        $mettings = ZoomFacade::getAllMeeting();
        return $mettings;
    }

    public function show($id)
    {
        $meeting = ZoomFacade::showMeeting($id);
        return $meeting;
    }

    public function updateOrCreateClass($data)
    {
        ZoomClass::updateOrCreate([
            'meeting_id' => $data['id'],
        ], [
            'user_id' => auth()->id(),
            'host_id' => $data['host_id'],
            'topic' => $data['topic'],
            'agenda' => $data['agenda'],
            'status' => $data['status'],
            'start_at' => $data['start_time'],
            'duration' => $data['duration'],
            'type' => $data['type'],
            'password' => $data['password'],
            'email' => $data['host_email'],
            'join_url' => $data['join_url'],
            'approval' => ($data['settings'])['approval_type']
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'meet_topic' => ['required'],
            'meet_agenda' => ['required'],
            'meet_type' => ['required'],
            'meet_duration' => ['required'],
            'meet_password' => ['required'],
            'meet_start' => ['required', 'after_or_equal:today'],
            'meet_approval' => ['required'],
        ]);

        $data = [
            "agenda" => $request->meet_agenda,
            "topic" => $request->meet_topic,
            "type" => $request->meet_type,
            "duration" => $request->meet_duration,
            "timezone" => 'Asia/Kolkata',
            "password" => $request->meet_password,
            "start_time" => date('Y-m-d\TH:i:s\Z', strtotime($request->meet_start)),
            "pre_schedule" => false,
            "settings" => [
                'join_before_host' => false,
                'host_video' => false,
                'participant_video' => false,
                'mute_upon_entry' => false,
                'waiting_room' => false,
                'audio' => 'both',
                'auto_recording' => 'none',
                'approval_type' => (int)$request->meet_approval,
            ]
        ];

        $meeting = ZoomFacade::createMeeting($data);

        if ($meeting['status']) {
            $this->updateOrCreateClass(($meeting['data']));
        }


        return $meeting;
    }

    public function delete($id)
    {
        $res = ZoomFacade::deleteMeeting($id);

        $class = ZoomClass::where('meeting_id', $id)->where('user_id', auth()->id())->first();
        $class->delete();

        return $res;
    }

    public function edit($id)
    {
        $meeting = ZoomFacade::showMeeting($id);
        return $meeting;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'meet_topic' => ['required'],
            'meet_agenda' => ['required'],
            'meet_type' => ['required'],
            'meet_duration' => ['required'],
            'meet_password' => ['required'],
            'meet_start' => ['required', 'after_or_equal:today'],
            'meet_approval' => ['required'],
        ]);

        $data = [
            "agenda" => $request->meet_agenda,
            "topic" => $request->meet_topic,
            "type" => $request->meet_type,
            "duration" => $request->meet_duration,
            "timezone" => 'Asia/Kolkata',
            "password" => $request->meet_password,
            "start_time" => date('Y-m-d\TH:i:s\Z', strtotime($request->meet_start)),
            "pre_schedule" => false,
            "settings" => [
                'join_before_host' => false,
                'host_video' => false,
                'participant_video' => false,
                'mute_upon_entry' => false,
                'waiting_room' => false,
                'audio' => 'both',
                'auto_recording' => 'none',
                'approval_type' => (int)$request->meet_approval,
            ]
        ];

        $res = ZoomFacade::updateMeeting($id, $data);

        if ($res['status']) {
            ZoomClass::updateOrCreate([
                'meeting_id' => $id,
            ], [
                'user_id' => auth()->id(),
                'topic' => $request->meet_topic,
                'agenda' => $request->meet_agenda,
                'start_at' => date('Y-m-d\TH:i:s\Z', strtotime($request->meet_start)),
                'duration' => $request->meet_duration,
                'type' => $request->meet_type,
                'password' => $request->meet_password,
                'approval' => (int)$request->meet_approval
            ]);
        }

        return $res;
    }

    public function upcoming()
    {
        $meetings = ZoomFacade::getUpcomingMeeting();
        return $meetings;
    }

    public function previous()
    {
        $meetings = ZoomFacade::getPreviousMeetings();
        return $meetings;
    }

    public function end($id)
    {
        $res = ZoomFacade::endMeeting($id);
        return $res;
    }

    public function recover($id)
    {
        $res = ZoomFacade::recoverMeeting($id);
        return $res;
    }

    public function users()
    {
        $users = ZoomFacade::getUsers(['status' => 'active']);
        return $users;
    }
}
