<?php

namespace Binomedev\ShowcaseServices\Models;

use Binomedev\ShowcaseServices\Database\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasSlug;
    use HasFactory;

    protected static function newFactory()
    {
        return new ServiceFactory();
    }

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

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
             ->generateSlugsFrom('name')
             ->saveSlugsTo('slug')
         ;
    }
}
