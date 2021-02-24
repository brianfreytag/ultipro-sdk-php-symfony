<?php
/**
 * This file is part of the Ultipro SDK for PHP (Unofficial) Package
 *
 * (c) Brian Freytag
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code
 */

namespace Ultipro\UltiproBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * @author Brian Freytag <me@brianfreytag.com>
 */
class UltiproExtension extends Extension
{
    /**
     * Loads the configuration
     * @param array $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $loader->load('services.yaml');

        $configuration = new Configuration();
        $processor     = new Processor();

        $config = $processor->processConfiguration($configuration, $configs);

        $container->setParameter('ultipro_sdk.username', $config['username']);
        $container->setParameter('ultipro_sdk.password', $config['password']);
        $container->setParameter('ultipro_sdk.customer_api_key', $config['customer_api_key']);
        $container->setParameter('ultipro_sdk.user_api_key', $config['user_api_key']);
        $container->setParameter('ultipro_sdk.base_uri', $config['base_uri']);
        $container->setParameter('ultipro_sdk.options', isset($config['options']) ? $config['options'] : []);
    }
}
