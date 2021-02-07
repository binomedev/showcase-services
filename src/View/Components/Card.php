<?php

namespace Binomedev\ShowcaseServices\View\Components;

use Binomedev\ShowcaseServices\Models\Service;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var Service
     */
    public $service;

    /**
     * Card constructor.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('showcase-services::components.service');
    }
}
