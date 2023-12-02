<?php

namespace App\Livewire\Admin\Page\Home;

use App\Models\HomeWelcome;
use Livewire\Component;

class AdminHomeWelcome extends Component
{
    public $title, $subtitle, $brand, $description, $context;
    public $image, $editImage = null;
    public $logo, $editLogo = null;

    public function mount()
    {
        $welcome = HomeWelcome::first();
        $this->fill(
            $welcome->only(['title', 'subtitle', 'brand', 'description', 'context', 'image', 'logo'])
        );
    }

    public function updateWelcome()
    {
        $this->validate([
            'title' => ['required'],
            'description' => ['required'],
            'subtitle' => ['required'],
            'brand' => ['required'],
            'context' => ['required'],
            'editImage' => ['nullable', 'image', 'max:200'],
            'editLogo' => ['nullable', 'image', 'max:200'],
        ]);

        $welcome = HomeWelcome::first();
        $welcome->update(
            $this->only(['title', 'subtitle', 'brand', 'description', 'context'])
        );

        if (!is_null($this->editImage)) {
            if (!is_null($this->image)) {
                unlink(storage_path('app/public/' . $this->image));
            }

            $imagePath = $this->editImage->store('home/welcome', 'public');

            $welcome->update([
                'image' => $imagePath
            ]);
        }

        if (!is_null($this->editLogo)) {
            if (!is_null($this->logo)) {
                unlink(storage_path('app/public/' . $this->logo));
            }

            $logoPath = $this->editLogo->store('home/welcome', 'public');

            $welcome->update([
                'logo' => $logoPath
            ]);
        }

        $this->dispatch('session-message', [
            'message' => 'Welcome Updated Successfully',
            'type' => 'success',
            'duration' => 2500,
            'positionX' => 'right',
            'positionY' => 'top',
            'ripple' => 'yes',
            'dismissible'=> 'yes',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.page.home.admin-home-welcome');
    }
}
