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

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;
use JedoCodes\ContaoScrollCueJs\ContaoScrollCueJsBundle;

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'scrollcuejsAnimationeffects';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['scrollcuejsAnimationeffects'] = 'scrollcuejsAnimation, scrollcuejsDuration,scrollcuejsDelay,scrollcuejsInterval,scrollcuejsDataSort,scrollcuejsClass';

/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsAnimation'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ContaoScrollCueJsBundle::$animationOptions,
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen'=>true,],
    'sql' => ['type' => 'string', 'length' => 32, 'default' => 'fadeIn'],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsDuration'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50 clr'],
    'sql' => ['type' => 'string', 'length' => 16, 'default' => '600'],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsDelay'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50'],
    'sql' => ['type' => 'string', 'length' => 16, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsInterval'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'natural'],
    'sql' => 'smallint unsigned NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsClass'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'clr'],
    'sql' => ['type' => 'string', 'length' => 256, 'default' => ''],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsAnimationeffects'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true],
    'sql' => "char(1) NOT NULL default ''"
];
$GLOBALS['TL_DCA']['tl_content']['fields']['scrollcuejsDataSort'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ContaoScrollCueJsBundle::$sortOptions,
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen'=>true,],
    'sql' => ['type' => 'string', 'length' => 32, 'default' => ''],
];

/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = function (DataContainer $dc): void {
    foreach ($GLOBALS['TL_DCA'][$dc->table]['palettes'] as $key => $palette) {
        if (\is_string($palette)) {
            PaletteManipulator::create()
                ->addLegend('scrollcuejs_legend', 'expert_legend', PaletteManipulator::POSITION_AFTER, true)
                ->addField('scrollcuejsAnimationeffects', 'scrollcuejs_legend', PaletteManipulator::POSITION_APPEND)
                ->applyToPalette($key, $dc->table)
            ;

        }
    }
};
