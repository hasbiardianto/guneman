<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ToastDanger extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct
    (
        public string $message,
    ){ }

    public function shouldRender(): bool
    {
        return Str::length($this->message) > 0;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toast-danger');
    }
}
