<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class input extends Component
{
    public $inputValue;
    public  $isError;
    public $errMsg;
    public $inputName;
    public $formName;
    public $isRequired;
    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct($inputName , $formName, $isRequired = false ,$inputValue = '', $isError = false, $errMsg = '')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->isError = $isError;
        $this->errMsg = $errMsg;
        $this->isRequired = $isRequired;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.input');
    }
}
