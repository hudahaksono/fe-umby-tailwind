<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $idModel;
    public $title;
    public $body;
    public $size;
    public $save;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idModel = 'default-modal', $title = null, $body = null, $size = "md", $save = true)
    {
        $this->idModel = $idModel;
        $this->title = $title;
        $this->body = $body;
        $this->size = $size;
        $this->save = $save;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
