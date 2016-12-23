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

namespace Juy\ActiveMenu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Active facade class
 *
 * @package Juy\ActiveMenu
 */
class Active extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'active';
    }
}
