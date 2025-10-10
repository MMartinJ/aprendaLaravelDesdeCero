<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    //propiedades
    public $class_a;
    public $class_b;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'primary')
    {
        switch ($type) {
            case 'primary':
                $class_a = "bg-blue-700";
                $class_b = "border-blue-400 bg-blue-100 text-blue-700";
                break;
            case 'warning':
                $class_a = "bg-amber-500";
                $class_b = "border-amber-400 bg-amber-100 text-amber-700";
                break;
            default:
                $class_a = "bg-blue-700";
                $class_b = "border-blue-400 bg-blue-100 text-blue-700";
                break;
        }

        $this->class_a = $class_a;
        $this->class_b = $class_b;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
