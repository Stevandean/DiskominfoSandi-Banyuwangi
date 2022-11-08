<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class modalDetail extends Component
{
    public $modelPath;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modelPath)
    {
        $this->modelPath = $modelPath;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.modal-detail');
    }
}
