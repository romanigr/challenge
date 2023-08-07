<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/token/refresh' => [
            [['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null],
            [['_route' => 'api_refresh_token'], null, null, null, false, false, null],
        ],
        '/api/streamming' => [[['_route' => 'streamming_app_streamming', '_controller' => 'App\\Controller\\StreammingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/movie' => [[['_route' => 'streamming_add_movie', '_controller' => 'App\\Controller\\StreammingController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/streamming/director' => [[['_route' => 'streamming_new_director', '_controller' => 'App\\Controller\\StreammingController::newDirector'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/movie/([^/]++)(?'
                    .'|(*:29)'
                    .'|(*:36)'
                    .'|/director/([^/]++)(*:61)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'streamming_delete_movie', '_controller' => 'App\\Controller\\StreammingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        36 => [[['_route' => 'streamming_search_movie', '_controller' => 'App\\Controller\\StreammingController::searchMovie'], ['search'], ['GET' => 0], null, false, true, null]],
        61 => [
            [['_route' => 'streamming_add_moviedirector', '_controller' => 'App\\Controller\\StreammingController::addDirector'], ['idmovie', 'iddirector'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
