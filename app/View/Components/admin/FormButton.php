<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class FormButton extends Component
{
    public $isAjax;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isAjax = false)
    {
        $this->isAjax = $isAjax;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form-button');
    }
}
