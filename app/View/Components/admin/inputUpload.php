<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class InputUpload extends Component
{
    public $inputValue;
    public  $isError;
    public $errMsg;
    public $inputName;
    public $formName;
    public $isRequired;
    public $type;
    // public
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName , $formName, $type, $isRequired = false, $inputValue = '', $isError = false, $errMsg = '')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->isError = $isError;
        $this->errMsg = $errMsg;
        $this->isRequired = $isRequired;
        $this->type = $type;

        
    }

    public function typeExtention($type){
        $ext = [
            'pdf' => ['.pdf'],
            'image' => ['.jpg', '.jpeg', '.jpe', '.jif', '.jfif', '.png']
        ];

        return(json_encode($ext[$type]));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.input-upload');
    }
}
