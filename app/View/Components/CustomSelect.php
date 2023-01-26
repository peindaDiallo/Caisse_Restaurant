<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class customSelect extends Component
{

    public string $label;
    public string $name;
    public string $route;
    public string $method;
    public array $options;

    /**
     * @param string $label
     * @param string $name
     * @param string $route
     * @param string $method
     * @param array $options
     */
    public function __construct(string $label, string $name, string $route, string $method, array $options =[] )
    {
        $this->label = $label;
        $this->name = $name;
        $this->route = $route;
        $this->method = $method;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.custom-select');
    }
}
