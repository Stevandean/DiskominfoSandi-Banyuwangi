<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class SearchInputDropdown extends Component
{
    public $inputValue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputValue = '')
    {
        $this->inputValue = $inputValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.search-input-dropdown');
    }
}
