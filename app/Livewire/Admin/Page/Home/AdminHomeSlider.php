<?php

namespace App\Livewire\Admin\Page\Home;

use Livewire\Component;
use App\Models\HomeSlider;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class AdminHomeSlider extends Component
{
    use WithPagination, WithFileUploads;

    public $title, $slug, $subtitle, $description, $is_active;
    public $image = null, $addImage = null, $editImage = null;
    public $slider_id;

    public function render()
    {
        $sliders = HomeSlider::paginate(3);

        return view('livewire.admin.page.home.admin-home-slider', [
            'sliders' => $sliders
        ]);
    }

    public function resetInput()
    {
        $this->title = '';
        $this->slug = '';
        $this->subtitle = '';
        $this->description = '';
        $this->is_active = false;
        $this->image = null;
        $this->addImage = null;
        $this->editImage = null;
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function changeActive($id)
    {
        $slider = HomeSlider::findOrFail($id);
        if ($slider->is_active == 1) {
            $slider->update(['is_active' => 0]);
        } else {
            $slider->update(['is_active' => 1]);
        }

        $this->dispatch('session-message', [
            'message' => 'Status Updated Successfully',
            'type' => 'success',
            'duration' => 2500,
            'positionX' => 'right',
            'positionY' => 'top',
            'ripple' => 'yes',
            'dismissible' => 'yes',
        ]);
    }

    public function createSlider()
    {
        $this->validate([
            'title' => ['required'],
            'slug' => ['required', 'unique:home_sliders,slug'],
            'subtitle' => ['required'],
            'description' => ['required'],
            'addImage' => ['required', 'image', 'max:200'],
            'is_active' => ['nullable'],
        ]);

        $path = $this->addImage->store('home/slider', 'public');

        HomeSlider::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'image' => $path,
            'is_active' => $this->is_active
        ]);

        $this->reset();

        $this->dispatch('created');
        $this->dispatch('session-message', [
            'message' => 'Slider Created Successfully',
            'type' => 'success',
            'duration' => 2500,
            'positionX' => 'right',
            'positionY' => 'top',
            'ripple' => 'yes',
            'dismissible' => 'yes',
        ]);
    }

    public function editSlider($id)
    {
        $slider = HomeSlider::findOrFail($id);
        $this->fill(
            $slider->only(['title', 'subtitle', 'slug', 'description', 'is_active', 'image'])
        );
        $this->slider_id = $slider->id;

        $this->dispatch('edited');
    }

    public function updateSlider()
    {
        $this->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'subtitle' => ['required'],
            'description' => ['required'],
            'editImage' => ['nullable', 'image', 'max:200'],
        ]);

        $slider = HomeSlider::findOrFail($this->slider_id);

        $slider->update(
            $this->only(['title', 'subtitle', 'slug', 'description'])
        );

        if (!is_null($this->editImage)) {
            if (!is_null($this->image)) {
                unlink(storage_path('app/public/' . $this->image));
            }

            $path = $this->editImage->store('home/slider', 'public');

            $slider->update([
                'image' => $path
            ]);
        }

        $this->reset();

        $this->dispatch('updated');
        $this->dispatch('session-message', [
            'message' => 'Slider Updated Successfully',
            'type' => 'success',
            'duration' => 2500,
            'positionX' => 'right',
            'positionY' => 'top',
            'ripple' => 'yes',
            'dismissible'=> 'yes',
        ]);
    }

    public function deleteSlider($id)
    {
        $slider = HomeSlider::findOrFail($id);
        $slider->delete();

        $this->dispatch('session-message', [
            'message' => 'Slider Created Successfully',
            'type' => 'success',
            'duration' => 2500,
            'positionX' => 'right',
            'positionY' => 'top',
            'ripple' => 'yes',
            'dismissible'=> 'yes',
        ]);
    }
}
