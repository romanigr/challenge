<?php

namespace Container7UBC47x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_UsersInMemoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.user.provider.concrete.users_in_memory' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserProvider.php';

        return $container->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(['admin' => ['password' => '$2y$13$S/.YuUT42leWBmMBO3PaKOlGScSeetl2s0aDbpWROMhOH32wAVq4W', 'roles' => ['ROLE_ADMIN']]]);
    }
}
