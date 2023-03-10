<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/categories/terrain' => [[['_route' => 'categorie_terrain', '_controller' => 'App\\Controller\\PostController::terrain'], null, null, null, false, false, null]],
        '/categories/prairie' => [[['_route' => 'categorie_prairie', '_controller' => 'App\\Controller\\PostController::prairie'], null, null, null, false, false, null]],
        '/categories/bois' => [[['_route' => 'categorie_bois', '_controller' => 'App\\Controller\\PostController::bois'], null, null, null, false, false, null]],
        '/categories/batiment' => [[['_route' => 'categorie_batiment', '_controller' => 'App\\Controller\\PostController::batiment'], null, null, null, false, false, null]],
        '/categories/exploitation' => [[['_route' => 'categorie_exploitation', '_controller' => 'App\\Controller\\PostController::exploitation'], null, null, null, false, false, null]],
        '/post/new' => [[['_route' => 'post_new', '_controller' => 'App\\Controller\\PostController::create'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/post/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:75)'
                    .'|wdt/([^/]++)(*:94)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:139)'
                            .'|router(*:153)'
                            .'|exception(?'
                                .'|(*:173)'
                                .'|\\.css(*:186)'
                            .')'
                        .')'
                        .'|(*:196)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        36 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], null, null, false, false, null]],
        75 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        94 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        139 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        153 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        173 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        186 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        196 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
