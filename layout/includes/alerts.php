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
 * Theme glostest alerts layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$enable1alert = theme_glostest_get_alertsetting('enable1alert');
$enable2alert = theme_glostest_get_alertsetting('enable2alert');
$enable3alert = theme_glostest_get_alertsetting('enable3alert');

if ($enable1alert || $enable2alert || $enable3alert) {
    $alertinfo = '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-info fa-stack-1x fa-inverse"></i></span>';
    $alertwarning = '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-warning fa-stack-1x fa-inverse"></i></span>';
    $alertsuccess = '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i></span>';
}
?>
<!-- Start Alerts -->

<!-- Alert #1 -->
<?php
if ($enable1alert) {
?>
    <div class="useralerts alert alert-<?php echo theme_glostest_get_setting('alert1type') ?>">
        <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
        <?php
        $alert1icon = 'alert' . theme_glostest_get_setting('alert1type');
        if ('ltr' === get_string('thisdirection', 'langconfig')) {
            echo '<div class="alertmessage">' . $$alert1icon . '<span class="title">'
                . theme_glostest_get_setting('alert1title', true)
                . '</span>' . theme_glostest_get_setting('alert1text', true) .'</div>';
        } else {
            echo '<div class="alertmessage">' . $$alert1icon
                . theme_glostest_get_setting('alert1text', true) . '<span class="title">'
                . theme_glostest_get_setting('alert1title', true) . '</span></div>';
        } ?>
    </div>
<?php
}
?>

<!-- Alert #2 -->
<?php
if ($enable2alert) {
?>
    <div class="useralerts alert alert-<?php echo theme_glostest_get_setting('alert2type') ?>">
        <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
        <?php
        $alert2icon = 'alert' . theme_glostest_get_setting('alert2type');
        if ('ltr' === get_string('thisdirection', 'langconfig')) {
            echo '<div class="alertmessage">' . $$alert2icon . '<span class="title">'
                . theme_glostest_get_setting('alert2title', true)
                . '</span>' . theme_glostest_get_setting('alert2text', true) .'</div>';
        } else {
            echo '<div class="alertmessage">' . $$alert2icon
                . theme_glostest_get_setting('alert2text', true) . '<span class="title">'
                . theme_glostest_get_setting('alert2title', true) . '</span></div>';
        } ?>
    </div>
<?php
}
?>

<!-- Alert #3 -->
<?php
if ($enable3alert) {
?>
    <div class="useralerts alert alert-<?php echo theme_glostest_get_setting('alert3type') ?>">
        <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times-circle"></i></a>
        <?php
        $alert3icon = 'alert' . theme_glostest_get_setting('alert3type');
        if ('ltr' === get_string('thisdirection', 'langconfig')) {
            echo '<div class="alertmessage">' . $$alert3icon . '<span class="title">'
                . theme_glostest_get_setting('alert3title', true)
                . '</span>' . theme_glostest_get_setting('alert3text', true) .'</div>';
        } else {
            echo '<div class="alertmessage">' . $$alert3icon
                . theme_glostest_get_setting('alert3text', true) . '<span class="title">'
                . theme_glostest_get_setting('alert3title', true) . '</span></div>';
        } ?>
    </div>
<?php
}
?>
<!-- End Alerts -->
