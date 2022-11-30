<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'default', $msg = 'alert muncul')
    {
        $this->type = $type;
        $this->msg = $msg;
    }

    public function colorMode(){
        $color = ['error' => 'red', 'success' => 'green', 'default' => 'neutral'];
        return $color[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.alert');
    }
}
