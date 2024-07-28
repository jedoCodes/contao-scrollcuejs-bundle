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

namespace JedoCodes\ContaoScrollCueJs\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ContentModel;
use Contao\Widget;
use Contao\System;

class ContaoScrollCueJsHookListener
{
    public function onGetContentElement(ContentModel $element, string $buffer): string
    {

        return $this->processBuffer($buffer, $element);

    }

    public function onParseWidget(string $buffer, Widget $widget): string
    {
        return $this->processBuffer($buffer, $widget);
    }

    /**
     * @param object $object
     */
    private function processBuffer(string $buffer, $object): string
    {
        if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest()) || !$object->scrollcuejsAnimationeffects) {
            return $buffer;
        }

        $classes = 'scrollcuejs_enabled';

			if (($object->type === "list") || ($object->type === "gallery")) {
                    $tagname = 'ul';
        			$dataAttributes = \array_filter([
					    'data-cues'     => $object->scrollcuejsAnimation,
					    'data-group'	=> $object->type.$object->id,
					    'data-sort'     => $object->scrollcuejsDataSort,
            			'data-duration' => $object->scrollcuejsDuration,
            			'data-delay'    => $object->scrollcuejsDelay,
            			'data-interval' => $object->scrollcuejsInterval,
            			'data-addClass' => $object->scrollcuejsClass,
        			], function ($v) { return null !== $v && '' !== $v; });

			} else {

		        $dataAttributes = \array_filter([
					    'data-cue'      => $object->scrollcuejsAnimation,
            			'data-duration' => $object->scrollcuejsDuration,
            			'data-delay'    => $object->scrollcuejsDelay,
           		 	    'data-interval' => $object->scrollcuejsInterval,
            			'data-addClass' => $object->scrollcuejsClass,
        			], function ($v) { return null !== $v && '' !== $v; });

			}

        // parse the initial HTML tag
        $buffer = \preg_replace_callback(
            '|<([a-zA-Z0-9]+)(\s[^>]*?)?(?<!/)>|',
            function ($matches) use ($classes, $dataAttributes) {
                $tag = $matches[1];
                $attributes = $matches[2] ?? '';

                // add the CSS classes
                $attributes = preg_replace('/class="([^"]+)"/', 'class="$1 '.$classes.'"', $attributes, 1, $count);
                if (0 === $count) {
                    $attributes .= ' class="'.$classes.'"';
                }

                // add the data attributes
                foreach ($dataAttributes as $key => $value) {
                    $attributes .= ' '.$key.'="'.$value.'"';
                }

                return "<{$tag}{$attributes}>";
            },
            $buffer, 1
        );

        return $buffer;
    }
}
