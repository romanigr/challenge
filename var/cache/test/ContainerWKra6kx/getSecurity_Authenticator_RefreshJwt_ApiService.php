<?php

namespace ContainerWKra6kx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RefreshJwt_ApiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.refresh_jwt.api' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authenticator\RefreshTokenAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Security/Http/Authenticator/RefreshTokenAuthenticator.php';

        $a = ($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService'));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $c = ($container->privates['security.authentication.success_handler.api.refresh_jwt'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Api_RefreshJwtService'));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $d = ($container->privates['security.authentication.failure_handler.api.refresh_jwt'] ?? $container->load('getSecurity_Authentication_FailureHandler_Api_RefreshJwtService'));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }

        return $container->privates['security.authenticator.refresh_jwt.api'] = new \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authenticator\RefreshTokenAuthenticator($a, $b, ($container->services['gesdinet.jwtrefreshtoken.request.extractor.chain'] ?? $container->load('getGesdinet_Jwtrefreshtoken_Request_Extractor_ChainService')), ($container->privates['security.user.provider.concrete.users_in_memory'] ?? $container->load('getSecurity_User_Provider_Concrete_UsersInMemoryService')), $c, $d, ['check_path' => '/api/token/refresh', 'ttl' => 2592000, 'ttl_update' => false, 'token_parameter_name' => 'refresh_token'], ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')));
    }
}
