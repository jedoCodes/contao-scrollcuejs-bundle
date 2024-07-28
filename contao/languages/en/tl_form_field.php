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


$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejs_legend'] 	= 'scrollCue.js Settings';
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsAnimation'] 	= ['Animation', 'Choose an animation that is started once the element comes into view.'];
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsDuration'] 	= ['Duration', 'Duration of the animation in <em>"ms"</em>.'];
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsDelay'] 		= ['Delay', 'Delay of the animation in <em>"ms"</em>.'];
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsInterval'] 	= ['Pause (only needed for List & Gallery elements)', 'Pause the animation between the individual List or Gallery elements in <em>"ms"</em>.'];
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsDataSort'] 	= ['Sorting (only needed for list & gallery elements)', 'Here you can choose how the individual list or gallery elements are displayed, empty for normal'];
$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsClass'] 		= ['CSS classes (only needed for list & gallery elements)', 'Here you can also pass CSS classes to the individual list or gallery elements.'];

$GLOBALS['TL_LANG']['tl_form_field']['scrollcuejsAnimationeffects'] = [
    "Use scrollCue animation",
    "Click here to activate scrollCue.js"
];