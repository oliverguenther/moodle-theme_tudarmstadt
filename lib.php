<?php

/**
 * Library functions for the tudarmstadt theme
 *
 * @package   theme_tudarmstadt
 * @copyright 2011 onwards Oliver Günther
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function tudarmstadt_process_css($css, $theme) {
 
    if (!empty($theme->settings->accentcolor)) {
        $accentcolor = $theme->settings->accentcolor;
    } else {
        $accentcolor = null;
    }
    $css = tudarmstadt_set_accentcolor($css, $accentcolor);
 
    return $css;
}


function tudarmstadt_set_accentcolor($css, $accentcolor) {
    $tag = '[[setting:accentcolor]]';
    $replacement = $accentcolor;
    if (is_null($replacement)) {
        $replacement = '#F5A300';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}