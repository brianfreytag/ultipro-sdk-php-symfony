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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Brian Freytag <me@brianfreytag.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('ultipro');

        $rootNode = method_exists($builder, 'getRootNode')
            ? $builder->getRootNode()
            : $builder->root('ultipro');

        $rootNode
            ->children()
                ->scalarNode('username')
                    ->info('The Ultipro Web Services username')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('password')
                    ->info('The Ultipro Web Services user password')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('customer_api_key')
                    ->info('The Customer API Key found in the Web Services configuration in Ultipro.')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('user_api_key')
                    ->info('The User API Key found in the Web Services configuration in Ultipro.')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('base_uri')
                    ->info('The URI shown in the endpoints under the Web Services Configuration in Ultipro.')
                    ->defaultValue('https://service5.ultipro.com')
                ->end()
                ->variableNode('options')
                    ->info('Guzzle Request Options array as defined at http://docs.guzzlephp.org/en/stable/request-options.html')
                ->end()
            ->end();

        return $builder;
    }
}
