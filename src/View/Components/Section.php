<?php

namespace Binomedev\ShowcaseServices\View\Components;

use Binomedev\ShowcaseServices\Models\Service;
use Illuminate\View\Component;

class Section extends Component
{
    public $title;

    /**
     * ServiceList constructor.
     * @param $title
     */
    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        $services = Service::query()->get();

        return view('showcase-services::components.section', compact('services'));
    }
}
