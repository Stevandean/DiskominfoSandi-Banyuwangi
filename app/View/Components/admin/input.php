<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Input extends Component
{
    public $inputValue;
    public  $isError;
    public $errMsg;
    public $inputName;
    public $formName;
    public $isRequired;
    public $isReadOnly;
    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct($inputName , $formName, $isRequired = false ,$isReadOnly = false, $inputValue = '', $isError = false, $errMsg = '')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->isError = $isError;
        $this->errMsg = $errMsg;
        $this->isRequired = $isRequired;
        $this->isReadOnly = $isReadOnly;
    }

    public function getAllAttribute(){
        $tes =  json_encode([
                    'inputName' => $this->inputName, 
                    'formName' => $this->formName, 
                    'isRequired' => $this->isRequired,
                    'isReadOnly' => $this->isReadOnly, 
                    'inputValue' => $this->inputValue, 
                    'isError' => $this->isError, 
                    'errMsg' => $this->errMsg,
                ]);
        // dd($tes);
        return $tes;
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
