<?php

declare(strict_types=1);

/**
 * ScrollCue.js bundle for Contao Open Source CMS
 * Copyright (c) 2023 jedo.Codes
 *
 * @category ContaoBundle
 * @package  jedocodes/sitebuilder-bundle
 * @author   jedo.Codes <develop@jedo.codes>
 * @link     https://github.com/jedocodes/contao-scrollcuejs-bundle
 */

namespace JedoCodes\ContaoScrollCueJs\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoScrollCueJsExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('listener.yml');
    }
}
