<?php

declare(strict_types=1);

/**
 * ScrollCue.js bundle for Contao Open Source CMS
 * Copyright (c) 2024 jedo.Codes
 *
 * @category ContaoBundle
 * @package  jedocodes/contao-scrollcuejs-bundle
 * @author   jedo.Codes <dev@jedo.codes>
 * @link     https://github.com/jedocodes/contao-scrollcuejs-bundle
 */

namespace JedoCodes\ContaoScrollCueJs\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use JedoCodes\ContaoScrollCueJs\ContaoScrollCueJsBundle;
use MadeYourDay\RockSolidCustomElements\RockSolidCustomElementsBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser):array
    {
        return [
            BundleConfig::create(ContaoScrollCueJsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, RockSolidCustomElementsBundle::class]),
        ];
    }
}
