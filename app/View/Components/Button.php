<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $asLink;

    public $color;

    public $size;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($asLink = false, $color = "blue", $size = "md")
    {
        $this->asLink = $asLink;
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
