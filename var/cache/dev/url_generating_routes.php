<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'gesdinet_jwt_refresh_token' => [[], [], [], [['text', '/api/token/refresh']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_catedra_index' => [[], ['_controller' => 'App\\Controller\\CatedraController::index'], [], [['text', '/catedra/index']], [], [], []],
    'streamming_app_streamming' => [[], ['_controller' => 'App\\Controller\\StreammingController::index'], [], [['text', '/api/streamming']], [], [], []],
    'streamming_add_movie' => [[], ['_controller' => 'App\\Controller\\StreammingController::create'], [], [['text', '/api/movie']], [], [], []],
    'streamming_delete_movie' => [['id'], ['_controller' => 'App\\Controller\\StreammingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/movie']], [], [], []],
    'streamming_search_movie' => [['search'], ['_controller' => 'App\\Controller\\StreammingController::searchMovie'], [], [['variable', '/', '[^/]++', 'search', true], ['text', '/api/movie']], [], [], []],
    'streamming_new_director' => [[], ['_controller' => 'App\\Controller\\StreammingController::newDirector'], [], [['text', '/api/streamming/director']], [], [], []],
    'streamming_add_moviedirector' => [['idmovie', 'iddirector'], ['_controller' => 'App\\Controller\\StreammingController::addDirector'], [], [['variable', '/', '[^/]++', 'iddirector', true], ['text', '/director'], ['variable', '/', '[^/]++', 'idmovie', true], ['text', '/api/movie']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
    'api_refresh_token' => [[], [], [], [['text', '/api/token/refresh']], [], [], []],
];
