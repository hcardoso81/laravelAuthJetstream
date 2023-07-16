<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{

    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'bg-blue-100 border-blue-500 text-blue-700';
                break;
            case 'danger':
                $class = 'bg-red-100 border-red-500 text-red-700';
                break;

            default:
                $class = 'bg-blue-100 border-blue-500 text-blue-700';
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
