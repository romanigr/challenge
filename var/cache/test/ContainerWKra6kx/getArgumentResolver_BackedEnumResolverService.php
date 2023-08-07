<?php

namespace ContainerWKra6kx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_BackedEnumResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'argument_resolver.backed_enum_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/BackedEnumValueResolver.php';

        return $container->privates['argument_resolver.backed_enum_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver();
    }
}
