<?php

namespace ContainerB0x35VT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogoutEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Gesdinet\JWTRefreshTokenBundle\EventListener\LogoutEventListener' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\EventListener\LogoutEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/EventListener/LogoutEventListener.php';

        $a = ($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService'));

        if (isset($container->privates['Gesdinet\\JWTRefreshTokenBundle\\EventListener\\LogoutEventListener'])) {
            return $container->privates['Gesdinet\\JWTRefreshTokenBundle\\EventListener\\LogoutEventListener'];
        }

        return $container->privates['Gesdinet\\JWTRefreshTokenBundle\\EventListener\\LogoutEventListener'] = new \Gesdinet\JWTRefreshTokenBundle\EventListener\LogoutEventListener($a, ($container->services['gesdinet.jwtrefreshtoken.request.extractor.chain'] ?? $container->load('getGesdinet_Jwtrefreshtoken_Request_Extractor_ChainService')), 'refresh_token', $container->parameters['gesdinet_jwt_refresh_token.cookie'], 'security.firewall.map.context.api');
    }
}
