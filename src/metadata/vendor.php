<?php

return array (
    'package' => 'Clkim',
    'tagline' => 'Create shortened URLs customized by domain.',
    'description' => 'Connect to the Clkim Link Shortening API to create shortened URLs customized by domain. Test a Clkim API call and export the code snippet into your app.',
    'image' => 'https://logo.clearbit.com/clkim.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Clkim-Package',
    'keywords' => array (
            'API', 'Short link', 'Clkim',
        ),
    'accounts' => array (
            'domain' => 'coinbase.com',
            'credentials' => array (
                    'apiKey',
                ),
        ),
    'blocks' => array (
        array (
            'name' => 'getShortUrl',
            'description' => 'Create shortened URL.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'API key.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'URL for shortening.',
                    'required' => true,
                ),
                array (
                    'name' => 'brandedDomain',
                    'type' => 'String',
                    'info' => 'Branded domain.',
                    'required' => false,
                ),
            ),
        ),
    ),
    'custom' => array (
        'getShortUrl' => array (
            'dictionary' => array (
                'apiKey' => 'key',
                'url' => 'url',
                'brandedDomain' => 'domain',
            ),
            'vendorUrl' => 'https://api.clkim.com/',
            'method' => 'GET',
        ),
    ),
);