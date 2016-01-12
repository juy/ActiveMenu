<?php

if (!function_exists('active_class'))
{
    /**
     * Active class
     * If route matches given route (or array of routes) return active
     *
     * @param $route
     *
     * @return string
     */
    function active_class($route)
    {
        return app('active')->route($route);
    }
}
