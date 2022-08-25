<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class BodyEditor extends Component
{
    public $formName;
    public $inputValue;
    public $inputName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($formName, $inputName, $inputValue = '')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
    }

    public function getAllAttribute(){
        return json_encode([
            'formName' => $this->formName,
            'inputName' => $this->inputName,
            'inputValue' => $this->inputValue
        ]);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.body-editor');
    }
}
