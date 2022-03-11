<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputEmail extends Component
{
    public $name;
    public $old;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label,$old = "")
    {
        $this->name = $name;
        $this->old = $old;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-email');
    }
}
