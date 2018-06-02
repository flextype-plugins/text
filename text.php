<?php

/**
 *
 * Flextype Text Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event, Text\Text};

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [text-cut length=10]Lorem ipsum dolor sit amet, consectetur adipisicing elit[/text-cut]
    Content::shortcode()->addHandler('text-cut', function(ShortcodeInterface $s) {
        return Text::cut($s->getContent(),
                         $s->getParameter('length'),
                         ((null !== $s->getParameter('msg')) ? $s->getParameter('msg') : '...' ));
    });

    // Shortcode: [text-lowercase]Text here[/text-lowercase]
    Content::shortcode()->addHandler('text-lowercase', function(ShortcodeInterface $s) {
        return Text::lowercase($s->getContent());
    });

    // Shortcode: [text-uppercase]Text here[/text-uppercase]
    Content::shortcode()->addHandler('text-uppercase', function(ShortcodeInterface $s) {
        return Text::uppercase($s->getContent());
    });

    // Shortcode: [text-lorem num=3]
    Content::shortcode()->addHandler('text-lorem', function(ShortcodeInterface $s) {
        return Text::lorem(((null !== $s->getParameter('num')) ? $s->getParameter('num') : 1 ));
    });

    // Shortcode: [text-right num=3]Text here[/text-right]
    Content::shortcode()->addHandler('text-right', function(ShortcodeInterface $s) {
        return Text::right($s->getContent(),
                           $s->getParameter('num'));
    });

    // Shortcode: [text-left num=3]Text here[/text-left]
    Content::shortcode()->addHandler('text-left', function(ShortcodeInterface $s) {
        return Text::left($s->getContent(),
                           $s->getParameter('num'));
    });
});
