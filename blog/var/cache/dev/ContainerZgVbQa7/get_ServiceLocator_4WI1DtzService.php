<?php

namespace ContainerZgVbQa7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4WI1DtzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4WI1Dtz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4WI1Dtz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.4WI1Dtz.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.4WI1Dtz": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
