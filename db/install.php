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
 * Theme glostest install db file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Theme_glostest install function.
 *
 * @return void
 */
function xmldb_theme_glostest_install() {
    global $CFG;

    // Set the default background.
    $fs = get_file_storage();

    $filerecord = new stdClass();
    $filerecord->component = 'theme_glostest';
    $filerecord->contextid = context_system::instance()->id;
    $filerecord->userid    = get_admin()->id;
    $filerecord->filearea  = 'backgroundimage';
    $filerecord->filepath  = '/';
    $filerecord->itemid    = 0;
    $filerecord->filename  = 'background.jpg';
    $fs->create_file_from_pathname($filerecord, $CFG->dirroot . '/theme/glostest/pix/background.jpg');
}
