<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme glostest lib file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('lib/alertslib.php');

function glostest_grid($hassidepre, $hassidepost, $hassidetop) {
    if ($hassidepre && $hassidepost) {
        $regions = array('content' => 'col-sm-6 col-sm-push-3 col-lg-8 col-lg-push-2');
        $regions['pre'] = 'col-sm-3 col-sm-pull-6 col-lg-2 col-lg-pull-8';
        $regions['post'] = 'col-sm-3 col-lg-2';
    } else if ($hassidepre && !$hassidepost) {
        $regions = array('content' => 'col-sm-9 col-sm-push-3 col-lg-10 col-lg-push-2');
        $regions['pre'] = 'col-sm-3 col-sm-pull-9 col-lg-2 col-lg-pull-10';
        $regions['post'] = 'emtpy';
    } else if (!$hassidepre && $hassidepost) {
        $regions = array('content' => 'col-sm-9 col-lg-10');
        $regions['pre'] = 'empty';
        $regions['post'] = 'col-sm-3 col-lg-2';
    } else if (!$hassidepre && !$hassidepost) {
        $regions = array('content' => 'col-md-12');
        $regions['pre'] = 'empty';
        $regions['post'] = 'empty';
    }

    if ('rtl' === get_string('thisdirection', 'langconfig')) {
        if ($hassidepre && $hassidepost) {
            $regions['pre'] = 'col-sm-3  col-sm-push-3 col-lg-2 col-lg-push-2';
            $regions['post'] = 'col-sm-3 col-sm-pull-9 col-lg-2 col-lg-pull-10';
        } else if ($hassidepre && !$hassidepost) {
            $regions = array('content' => 'col-sm-9 col-lg-10');
            $regions['pre'] = 'col-sm-3 col-lg-2';
            $regions['post'] = 'empty';
        } else if (!$hassidepre && $hassidepost) {
            $regions = array('content' => 'col-sm-9 col-sm-push-3 col-lg-10 col-lg-push-2');
            $regions['pre'] = 'empty';
            $regions['post'] = 'col-sm-3 col-sm-pull-9 col-lg-2 col-lg-pull-10';
        }
    }
    $regions['top'] = 'col-sm-12';

    return $regions;
}

/**
 * Returns extra variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. This will apply extra less as a custom setting.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS selectors and rules.
 */
function theme_glostest_extra_less ($theme) {
    $extraless = '';
    if (!empty($theme->settings->customless)) {
        $extraless = $theme->settings->customless;
    }

    return $extraless;
}
/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_glostest_process_css($css, $theme) {

    $linkspots1colour = theme_glostest_get_setting('linkspots1colour');
    $css = theme_glostest_set_linkspots1colour($css, $linkspots1colour);
    $linkspots2colour = theme_glostest_get_setting('linkspots2colour');
    $css = theme_glostest_set_linkspots2colour($css, $linkspots2colour);
    $linkspots3colour = theme_glostest_get_setting('linkspots3colour');
    $css = theme_glostest_set_linkspots3colour($css, $linkspots3colour);
    $linkspots4colour = theme_glostest_get_setting('linkspots4colour');
    $css = theme_glostest_set_linkspots4colour($css, $linkspots4colour);
    $linkspots5colour = theme_glostest_get_setting('linkspots5colour');
    $css = theme_glostest_set_linkspots5colour($css, $linkspots5colour);
    $linkspots6colour = theme_glostest_get_setting('linkspots6colour');
    $css = theme_glostest_set_linkspots6colour($css, $linkspots6colour);

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_glostest_set_customcss($css, $customcss);

    return $css;
}

/**
 * This function creates the dynamic HTML needed for some
 * settings and then passes it back in an object so it can
 * be echo'd to the page.
 *
 * This keeps the logic out of the layout files.
 *
 * @param string $setting bring the required setting into the function
 * @param bool $format
 * @param string $setting
 * @param array $theme
 * @param stdclass $CFG
 * @return string
 */
function theme_glostest_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('glostest');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}
/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_glostest_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('glostest');
    }
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'logo')) {
        $theme = theme_config::load('glostest');
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if (preg_match("/slide[1-9][0-9]*image/", $filearea) !== false) { // Carousel images.
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if (preg_match("/linkspots[1-9][0-9]*image/", $filearea) !== false) { // Link spot images.
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if (preg_match("/linkspots[1-9][0-9]*centralimage/", $filearea) !== false) { // Link spot central images.
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if ($filearea === 'loginbg') {
            return $theme->setting_file_serve('loginbg', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_glostest_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_glostest_set_linkspots1colour($css, $linkspots1colour) {
    $tag = '[[setting:linkspots1colour]]';
    $replacement = $linkspots1colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_glostest_set_linkspots2colour($css, $linkspots2colour) {
    $tag = '[[setting:linkspots2colour]]';
    $replacement = $linkspots2colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_glostest_set_linkspots3colour($css, $linkspots3colour) {
    $tag = '[[setting:linkspots3colour]]';
    $replacement = $linkspots3colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_glostest_set_linkspots4colour($css, $linkspots4colour) {
    $tag = '[[setting:linkspots4colour]]';
    $replacement = $linkspots4colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_glostest_set_linkspots5colour($css, $linkspots5colour) {
    $tag = '[[setting:linkspots5colour]]';
    $replacement = $linkspots5colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_glostest_set_linkspots6colour($css, $linkspots6colour) {
    $tag = '[[setting:linkspots6colour]]';
    $replacement = $linkspots6colour;
    if (!($replacement)) {
        $replacement = '#0000ff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
