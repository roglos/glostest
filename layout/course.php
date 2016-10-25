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
 * Theme glostest course layout file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('includes/preheader.php');

require('includes/header.php');

require('includes/courseimage.php');

global $COURSE;
?>
<div class="contenthiddenmessage alert alert-warning">
    <h2>This module content will be released just before the beginning of the semester it applies to</h2>
    <p>Staff: You can view and edit the content by clicking the <span class="btn btn-success">Turn Editing On</span> button to the top right</p>
</div>

<div id="page" class="container-fluid">
    <div id="page-content" class="row">
        <div id="region-main" class="<?php echo $regions['content']; ?>">
            <?php
            if ($courseimage) {
            ?>
            <div class='courseimagewrapper'>
                <div class="courseimage"
                    style="background: url('<?php echo $courseimage;?>') no-repeat">
                    <h2 class='course-title'><?php echo $COURSE->fullname;?></h2>
                </div>
            </div>
            <?php
            } else {
            ?>
                <h2 class='course-title'><?php echo $COURSE->fullname;?></h2>
            <?php
            }
            ?>

            <?php
            echo $OUTPUT->course_content_header();

            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </div>

        <?php
        if ($knownregionpre) {
            echo $OUTPUT->blocks('side-pre', $regions['pre']);
        }?>
        <?php
        if ($knownregionpost) {
            echo $OUTPUT->blocks('side-post', $regions['post']);
        }?>
    </div>

    <?php require('includes/footer.php');?>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
