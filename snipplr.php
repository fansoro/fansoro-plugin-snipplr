<?php

/**
 * Fansoro Snipplr Plugin
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Shortcode: {snipplr}
Shortcode::add('snipplr', function ($attributes) {

    // Extract
    extract($attributes);

    return (isset($id)) ? snipplr($id) : '';
});

/**
 * Return Snipplr snippet
 *
 *  <code>
 *      snipplr(12345);
 *  </code>
 *
 * @param  int    $id Snipplr ID
 * @return string
 */
function snipplr($id)
{
    return (isset($id)) ? "<div id=\"snipplr_embed_{$id}\" class=\"snipplr_embed\"><script type=\"text/javascript\" src=\"http://snipplr.com/js/embed.js\"></script><script type=\"text/javascript\" src=\"http://snipplr.com/json/{$id}\"></script>" : '';
}
