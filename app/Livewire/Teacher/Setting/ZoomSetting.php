<?php

namespace App\Livewire\Teacher\Setting;

use App\Models\ZoomSetting as ModelsZoomSetting;
use Livewire\Component;

class ZoomSetting extends Component
{
    public $client_key = null, $client_secret = null, $account_id = null;

    public function mount()
    {
        $setting = request()->user()->zoomSetting;
        if ($setting) {
            $this->client_key = $setting->client_key;
            $this->client_secret = $setting->client_secret;
            $this->account_id = $setting->account_id;
        }
    }

    public function updateSetting()
    {
        $this->validate([
            'account_id' => ['required'],
            'client_key' => ['required'],
            'client_secret' => ['required'],
        ]);

        $setting = request()->user()->zoomSetting;

        ModelsZoomSetting::updateOrCreate([
            'user_id' => request()->user()->id,
        ], [
            'account_id' => $this->account_id,
            'client_key' => $this->client_key,
            'client_secret' => $this->client_secret,
        ]);

        if (!$setting) {
            return redirect()->route('teacher.class.create.page');
        } else {
            $this->dispatch('session-message');
            return back()->with('success', 'Setting Updated');
        }
    }

    public function render()
    {
        return view('livewire.teacher.setting.zoom-setting');
    }
}
