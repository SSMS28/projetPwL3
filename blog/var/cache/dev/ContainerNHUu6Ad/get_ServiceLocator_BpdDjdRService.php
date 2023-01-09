<?php

namespace ContainerNHUu6Ad;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BpdDjdRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BpdDjdR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BpdDjdR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'paginator' => '?',
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
