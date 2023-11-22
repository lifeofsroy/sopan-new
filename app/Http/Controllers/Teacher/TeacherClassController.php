<?php

namespace App\Http\Controllers\Teacher;

use App\Support\ZoomFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherClassController extends Controller
{
    public function index()
    {
        return view('pages.teacher.class.all-class');
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

    public function create(Request $request)
    {
        dd($request->all());
        $request->validate([
            'meet_topic' => ['required'],
            'meet_agenda' => ['required'],
            'meet_type' => ['required'],
            'meet_duration' => ['required'],
            'meet_password' => ['required'],
            'meet_start' => ['required'],
        ]);

        $data = [
            "agenda" => $request->meet_agenda,
            "topic" => $request->meet_topic,
            "type" => $request->meet_type,
            "duration" => $request->meet_duration,
            "timezone" => 'Asia/Calcutta',
            "password" => $request->meet_password,
            "start_time" => $request->meet_start,
            "pre_schedule" => false,
            "settings" => [
                'join_before_host' => false,
                'host_video' => false,
                'participant_video' => false,
                'mute_upon_entry' => false,
                'waiting_room' => false,
                'audio' => 'both',
                'auto_recording' => 'none',
                'approval_type' => 0,
            ]
        ];

        $meeting = ZoomFacade::createMeeting($data);

        return $meeting;
    }

    public function delete($id)
    {
        $res = ZoomFacade::deleteMeeting($id);
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
            'meet_start' => ['required'],
        ]);

        $data = [
            "agenda" => $request->meet_agenda,
            "topic" => $request->meet_topic,
            "type" => $request->meet_type,
            "duration" => $request->meet_duration,
            "timezone" => 'Asia/Calcutta',
            "password" => $request->meet_password,
            "start_time" => $request->meet_start,
            "pre_schedule" => false,
            "settings" => [
                'join_before_host' => false,
                'host_video' => false,
                'participant_video' => false,
                'mute_upon_entry' => false,
                'waiting_room' => false,
                'audio' => 'both',
                'auto_recording' => 'none',
                'approval_type' => 0,
            ]
        ];

        $res = ZoomFacade::updateMeeting($id, $data);
        return $res;
    }
}
