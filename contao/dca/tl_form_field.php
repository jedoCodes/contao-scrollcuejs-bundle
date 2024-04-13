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

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;
use JedoCodes\ContaoScrollCueJs\ContaoScrollCueJsBundle;

/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsAnimation'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ContaoScrollCueJsBundle::$animationOptions,
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql' => ['type' => 'string', 'length' => 32, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsDuration'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50 clr'],
    'sql' => ['type' => 'string', 'length' => 16, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsDelay'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50'],
    'sql' => ['type' => 'string', 'length' => 16, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsInterval'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'natural'],
    'sql' => 'smallint unsigned NULL',
];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsClass'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50'],
    'sql' => ['type' => 'string', 'length' => 256, 'default' => ''],
];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['scrollcuejsAnimationeffects'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true],
    'sql' => "char(1) NOT NULL default ''"
];

/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['config']['onload_callback'][] = function (DataContainer $dc): void {
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
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'scrollcuejsAnimationeffects';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['scrollcuejsAnimationeffects'] = 'scrollcuejsAnimation, scrollcuejsDuration,scrollcuejsDelay, scrollcuejsInterval,scrollcuejsClass';
