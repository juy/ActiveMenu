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

namespace Juy\ActiveMenu;

/**
 * Class Active
 *
 * @package Juy\ActiveMenu
 */
class Active
{
    /**
     * Current matched route
     *
     * @var Route
     */
    protected $currentRouteName;

    /**
     * Active constructor
     *
     * @param $currentRouteName
     */
    public function __construct($currentRouteName)
    {
        $this->currentRouteName = $currentRouteName;
    }

    /**
     * Active route name
     * If route matches given route (or array of routes) return active class
     *
     * @param $routePattern
     *
     * @return string
     */
    public function route($routePattern = null)
    {
        // Convert to array
        if (!is_array($routePattern) && $routePattern != null)
        {
            $routePattern = explode(' ', $routePattern);
        }

        // Check the current route name
        // https://laravel.com/docs/5.3/helpers#method-str-is
        foreach ((array) $routePattern as $i)
        {
            if (str_is($i, $this->currentRouteName))
            {
                return config('activemenu.class');
            }
        }
    }

}
