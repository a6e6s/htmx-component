<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Login extends Component
{
    public $name;
    public $password;
    /**
     * Create a new component instance.
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->password = $request->password;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login');
    }
}
