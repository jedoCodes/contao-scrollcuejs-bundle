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

namespace JedoCodes\ContaoScrollCueJs;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the ContaoScrollCueJs.
 */
class ContaoScrollCueJsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public static $animationOptions = [
        'fadeIn',
        'slideInLeft',
        'slideInRight',
        'slideInDown',
        'slideInUp',
        'zoomIn',
        'zoomOut',
        'rotateIn',
        'bounceIn',
        'bounceInLeft',
        'bounceInRight',
        'bounceInDown',
        'bounceInUp',
        'flipInX',
        'flipInY',
    ];

	public static $sortOptions = [ 
        'reverse',
        'random',
	];
}
