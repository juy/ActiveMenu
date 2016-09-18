<?php

if (!function_exists('active_route'))
{
    /**
     * Active route
     * If route matches given route (or array of routes) return active
     *
     * @param $routePattern
     * @param string $class
     *
     * @return string
     */
    function active_route($routePattern, $class = 'active')
    {
        return app('active')->route($routePattern, $class);
    }
}
