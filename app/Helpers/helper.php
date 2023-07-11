<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

function getcong($key, $default = null)
{
    // Define your configuration values
    $configurations = [
        'site_name' => 'My Site',
        'site_email' => 'info@example.com',
        // Add more configuration values
    ];

    // Check if the key exists in the configurations array
    if (isset($configurations[$key])) {
        return $configurations[$key];
    }

    // Return the default value or handle the case when the key doesn't exist
    return $default;
}

function getcong_widgets($key, $default = null)
{
    // Define your widget values
    $widgets = [
        'social_facebook' => 'https://www.facebook.com/example',
        'social_twitter' => 'https://twitter.com/example',
        // Add more widget values
    ];

    // Check if the key exists in the widgets array
    if (isset($widgets[$key])) {
        return $widgets[$key];
    }

    // Return the default value or handle the case when the key doesn't exist
    return $default;
}

$facebookUrl = getcong_widgets('social_facebook');
$twitterUrl = getcong_widgets('social_twitter', 'https://twitter.com/default');


function classActivePath($path)
{
    return Request::is($path) ? 'active' : '';
}

