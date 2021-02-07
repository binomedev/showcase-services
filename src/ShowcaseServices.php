<?php

namespace Binomedev\ShowcaseServices;

class ShowcaseServices
{
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }
}
