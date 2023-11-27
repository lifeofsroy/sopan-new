<?php

namespace App\Livewire\Admin\Page\Home;

use Livewire\Component;
use App\Models\HomeFeature;
use Illuminate\Support\Str;

class AdminHomeFeature extends Component
{
    public $title, $subtitle, $slug, $description, $feature_id;

    public function render()
    {
        $features = HomeFeature::get();

        return view('livewire.admin.page.home.admin-home-feature', [
            'features'=> $features
        ]);
    }

    public function editFeature($id){
        $feature = HomeFeature::findOrFail($id);
        $this->fill(
            $feature->only(['title', 'subtitle', 'slug', 'description'])
        );
        $this->feature_id = $feature->id;

        $this->dispatch('edited');
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }
}
