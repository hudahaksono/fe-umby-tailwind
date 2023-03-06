<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;

    public $class;

    public $button;

    public $style;

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $class = null, $button = null, $style = null, $id=null)
    {
        $this->title = $title;
        $this->class = $class;
        $this->button = $button;
        $this->style = $style;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
