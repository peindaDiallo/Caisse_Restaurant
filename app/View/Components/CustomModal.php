<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class customModal extends Component
{
    public string $name;
    public string $id;
    public ? string $size ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( string $name, string $id, ?string $size="modal-lg")
    {
        $this->name = $name;
        $this->id = $id;
        $this->size = $size;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.custom-modal');
    }
}
