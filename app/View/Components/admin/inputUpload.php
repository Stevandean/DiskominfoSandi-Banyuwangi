<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class InputUpload extends Component
{
    public $inputValue;
    public  $isError;
    public $errMsg;
    public $inputName;
    public $formName;
    public $isFilled;
    public $type;
    public $infoFileReadOnly;
    // public
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName , $formName, $type, $isFilled, $inputValue = '', $isError = false, $errMsg = '', $infoFileReadOnly = '')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->isError = $isError;
        $this->errMsg = $errMsg;
        $this->isFilled = $isFilled;
        $this->type = $type;
        $this->infoFileReadOnly = $infoFileReadOnly;

        // ddd([$inputName , $formName, $type, $isFilled]);
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
