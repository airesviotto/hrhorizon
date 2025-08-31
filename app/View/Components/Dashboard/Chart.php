<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Chart extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $type;
    public $labels;
    public $chartValues;
    public function __construct($id, $type = 'bar', $labels = [], $chartValues = [])
    {
        $this->id = $id;
        $this->type = $type;
        $this->labels = $labels;
        $this->chartValues = $chartValues;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.chart');
    }
}
