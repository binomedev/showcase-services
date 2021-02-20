<?php

namespace Binomedev\ShowcaseServices\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Laravel\Nova\Resource;

class Service extends Resource
{
    public static $group = 'Showcase';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Binomedev\ShowcaseServices\Models\Service::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'content', 'summary'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->required()->help('The name of the service that will be displayed within the UI.'),
            new Panel('SEO', [
                Textarea::make('Summary')->rows(2)
                    ->required()
                    ->rules('max:500')
                    ->help('The summary should have maximum 500 characters. It should summarise what this service is about. This description will be used in meta tags for description.'),
                Textarea::make('Tags')->rows(2)
                    ->nullable()
                    ->rules('string')
                    ->help('Tags must be separated by a comma. Example: tag1, tag2 with space, tag3 '),
            ]),

            new Panel('Graphics', [
                Text::make('Icon')
                    ->nullable()
                    ->help('The class name of the icon to be used. Example: fa fa-user, f-icon f-icon-bedroom'),

                Image::make('Image')
                    ->nullable()
                    ->rules('image')
                    ->help('Depending on the used UI, some services may use an image instead of an icon or both.'),
            ]),

            new Panel('Content', [
                Markdown::make('', 'content') // Left the label blank to avoid repetition of the word 'content'.
                    ->nullable()
                    ->stacked()
                    ->help('For more information about Markdown syntax, check this article at <a href="https://www.markdownguide.org/cheat-sheet" target="_blank">markdownguide.org/cheat-sheet</a>'),
            ]),

            new Panel('Other', [
                KeyValue::make('Meta')
                    ->rules('json')
                    ->stacked()
                    ->nullable()
                    ->help('Used as dynamic options to control how the service is displayed within the UI.'),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
