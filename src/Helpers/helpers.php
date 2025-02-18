<?php
if (!function_exists('themes_path')) {

    function themes_path($filename = null)
    {
        return app()->make('igaster.themes')->themes_path($filename);
    }
}

if (!function_exists('assets_path')) {

    function assets_path($filename = null)
    {
        return app()->make('igaster.themes')->assets_path($filename);
    }
}

if (!function_exists('theme_url')) {

    function theme_url($url)
    {
        return app()->make('igaster.themes')->url($url);
    }

}