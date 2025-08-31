<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoBox extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $value;
    public $date;
    public $icon;
    public $background;

    public function __construct($title, $value, $date, $icon = null, $background = 'bg-gradient-to-r from-pink-500 to-purple-500')
    {
        $this->title = $title;
        $this->value = $value;
        $this->date = $date;
        $this->icon = $icon;
        $this->background = $background;

        // Detecta se o valor é numérico e aplica cor automática
        $numericValue = floatval(preg_replace('/[^0-9.-]/', '', $value));

        if ($numericValue > 0) {
            $this->background = 'bg-gradient-to-r from-green-400 to-green-600';
        } elseif ($numericValue < 0) {
            $this->background = 'bg-gradient-to-r from-red-400 to-red-600';
        } 
        else {
            $this->background = 'bg-gradient-to-r from-blue-400 to-blue-600';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.info-box');
    }
}
