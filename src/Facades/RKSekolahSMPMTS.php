<?php namespace Bantenprov\RKSJePenDas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RKSJePenDas facade.
 *
 * @package Bantenprov\RKSJePenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJePenDas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rks-jen-pen-das';
    }
}
