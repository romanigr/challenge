<?php

namespace ContainerN1hf27T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_UsersInMemoryService extends App_KernelDevDebugContainer
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

        return $container->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(['roman' => ['password' => '$2y$13$m2CimOeqvVcMi8ux7.u12.2CWyWsT3Z468pTlVYKQN0.0/83p413y', 'roles' => ['ROLE_ADMIN']]]);
    }
}
