<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App_Entity_House' => 0,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Serializer\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\ClassMetadata')),
            clone ($p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata')),
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\House',
                    'id',
                    'name',
                    'adress',
                ],
                'attributesMetadata' => [
                    [
                        'id' => $o[1],
                        'name' => $o[2],
                        'adress' => $o[3],
                    ],
                ],
                'groups' => [
                    1 => [
                        'house',
                    ],
                    [
                        'house',
                    ],
                    [
                        'house',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
