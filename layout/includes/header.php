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
 * Theme glostest header layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header pull-left">
        <?php echo $OUTPUT->navbar_brand(); ?>
    </div>
    <div class="navbar-header pull-right">
        <?php echo $OUTPUT->user_menu(); ?>
        <?php echo $OUTPUT->navbar_button(); ?>
    </div>
    <div id="moodle-navbar" class="navbar-collapse collapse">
        <?php echo $OUTPUT->custom_menu(); ?>
        <ul class="nav pull-right">
            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
        </ul>
    </div>

    </div>
</nav>
<header class="moodleheader">
    <div class="container-fluid">
        <a href="<?php echo $CFG->wwwroot ?>" class="logo">&nbsp;</a>
        <?php echo $OUTPUT->page_heading(); ?>
    </div>
</header>

<header id="page-header" class="clearfix">
    <div id="page-navbar" class="clearfix">
        <?php echo $OUTPUT->navbar(); ?>
        <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
    </div>

    <div id="course-header">
        <?php echo $OUTPUT->course_header(); ?>
    </div>
</header>
