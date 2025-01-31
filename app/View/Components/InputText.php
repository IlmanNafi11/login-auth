<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public string $type;
    public string $name;
    public string $autocomplete;
    public string $label;
    public string $id;
    public string $className;

    public function __construct(
        string $type = 'text',
        string $name = 'input',
        string $autocomplete = 'off',
        string $label = 'Masukan Input',
        string $id = 'input',
        ?string $className = ''
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->autocomplete = $autocomplete;
        $this->label = $label;
        $this->id = $id;
        $this->className = $className;
    }
    public function render(): View|Closure|string
    {
        return view('components.input-text');
    }
}
