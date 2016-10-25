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
 * Theme glostest general settings file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Generic settingpage.
$temp = new admin_settingpage('theme_glostest_generic',  get_string('genericsettings', 'theme_glostest'));
$temp->add(new admin_setting_heading('theme_glostest_generalheading', get_string('generalheadingsub', 'theme_glostest'),
    format_text(get_string('generalheadingdesc', 'theme_glostest'), FORMAT_MARKDOWN)));

// Custom LESS file.
$name = 'theme_glostest/customless';
$title = get_string('customless', 'theme_flexibase');
$description = get_string('customlessdesc', 'theme_flexibase');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Custom CSS file.
$name = 'theme_glostest/customcss';
$title = get_string('customcss', 'theme_glostest');
$description = get_string('customcssdesc', 'theme_glostest');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_glostest', $temp);
