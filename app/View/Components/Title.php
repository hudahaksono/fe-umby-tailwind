<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    public $class;

    public $level;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = null, $level = null)
    {
        $this->class = $class;
        $this->level = $level;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
