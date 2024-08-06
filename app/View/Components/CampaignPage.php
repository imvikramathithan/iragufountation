<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CampaignPage extends Component
{
    /**
     * Create a new component instance.
     */
 public $imagePaths;

    public function __construct()
    {
        $this->imagePaths = [];
        for ($i = 1; $i <= 13; $i++) {
            $this->imagePaths[] = asset("assets/img/CSR/{$i}.webp");
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaign-page');
    }
}
