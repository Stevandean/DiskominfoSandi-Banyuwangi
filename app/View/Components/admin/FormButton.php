<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class FormButton extends Component
{
    public $isAjax;
    public $btnName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnName, $isAjax = false)
    {
        $this->isAjax = $isAjax;
        $this->btnName = $btnName;
    }

    public function getAllAttribute(){
        return json_encode([
            'isAjax' => $this->isAjax,
            'btnName' => $this->btnName
        ]);
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
