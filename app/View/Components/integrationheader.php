<?php

namespace App\View\Components;

use Illuminate\View\Component;

class integrationheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $heading="";
    public function __construct($headingName)
    {
        $this->heading=$headingName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.integrationheader');
    }
}
