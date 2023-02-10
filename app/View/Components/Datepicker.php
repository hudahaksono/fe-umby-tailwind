<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datepicker extends Component
{
    public $class;
    public $range;
    public $name;
    public $format;
    public $val;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = null, $range = null, $name = null, $format = 'mm/dd/yyyy', $val = null)
    {
        $this->class = $class;
        $this->range = $range;
        $this->name = $name;
        $this->format = $format;
        $this->val = $val;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datepicker');
    }
}
