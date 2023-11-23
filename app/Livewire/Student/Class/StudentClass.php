<?php

namespace App\Livewire\Student\Class;

use App\Models\ZoomClass;
use Livewire\Component;
use Livewire\WithPagination;

class StudentClass extends Component
{
    public $single_class;
    public $classes;

    public function mount(){
        $this->classes = ZoomClass::with('user')->get();
    }

    public function render()
    {
        return view('livewire.student.class.student-class');
    }

    public function classDetail($id)
    {
        $this->single_class = ZoomClass::find($id);
        $this->dispatch('show-detail-modal');
    }

    public function upcomingClass(){
        $this->classes = ZoomClass::where('start_at', '>=', now())->with('user')->get();
    }

    public function previousClass(){
        $this->classes = ZoomClass::where('start_at', '<', now())->with('user')->get();
    }

    public function AllClass(){
        $this->mount();
    }
}
