<?php

if (!function_exists('active_route'))
{
    /**
     * Active route
     * If route matches given route (or array of routes) return active
     *
     * @param $route
     *
     * @return string
     */
    function active_route($route)
    {
        return app('active')->route($route);
    }
}
