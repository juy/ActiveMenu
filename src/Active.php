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
        if (!is_array($route))
        {
            $route = explode(' ', $route);
        }

        $match = false;

        foreach ($route as $value)
        {
            if ($this->compareDotArrays($value, $this->currentRouteName))
            {
                $match = true;
                break;
            }
        }

        return $match ? $class : '';
    }

    /**
     * Compare two dot notation values. Accepts '*' as wildcard
     *
     * @param $dot1
     * @param $dot2
     *
     * @return bool
     */
    protected function compareDotArrays($dot1, $dot2)
    {
        $array1 = explode('.', $dot1);
        $array2 = explode('.', $dot2);

        if (count($array1) > count($array2))
        {
            $count = count($array1);
        }
        else
        {
            $count = count($array2);
        }

        $match = true;

        for ($i = 0; $i < $count; $i++)
        {
            if (!isset($array2[$i]))
            {
                if ($array1[$i] !== '*')
                {
                    $match = false;
                }
                break;
            }

            if (!isset($array1[$i]))
            {
                if ($array1[$i - 1] !== '*')
                {
                    $match = false;
                }
                break;
            }

            if ($array1[$i] !== $array2[$i] && $array1[$i] !== '*')
            {
                $match = false;
            }
        }

        return $match;
    }
}
