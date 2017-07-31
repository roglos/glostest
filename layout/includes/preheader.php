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
 * Theme glostest preheader logic layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

global $PAGE, $COURSE, $USER;

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$hassidetop = $PAGE->blocks->region_has_content('side-top', $OUTPUT);

$knownregionpre = $PAGE->blocks->is_known_region('side-pre');
$knownregionpost = $PAGE->blocks->is_known_region('side-post');
$knownregiontop = $PAGE->blocks->is_known_region('side-top');


if ($PAGE->pagelayout == 'frontpage') {
    $hassidepre = $hassidepost = $knownregionpre = $knownregionpost = false;
}

$regions = glostest_grid($hassidepre, $hassidepost, $hassidepre);
$PAGE->set_popup_notification_allowed(false);

$bodyclasses = array();
$bodyclasses[] = date("Md");

if ($PAGE->pagelayout == 'course' OR $PAGE->pagelayout == 'incourse') {
    $coursecontext = context_course::instance($COURSE->id);
    if (substr($USER->email,-11) === '@glos.ac.uk' && isset($COURSE->startdate) && time() < ($COURSE->startdate - (60*60*24*7)) ) {
        $bodyclasses[] = 'staffview';
    }
    if (isset($COURSE->startdate) && time() < ($COURSE->startdate - (60*60*24*7)) ) {
        $bodyclasses[] = 'hiddenpresemester';
    } else {
        $bodyclasses[] = 'showforsemester';
    }
}
                                                                                                                   
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-74930676-2', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body <?php echo $OUTPUT->body_attributes($bodyclasses); ?>>
<?php echo $OUTPUT->standard_top_of_body_html();
