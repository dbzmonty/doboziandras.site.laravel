<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $value;
    public $label;

    public function __construct($name, $type = 'text', $label = null, $value = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.forms.input');
    }
}
