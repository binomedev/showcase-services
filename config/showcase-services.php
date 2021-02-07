<?php

return [
    // How services will be stored and retrieved
    'provider' => 'database', // database, array

    /**
     * This is used only if the provider is set to array.
     */
    'services' => [
        [
            'name' => '', // string
            'slug' => '', // string, unique
            'icon' => '', // string, nullable
            'summary' => '', // string
            'content' => '', // string
            'tags' => '', // Nullable, string
            'meta' => [], // array, nullable
        ]
    ],
];
