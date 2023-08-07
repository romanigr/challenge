<?php

namespace ContainerWKra6kx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_ApiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.json_login.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';

        $a = ($container->privates['security.authentication.success_handler.api.json_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Api_JsonLoginService'));

        if (isset($container->privates['security.authenticator.json_login.api'])) {
            return $container->privates['security.authenticator.json_login.api'];
        }
        $b = ($container->privates['security.authentication.failure_handler.api.json_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_Api_JsonLoginService'));

        if (isset($container->privates['security.authenticator.json_login.api'])) {
            return $container->privates['security.authenticator.json_login.api'];
        }

        $container->privates['security.authenticator.json_login.api'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.users_in_memory'] ?? $container->load('getSecurity_User_Provider_Concrete_UsersInMemoryService')), $a, $b, ['check_path' => '/api/login_check', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'username_path' => 'username', 'password_path' => 'password'], ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));

        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        }

        return $instance;
    }
}
