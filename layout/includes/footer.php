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
 * Theme glostest footer layout includes file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

    <footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>

        <p>© 2016 University of Gloucestershire, The Park, Cheltenham, GL50 2RH. Telephone +44 (0)1242 714700.<br>
        Company Registration Number 06023243. VAT Number GB 886 1439 87.</p>
        <div class='socialwrapper'>
            <div class='social'>
                <a href='http://www.facebook.com/uniofglos' alt = 'Facebook'>
                    <i class="fa fa-2x fa-facebook"></i></a>
                <a href='http://www.twitter.com/uniofglos' alt = 'Twitter'>
                    <i class="fa fa-2x fa-twitter"></i></a>
                <a href='http://www.linkedin.com/company/22278' alt = 'Linkedin'>
                    <i class="fa fa-2x fa-linkedin"></i></a>
                <a href='http://www.youtube.com/user/universityofglos/featured' alt = 'YouTube'>
                    <i class="fa fa-2x fa-youtube"></i></a>
                <a href='https://www.flickr.com/photos/uniofglos' alt = 'Flikr'>
                    <i class="fa fa-2x fa-flickr"></i></a>
            </div>
            <div class='lts'>
                <p>Email: lts@glos.ac.uk<br>
                Phone: (01242) 714440</p>
                <img src="<?php echo $OUTPUT->pix_url('lts-logo', 'theme'); ?>" alt="LTS Logo" />
            </div>
            <div class='maintenance'>
                <p>This site is maintained and operated by Learning Technology Support (LTS)</p>
            </div>
        </div>
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>
