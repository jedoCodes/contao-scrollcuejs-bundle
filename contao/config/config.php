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

use JedoCodes\ContaoScrollCueJs\EventListener\ContaoScrollCueJsHookListener;

$GLOBALS['TL_HOOKS']['getContentElement'][] = [ContaoScrollCueJsHookListener::class, 'onGetContentElement'];
$GLOBALS['TL_HOOKS']['parseWidget'][] = [ContaoScrollCueJsHookListener::class, 'onParseWidget'];
