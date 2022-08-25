<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class InputSelect extends Component
{
    public $inputValue;
    public $isError;
    public $errMsg;
    public $inputName;
    public $formName;
    public $isReadOnly;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName , $formName, $isReadOnly = false, $inputValue = '', $isError = false, $errMsg = '',$info ='test')
    {
        $this->formName = $formName;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->isError = $isError;
        $this->errMsg = $errMsg;
        $this->isReadOnly = $isReadOnly;
        $this->info = $info;
    }

    public function getAllAttribute(){
        $tes =  json_encode([
                    'inputName' => $this->inputName, 
                    'formName' => $this->formName, 
                    'isReadOnly' => $this->isReadOnly, 
                    'inputValue' => $this->inputValue, 
                    'isError' => $this->isError, 
                    'errMsg' => $this->errMsg
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
        return view('components.admin.input-select');
    }
}
