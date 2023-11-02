<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Topbar extends Component
{
    public $title;
    public $subTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($title=null, $subTitle=null)
    {
        $this->title=$title;
        $this->subTitle=$subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.topbar');
    }
}