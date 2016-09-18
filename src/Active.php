<?php

namespace Juy\ActiveMenu;

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
     * Active class
     * If route matches given route (or array of routes) return active
     *
     * @param        $route
     * @param string $class
     *
     * @return string
     */
    public function route($route, $class = 'active')
    {
        // Convert to array
        if (!is_array($route))
        {
            $route = explode(' ', $route);
        }

        // Check the current route name
        // https://laravel.com/docs/5.3/helpers#method-str-is
        foreach ((array) $route as $i)
        {
            if (str_is($i, $this->currentRouteName))
            {
                //return true;
                return $class;
            }
        }
    }

}
