<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/articles' => [[['_route' => 'admin_articles_list', '_controller' => 'App\\Controller\\Admin\\ArticleAdminController::list'], null, null, null, true, false, null]],
        '/admin/articles/new' => [[['_route' => 'admin_articles_new', '_controller' => 'App\\Controller\\Admin\\ArticleAdminController::create'], null, null, null, false, false, null]],
        '/admin/comments' => [[['_route' => 'admin_comments_list', '_controller' => 'App\\Controller\\Admin\\CommentAdminController::list'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, true, false, null]],
        '/articles' => [[['_route' => 'article_list', '_controller' => 'App\\Controller\\ArticleController::list'], null, ['GET' => 0], null, false, false, null]],
        '/articles_view' => [[['_route' => 'articles_view', '_controller' => 'App\\Controller\\ArticlesViewController::index'], null, ['GET' => 0], null, false, false, null]],
        '/favoris' => [[['_route' => 'user_favorites', '_controller' => 'App\\Controller\\FavoriteController::favorites'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|articles/(?'
                            .'|edit/([^/]++)(*:45)'
                            .'|delete/([^/]++)(*:67)'
                        .')'
                        .'|comments/delete/([^/]++)(*:99)'
                    .')'
                    .'|rticles/(?'
                        .'|(\\d+)(*:123)'
                        .'|(\\d+)/rate/(\\d+)(*:147)'
                        .'|(\\d+)/favorite(*:169)'
                    .')'
                .')'
                .'|/comment/([^/]++)/(?'
                    .'|like(*:204)'
                    .'|reply(*:217)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:257)'
                    .'|wdt/([^/]++)(*:277)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:319)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:356)'
                                .'|router(*:370)'
                                .'|exception(?'
                                    .'|(*:390)'
                                    .'|\\.css(*:403)'
                                .')'
                            .')'
                            .'|(*:413)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'admin_articles_edit', '_controller' => 'App\\Controller\\Admin\\ArticleAdminController::edit'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'admin_articles_delete', '_controller' => 'App\\Controller\\Admin\\ArticleAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        99 => [[['_route' => 'admin_comments_delete', '_controller' => 'App\\Controller\\Admin\\CommentAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        123 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        147 => [[['_route' => 'article_rate', '_controller' => 'App\\Controller\\ArticleController::rate'], ['id', 'value'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'article_favorite', '_controller' => 'App\\Controller\\ArticleController::favorite'], ['id'], ['GET' => 0], null, false, false, null]],
        204 => [[['_route' => 'comment_like', '_controller' => 'App\\Controller\\CommentController::like'], ['id'], null, null, false, false, null]],
        217 => [[['_route' => 'comment_reply', '_controller' => 'App\\Controller\\CommentController::reply'], ['id'], null, null, false, false, null]],
        257 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        277 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        319 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        356 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        370 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        390 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        403 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        413 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
