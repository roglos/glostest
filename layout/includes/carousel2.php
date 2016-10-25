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
 * Theme glostest carousel slider layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* Carousel
 * ======== */
global $CFG;
$numslides = $PAGE->theme->settings->numberofslides;
if ($numslides && (intval($CFG->version) >= 2013111800)) {
    $devicetype = core_useragent::get_device_type(); // In moodlelib.php.
    if (($devicetype == "mobile") && $PAGE->theme->settings->hideonphone) {
        $numslides = false;
    } else if (($devicetype == "tablet") && $PAGE->theme->settings->hideontablet) {
        $numslides = false;
    }
}
if ($numslides) {
?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            for ($carouselindicators = 1; $carouselindicators <= $numslides; $carouselindicators++) {
                echo '<li data-target="#glostestCarousel" data-slide-to="'.$carouselindicators.'"';
                if ($carouselindicators == 0) {
                    echo 'class="active"';
                }
                echo '></li>';
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            for ($carouselslide = 1; $carouselslide <= $numslides; $carouselslide++) {
                $slideurl = $slidetitle = $slidebutton = $slidecaption = $slideimage = '';
                $slideurl = theme_glostest_get_setting('slide' . $carouselslide . 'url');
                if (theme_glostest_get_setting('slide' . $carouselslide . 'button')) {
                    $slidebutton = theme_glostest_get_setting('slide' . $carouselslide . 'button');
                } else {
                    $slidebutton = get_string('readmore', 'theme_glostest');
                }
                $slidetitle = theme_glostest_get_setting('slide' . $carouselslide . 'title', true);
                $slidecaption = theme_glostest_get_setting('slide' . $carouselslide . 'caption', true);
                $slideimage = $OUTPUT->pix_url('carousel/default', 'theme');
                if (theme_glostest_get_setting('slide' . $carouselslide . 'image')) {
                    $slideimage = $PAGE->theme->setting_file_url('slide' . $carouselslide .
                            'image', 'slide' . $carouselslide . 'image');
                }
                $active = '';
                if ($carouselslide === 1 ) {
                    $active = "active";
                }
                ?>
                <div class="item <?php echo $active;?>">
                    <img src="<?php echo $slideimage; ?>" alt="<?php echo $slidetitle; ?>"/>
                    <div class="container">
                        <?php
                        if ($slidetitle != '' || $slidecaption != '' || $slideurl != '') {
                        ?>
                            <div class="carousel-caption">
                                <?php
                                if ($slidetitle != '') {
                                ?>
                                    <h1><?php echo $slidetitle?></h1>
                                <?php
                                }
                                if ($slidecaption != '') {
                                ?>
                                    <p class="carousel-caption-text"><?php echo $slidecaption; ?></p>
                                <?php
                                }
                                if ($slideurl != '') {
                                ?>
                                    <p class="carousel-button">
                                        <a class="btn btn-lg btn-primary" href="<?php echo $slideurl; ?>" role="button">
                                            <?php echo $slidebutton ?>
                                        </a>
                                    </p>
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php
}
