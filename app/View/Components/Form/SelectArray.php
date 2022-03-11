<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SelectArray extends Component
{

    public $name;
    public $label;
    public $mydata;
    public $key;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $mydata, $label, $key = "name")
    {
        $this->name = $name;
        $this->mydata = $mydata;
        $this->key = $key;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-array');
    }
}
