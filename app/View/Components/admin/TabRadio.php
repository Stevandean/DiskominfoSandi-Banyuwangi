<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class TabRadio extends Component
{
    public $active;
    public $isReadOnly;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $active, $isReadOnly = false)
    {
        $this->isReadOnly = $isReadOnly;
        $this->active = $active;
    }

    public function getAllAttribute(){
        $tes =  json_encode([
            'isReadOnly' => $this->isReadOnly,
            'active' => $this->active
        ]);
        return $tes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.tab-radio');
    }
}
