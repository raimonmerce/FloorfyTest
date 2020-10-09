<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'houses_get' => [[], ['_controller' => 'App\\Controller\\MainController::list'], [], [['text', '/houses']], [], []],
    'create_house' => [[], ['_controller' => 'App\\Controller\\MainController::createHouse'], [], [['text', '/houses/create']], [], []],
    'get_house' => [['id'], ['_controller' => 'App\\Controller\\MainController::getHouse'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/house']], [], []],
    'app_api_house_get' => [[], ['_controller' => 'App\\Controller\\Api\\HouseController::getAction'], [], [['text', '/api/houses']], [], []],
    'app_api_house_post' => [[], ['_controller' => 'App\\Controller\\Api\\HouseController::postAction'], [], [['text', '/api/houses']], [], []],
];