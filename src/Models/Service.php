<?php

namespace Binomedev\ShowcaseServices\Models;

use Binomedev\ShowcaseServices\Database\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Service
 * @package Binomedev\ShowcaseServices\Models
 * @property string $name
 * @property string $icon
 * @property string $summary
 * @property string $content
 * @property array $meta
 * @property string $tags
 * @property array $tagList
 */
class Service extends Model
{
    use HasSlug;
    use HasFactory;


    protected $fillable = [
        'name',
        'icon',
        'summary',
        'content',
        'meta',
        'tags',
    ];
    protected $casts = [
        'meta' => 'json',
    ];

    protected static function newFactory()
    {
        return new ServiceFactory();
    }

    public function getTagsListAttribute()
    {
        return collect(
            explode(',', $this->tags)
        )->map(function ($tag) {
            return trim($tag);
        });
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
