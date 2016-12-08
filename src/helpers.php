<?php
/**
 * This file is part of the <Active Menu> laravel package.
 *
 * @author Juy Software <package@juysoft.com>
 * @copyright (c) 2016 Juy Software <package@juysoft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('active_route'))
{
    /**
     * Active route
     * If route matches given route (or array of routes) return active class
     *
     * @param $routePattern
     *
     * @return string
     */
    function active_route($routePattern)
    {
        return app('active')->route($routePattern);
    }
}
