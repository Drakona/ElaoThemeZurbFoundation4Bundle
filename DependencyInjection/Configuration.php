<?php

/**
 * This file is part of the Elao Zurb Foundation 4 Theme Bundle.
 *
 * Copyright (C) 2013 Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Bundle\Theme\ZurbFoundation4Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('elao_theme_zurb_foundation_4');

        return $treeBuilder;
    }
}
