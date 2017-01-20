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
 * Theme glostest renderer file.
 *
 * @package    theme_glostest
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');
require_once($CFG->dirroot . "/course/renderer.php");
require_once($CFG->libdir. '/coursecatlib.php');
/**
 * The theme course renderer extends core course renderer
 */
class theme_glostest_core_course_renderer extends core_course_renderer {

    public function promoted_courses($type) {
        global $CFG, $OUTPUT, $DB, $PAGE, $USER;
        if ($type == '') {
            return false;
        }

        $featuredcontent = '';
        $featuredids = '';

        $promotedlinktext = get_string('promotedcourseslinkdefault', 'theme_glostest');
        $promotedlink = $CFG->wwwroot.'/course/index.php';

        /* Get tagged courses from DB */
        if ($type == 'tags') {
            $sql = "SELECT DISTINCT itemid FROM {tag_instance} WHERE itemtype = 'course' AND tagid IN
                (SELECT tagid FROM {tag_instance} WHERE itemtype = 'user' AND itemid = ".$USER->id.")";
            $featuredidsarray = $DB->get_records_sql($sql, array());
            foreach ($featuredidsarray as $fid) {
                $featuredids .= $fid->itemid.',';
            }
            $promotedtitle = get_string($type.'coursestitle', 'theme_glostest');
        }
        /* Get promoted courses from setting */
        if ($type == 'setting') {
            $featuredids = theme_glostest_get_setting('promotedcourses');
            $promotedlinktext = theme_glostest_get_setting('promotedlinktext', 'format_text');
            $promotedlink = theme_glostest_get_setting('promotedlink', 'format_text');
            $promotedtitle = get_string($type.'coursestitle', 'theme_glostest');
        }
        if ($type == 'my') {
            $courses = enrol_get_all_users_courses($USER->id);
            foreach ($courses as $fid) {
                $featuredids .= $fid->id.',';
            }
            $promotedtitle = get_string($type.'coursestitle', 'theme_glostest');
        }
        /* Add other Types and their course identifying logic here. */

        /* Explode course id list into array. */
        $rcourseids = (!empty($featuredids)) ? explode(",", $featuredids, 12) : array();
        /* Error trap - if array is empty return nothing - this will also be the case if $type is not recognised. */
        if (empty($rcourseids)) {
            return false;
        }

        $hcourseids = theme_glostest_hidden_courses_ids();

        if (!empty($hcourseids)) {
            foreach ($rcourseids as $key => $val) {
                if (in_array($val, $hcourseids)) {
                    unset($rcourseids[$key]);
                }
            }
        }

        foreach ($rcourseids as $key => $val) {
            if ($val == '') {
                unset($rcourseids[$key]);
            }
            $ccourse = $DB->get_record('course', array('id' => $val));
            if (empty($ccourse)) {
                unset($rcourseids[$key]);
                continue;
            }
        }

        if (empty($rcourseids)) {
            return false;
        }

        $fcourseids = array_chunk($rcourseids, 12);
        $totalfcourse = count($fcourseids);

        $featuredheader = '<div class="custom-courses-list" id="Promoted-Courses">
                              <div class="container-fluid">
                                <div class="titlebar with-felements">
                                    <h2>'.$promotedtitle.'  |  <a href="'.$promotedlink.'">'.$promotedlinktext.'</a></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="promoted_courses" data-crow="'.$totalfcourse.'">';

        $featuredfooter = ' </div>
                            </div>
                            </div>';

        if (!empty($fcourseids)) {
            foreach ($fcourseids as $courseids) {
                $rowcontent = '<div><div class="row-fluid promocarousel">';

                foreach ($courseids as $courseid) {
                    $course = get_course($courseid);
                    $no = get_config('theme_glostest', 'patternselect');
                    $nimgp = (empty($no)|| $no == "default") ? 'no-image' : 'cs0'.$no.'/no-image';

                    $noimgurl = $OUTPUT->pix_url('courses', 'theme');

                    $courseurl = new moodle_url('/course/view.php', array('id' => $courseid ));

                    if ($course instanceof stdClass) {
                        require_once($CFG->libdir. '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }
                    if (isset($course->startdate) && time() < ($course->startdate - (60*60*24*7)) ) {
                        $moduletiming = 'hiddenpresemester';
                    } else {
                        $moduletiming = 'showforsemester';
                    }

                    $imgurl = '';

                    $summary = theme_glostest_strip_html_tags($course->summary);
                    $summary = theme_glostest_course_trim_char($summary, 125);
                    $trimtitle = theme_glostest_course_trim_char($course->fullname, 25);

                    $context = context_course::instance($course->id);
                    $nostudents = count_role_users(5, $context);

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                        if (!$isimage) {
                            $imgurl = $noimgurl;
                        }
                    }

                    if (empty($imgurl)) {
                        $imgurl = $PAGE->theme->setting_file_url('headerbackgroundimage', 'headerbackgroundimage', true);
                        if (!$imgurl) {
                            $imgurl = $noimgurl;
                        }
                    }

                        $coursehtml = '
                        <div class="promowrap">
                        <div class="fp-coursebox ' . $moduletiming . '">
                        <div class="fp-coursethumb">
                        <a href="'.$courseurl.'">
                        <img src="'.$imgurl.'" width="100%" height="125" title="'.$course->fullname.'">
                        </a>
                        <div class="fp-courseinfo">
                        <h5><a href="'.$courseurl.'" id="button" data-toggle="tooltip" data-placement="bottom"
                            title="'.$course->fullname.'" >'.$trimtitle.'</a></h5>
                        </div>
                        <div class="promo-summary">'.$summary.'</div>
                        </div>
                        </div>
                        </div>';

                        $rowcontent .= $coursehtml;

                }

                    $rowcontent .= '</div></div>';
                    $featuredcontent .= $rowcontent;
            }

        }

        $featuredcourses = $featuredheader.$featuredcontent.$featuredfooter;
        return $featuredcourses;
    }

}
