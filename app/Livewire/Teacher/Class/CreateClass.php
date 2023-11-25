<?php

namespace App\Livewire\Teacher\Class;

use Livewire\Component;
use App\Models\ZoomClass;
use App\Support\ZoomFacade;

class CreateClass extends Component
{
    public $meet_topic, $meet_agenda, $meet_type, $meet_duration, $meet_password, $meet_start, $meet_approval;

    public function render()
    {
        return view('livewire.teacher.class.create-class');
    }

    public function addClass()
    {
        $this->validate([
            'meet_topic' => ['required'],
            'meet_agenda' => ['required'],
            'meet_type' => ['required'],
            'meet_duration' => ['required'],
            'meet_password' => ['required'],
            'meet_start' => ['required', 'after_or_equal:today'],
            'meet_approval' => ['required'],
        ]);

        $data = [
            "agenda" => $this->meet_agenda,
            "topic" => $this->meet_topic,
            "type" => $this->meet_type,
            "duration" => $this->meet_duration,
            "timezone" => 'Asia/Kolkata',
            "password" => $this->meet_password,
            "start_time" => date('Y-m-d\TH:i:s\Z', strtotime($this->meet_start)),
            "pre_schedule" => false,
            "settings" => [
                'join_before_host' => false,
                'host_video' => false,
                'participant_video' => false,
                'mute_upon_entry' => false,
                'waiting_room' => false,
                'audio' => 'both',
                'auto_recording' => 'none',
                'approval_type' => (int)$this->meet_approval,
            ]
        ];

        $meeting = ZoomFacade::createMeeting($data);
        $newclass = [];

        if ($meeting['status']) {
            $newclass = ZoomClass::create([
                'meeting_id' => $data['id'],
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

        if ($newclass) {
            return redirect()->route('teacher.class.index');
        }
    }
}
