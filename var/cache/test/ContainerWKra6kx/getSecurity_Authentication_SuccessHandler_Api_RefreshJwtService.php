<?php

namespace ContainerWKra6kx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_SuccessHandler_Api_RefreshJwtService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.success_handler.api.refresh_jwt' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authentication\AuthenticationSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';

        $a = ($container->privates['lexik_jwt_authentication.handler.authentication_success'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationSuccessService'));

        if (isset($container->privates['security.authentication.success_handler.api.refresh_jwt'])) {
            return $container->privates['security.authentication.success_handler.api.refresh_jwt'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authentication.success_handler.api.refresh_jwt'])) {
            return $container->privates['security.authentication.success_handler.api.refresh_jwt'];
        }

        $container->privates['security.authentication.success_handler.api.refresh_jwt'] = $instance = new \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authentication\AuthenticationSuccessHandler($a, $b);

        $instance->setFirewallName('api');

        return $instance;
    }
}
