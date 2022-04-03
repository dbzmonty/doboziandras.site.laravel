<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class InputTextArea extends Component
{
    public $name;
    public $value;
    public $label;

    public function __construct($name, $label = null, $value = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.forms.input-text-area');
    }
}