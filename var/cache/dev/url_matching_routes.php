<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/api/houses' => [
            [['_route' => 'app_api_house_gethouses', '_controller' => 'App\\Controller\\Api\\HouseController::getHouses'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_house_posthouse', '_controller' => 'App\\Controller\\Api\\HouseController::postHouse'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/houses/([^/]++)(*:62)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [
            [['_route' => 'app_api_house_gethouse', '_controller' => 'App\\Controller\\Api\\HouseController::getHouse'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
