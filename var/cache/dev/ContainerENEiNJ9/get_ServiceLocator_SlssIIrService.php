<?php

namespace ContainerENEiNJ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SlssIIrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.slssIIr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.slssIIr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'houseRepository' => ['privates', 'App\\Repository\\HouseRepository', 'getHouseRepositoryService', true],
        ], [
            'houseRepository' => 'App\\Repository\\HouseRepository',
        ]);
    }
}
