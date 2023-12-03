<?php

namespace App\View\Components\Main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventRegisterForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $upcoming;
    public function __construct($model) {
        $this->upcoming = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.event-register-form');
    }
}
