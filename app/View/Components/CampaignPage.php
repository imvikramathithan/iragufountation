<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Camps;

class CampaignPage extends Component
{
    /**
     * Create a new component instance.
     */
 public $imagePaths;

    public function __construct()
    {
       //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $camps = Camps::all();
        return view('components.campaign-page',compact('camps'));
    }
}
