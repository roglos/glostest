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
 * Theme glostest linkspots layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$numlinkspots = $PAGE->theme->settings->numberoflinkspots;
$colspan = "flexcontent";

?>

<div id="page-linkspots" class="flexcontainer">
        <?php
        for ($linkspot = 1; $linkspot <= $numlinkspots; $linkspot++) {
            $icon = theme_glostest_get_setting('linkspots'.$linkspot.'icon');
            $title = theme_glostest_get_setting('linkspots'.$linkspot.'title');
            $url = theme_glostest_get_setting('linkspots'.$linkspot.'url');
            $class = 'linkspot'.$linkspot.' '.$colspan;
            $linkspotimage = $OUTPUT->pix_url('linkspots/default', 'theme');
            $linkspotcentralimage = '';
            if (theme_glostest_get_setting('linkspots' . $linkspot . 'image')) {
                $linkspotimage = $PAGE->theme->setting_file_url('linkspots' . $linkspot .
                        'image', 'linkspots' . $linkspot . 'image');
            }
            if (theme_glostest_get_setting('linkspots' . $linkspot . 'centralimage')) {
                $linkspotcentralimage = $PAGE->theme->setting_file_url('linkspots' . $linkspot .
                        'centralimage', 'linkspots' . $linkspot . 'centralimage');
            }

        ?>
                <div class="linkspots-wrapper <?php echo $class;?>">
                    <a href="<?php echo $url;?>" alt="<?php echo $title ?>">

                    <div class="linkspots-block">
                        <img class='linkspotbkground' src="<?php echo $linkspotimage;?>"
                            alt="link spot background image for <?php echo $title ?> link spot.">
                        <div class="linkspots-icon">
                            <?php
                            if ($linkspotcentralimage != '') {
                                echo '<img class="linkspotcentral" src=' . $linkspotcentralimage .
                                ' alt="link spot central icon for <?php echo $title ?> link spot.">';
                            } else {
                                echo '<i class="fa fa-3x fa-' . $icon . '"></i>';
                            }
                            ?>
                        </div>
                        <h4 class="linkspot-title">
                            <?php echo $title;?>
                        </h4>
                    </div>

                    </a>
                </div>
        <?php
        }
        ?>
</div>
