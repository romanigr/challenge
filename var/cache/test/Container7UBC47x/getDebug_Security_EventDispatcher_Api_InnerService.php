<?php

namespace Container7UBC47x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_EventDispatcher_Api_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.event_dispatcher.api.inner' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['debug.security.event_dispatcher.api.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }
}