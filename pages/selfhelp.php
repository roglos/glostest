<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme GlosTest help page.
 *
 * @package    theme_glostest
 * @author     2016 Richard Oelmann
 * @copyright  2016 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Ref: http://docs.moodle.org/dev/Page_API.
require_once('../../../config.php');
require_once('../lib.php');

$PAGE->set_context(context_system::instance());
$thispageurl = new moodle_url('/theme/glostest/pages/selfhelp.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

$PAGE->set_title('GlosMoodle SelfHelp');
$PAGE->set_heading('GlosMoodle SelfHelp');

// No edit.
$USER->editing = $edit = 0;

$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->box_start();
?>
<h2>Self Help Moodle Guidance</h2>
<h3>This page is provided to give some basic self-help guidance around parts of your Moodle site and how to make it work for you.</h3>
<p>If you need further technical or system help, please contact Richard. If you are a member of staff and would like support for best practice uses of tools within Moodle, then please contact LTS.</p>
<p><br></p>
<p>Tabs for areas to provide help</p>

<h2>OR Change this link in theme header.php to point to whatever required resource</h2>

<?php
echo $OUTPUT->box_end();
echo $OUTPUT->footer();
