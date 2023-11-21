<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ZoomSetting;
use App\Support\ZoomFacade;

class ZoomController extends Controller
{
    public function getAllMeeting()
    {
        $mettings = ZoomFacade::getAllMeeting();
        return $mettings;
    }

    // create meeting
    public function createMeeting()
    {
        $data = [
            "agenda" => 'oops class part-2',
            "topic" => 'traits',
            "type" => 2,
            "duration" => 60,
            "timezone" => 'Asia/Calcutta',
            "password" => 'password',
            "start_time" => time(),
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

    public function updateMeeting($id)
    {
        $data = [
            "agenda" => 'your agenda',
            "topic" => 'your topic',
            "type" => 2,
            "duration" => 60,
            "timezone" => 'Asia/Calcutta',
            "password" => 'password',
            "start_time" => time(),
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

    public function getUpcomingMeeting()
    {
        $meetings = ZoomFacade::getUpcomingMeeting();
        return $meetings;
    }

    public function getPreviousMeetings()
    {
        $meetings = ZoomFacade::getPreviousMeetings();
        return $meetings;
    }

    public function deleteMeeting(string $id)
    {
        $res = ZoomFacade::deleteMeeting($id);
        return $res;
    }

    public function showMeeting(string $id)
    {
        $meeting = ZoomFacade::showMeeting($id);
        return $meeting;
    }

    public function endMeeting($id)
    {
        $res = ZoomFacade::endMeeting($id);
        return $res;
    }

    public function recoverMeeting($id)
    {
        $res = ZoomFacade::recoverMeeting($id);
        return $res;
    }
}
