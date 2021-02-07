<?php

namespace Binomedev\ShowcaseServices;

use Binomedev\ShowcaseServices\Models\Service;
use Illuminate\Support\Traits\Macroable;

class ShowcaseServices
{
    use Macroable;

    /**
     * @var array
     */
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function services()
    {
        // FIXME: This should use Repository pattern
        if ($this->usesArrayProvider()) {
            return $this->getArrayServices();
        }

        return $this->getDatabaseServices();
    }

    public function findServiceBySlug($slug)
    {
        // FIXME: This should use Repository pattern
        if ($this->usesArrayProvider()) {
            return $this->getArrayServices()->first(function ($service) use ($slug) {
                return $service->slug === $slug;
            });
        }

        return Service::where('slug', $slug)->first();
    }

    public function usesArrayProvider(): bool
    {
        return $this->config['provider'] === 'array';
    }

    private function getArrayServices()
    {
        return collect($this->config['services']);
    }

    private function getDatabaseServices()
    {
        return Service::query()->get();
    }
}
