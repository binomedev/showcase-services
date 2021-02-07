<?php

namespace Binomedev\ShowcaseServices\Database\Factories;

use Binomedev\ShowcaseServices\Service;
use Illuminate\Database\Eloquent\Factories\Factory;


class ModelFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'icon' => null,
            'summary' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(3, true),
            'tags' => $this->makeTags(),
            'meta' => [],
        ];
    }

    private function makeTags()
    {
        return implode(', ', $this->faker->words(random_int(2, 5)));
    }
}

