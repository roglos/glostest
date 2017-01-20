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
 * Theme glostest lang file.
 *
 * @package    theme_glostest
 * @copyright  2016 RM Oelmann, University of Gloucestershire (roelmann@glos.ac.uk)
 * @credits    Bas Brands - Bootstrap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Core.
$string['configtitle'] = 'glostest';
$string['pluginname'] = 'glostest';
$string['choosereadme'] = '<p>Glostest is a Bootstrap3 theme built on the design from How2Moodle for University of Gloucestershire, but completely rebuilt from a clone of More and adapted to use Bas Brands Bootstrap theme as a parent.</p>';

// Regions.
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['region-side-top'] = 'Top';

// Settings.
// General.
$string['genericsettings'] = 'General';
$string['generalheadingsub'] = 'General settings';
$string['generalheadingdesc'] = 'Configure the general settings for the theme here.';

$string['loginbg'] = 'Login Background';
$string['loginbgdesc'] = 'This setting allows you to upload a background image for the login page. The suggested image size is around 1200x800px, although this may vary with your expected user screen size, or institutional branding design.';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'The customcss setting box effictively allows you full control over any and all css within the theme as this setting can override everything within the theme styles, including those items set in other areas of the settings pages. It is worth noting that the Flexibase theme also has a customLESS setting (see the additional LESS page) which allows you to utilise LESS as well as the CSS.';

$string['customless'] = 'Custom LESS';
$string['customlessdesc'] = 'Whatever LESS rules you add to this textarea will be reflected in every page, making for easier customization of this theme. Glostest is one of few themes that have these LESS settings and makes use of compiling LESS \'on the fly\' from both the settings above and from this custom LESS box. This setting allows any LESS variable or rule to be overridden in the same way that the customCSS box overrides the theme css. (Note: customcss will override customLESS as the css rules are the alst to be applied).';

// Alerts.
$string['alertsheading'] = 'User alerts';
$string['alertsheadingsub'] = 'Display important messages to your users on the front page';
$string['alertsdesc'] = 'This will display an alert (or multiple) in three different styles to your users on the Moodle frontpage. Please remember to disable these when no longer needed.';
$string['enablealert'] = 'Enable alert';
$string['enablealertdesc'] = 'Allows the message to be shown. Disabling this setting also allows the content of the alert to be left in place if it may be re-used, but not shown.';
$string['alert1'] = 'First alert';
$string['alert2'] = 'Second alert';
$string['alert3'] = 'Third alert';
$string['alertinfodesc'] = 'Enter the settings for your alert.';
$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert.';
$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users, Information, Warning, Danger - these levels apply the relevant icon and theme colour to the alerts.';
$string['alerttext'] = 'Alert text';
$string['alerttextdesc'] = 'This is the main text of the alert. Alerts should be kept as short as possible, while maintaining the meaning, in order to ensure that users do read them.';
$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';

// Carousel.
$string['carouselheading'] = 'Carousel Slideshow';
$string['carouselheadingsub'] = 'Set images and captions for the frontpage carousel';
$string['carouseldesc'] = 'Set upto 8 images, with title, caption and link url for the front page carousel.';
$string['toggleslideshow'] = 'Toggle Carousel display';
$string['toggleslideshowdesc'] = 'Choose if you wish to hide or show the carousel.';
$string['numberofslides'] = 'Number of slides';
$string['numberofslides_desc'] = 'Number of slides on the carousel. You can set upto 8 slides.';
$string['hideonphone'] = 'Hide carousel on mobiles';
$string['hideonphonedesc'] = 'Choose if you wish to disable slide show on mobiles.';
$string['hideontablet'] = 'Hide carousel on tablets';
$string['hideontabletdesc'] = 'Choose if you wish to disable the carousel on tablets.';
$string['alwaysdisplay'] = 'Always show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never show';
$string['readmore'] = 'Read more';
$string['slideno'] = 'Slide {$a->slide}';
$string['slidenodesc'] = 'Enter the settings for slide {$a->slide}.';
$string['slidetitle'] = 'Slide title';
$string['slidetitledesc'] = 'Enter a descriptive title for your slide';
$string['noslidetitle'] = 'No title for slide {$a->slide}';
$string['slideimage'] = 'Slide image';
$string['slideimagedesc'] = 'A file picker to drag your images. Ideally ensure all your images are the same size.';
$string['slidecaption'] = 'Slide caption';
$string['slidecaptiondesc'] = 'Enter the caption text to use for the slide. This is plain text only and does not include html.';
$string['slideurl'] = 'Slide link';
$string['slideurldesc'] = 'Enter the target destination of the slide\'s image link';
$string['slidebutton'] = 'Slide button';
$string['slidebuttondesc'] = 'Enter the text for the button for this slide';

// Link Spots.
$string['linkspotsheading'] = 'Link Spots';
$string['linkspotsinfodesc'] = 'Enter the settings for your link spots.';
$string['linkspotsheadingsub'] = 'Locations on the front page to add information and links.';
$string['linkspotsdesc'] = 'This theme provides the option of enabling upto 6 "linkspots" or "ad" spots just under the slideshow.  These allow you to easily identify core information to your users and provide direct links.';
$string['togglelinkspots'] = 'linkspots Spot display';
$string['togglelinkspotsdesc'] = 'Choose if you wish to hide or show the linkspots.';
$string['numberoflinkspots'] = 'Number of link spots';
$string['numberoflinkspots_desc'] = 'Number of link spots. You can set upto 6.';
$string['linkspot'] = 'Link spot ';
$string['linkspotstitle'] = 'Title';
$string['linkspotstitledesc'] = 'Title to show in this linkspots spot.';
$string['linkspotsurl'] = 'URL';
$string['linkspotsurldesc'] = 'Link for this spot.';
$string['linkspotsicon'] = 'Icon';
$string['linkspotsicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fontawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';
$string['linkspotsimage'] = 'Image';
$string['linkspotsimagedesc'] = 'This provides the option of displaying an image above the text in the linkspots spot.';
$string['linkspotscentralimage'] = 'Link spot central image';
$string['linkspotscentralimagedesc'] = 'A file picker to drag your images for the central icon. If used, this will override any fontawesome icon added above. If left blank a FA icon (selected or default) will be added to the central icon area.';
$string['alwaysdisplay'] = 'Always show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never show';
$string['captiontextcolour'] = 'Link Spot colour';
$string['captiontextcolourdesc'] = 'Colour for the Link spot text, icon and borders.';


// Course Image rendering.
$string['frontpagecoursesettings'] = 'Course Images';
$string['frontpagesettingsheading'] = 'Using Course Images';
$string['frontpagedesc'] = 'Configure the way that the images are used for course tiles on the frontpage and as course images on the course pages.';
$string['coursetileimagesinfo'] = 'Front Page Course Tile Images';
$string['coursetileimagesinfodesc'] = 'Settings for Front Page course tile images';
$string['frontpagerenderer'] = 'Frontpage Course Boxes';
$string['frontpagerendererdesc'] = 'Control the way that the course boxes on the front page are rendered, with or without the overlay.';
$string['frontpagerendereroption1'] = 'Tiles';
$string['frontpagerendereroption2'] = 'Tiles w/ overlay';
$string['rendereroverlaycolour'] = 'Overlay colour';
$string['rendereroverlaycolourdesc'] = 'The colour of the overlay, when the "Tiles w/ overlay" renderer is selected.';
$string['rendereroverlayfontcolour'] = 'Overlay font colour';
$string['rendereroverlayfontcolourdesc'] = 'The colour of the font, when hovering over a coursebox with "Tiles w/ overlay" renderer enabled.';
$string['frontpagerendererdefaultimage'] = 'Default Front Page course tile image';
$string['frontpagerendererdefaultimagedesc'] = 'The default image to be used for front page course tiles when no course image is found, (applies for Tiles w/ overlay)';
$string['dashboardcoursetileinfo'] = 'Dashboard Coarse listing options';
$string['dashboardcoursetileinfodesc'] = 'Settings for Dashboard course tiles. Note: the default image used for the front page course tiles with overlay is used when course tiles are displayed on the My Dashboard page, along with the overlay colours set for the front page course tiles options.';
$string['dashboardrenderer'] = 'Dashboard Course Listing';
$string['dashboardrendererdesc'] = 'Control the way that the course listing is rendered on the My Dashboard page - as a standard listing or as course tiles.';
$string['dashboardrendereroption1'] = 'Course tiles';
$string['dashboardrendereroption2'] = 'Default listing';
$string['courseheaderdefaultimage'] = 'Default course header image';
$string['courseheaderdefaultimagedesc'] = 'The default image to be used for course header images when no course image is found - if this is left empty, then only courses with a course image in the Course Summary files will have a heading image.';
$string['courseimageheaderoption'] = 'Course Header Images';
$string['courseimageheaderoptiondesc'] = 'Configure the way the images are used for course headers. Select no image, image as a header background or image as a separate image at the top of the course page.';
$string['courseimageheaderoption1'] = 'Course image as a header banner';
$string['courseimageheaderoption2'] = 'Course image as a separate image';
$string['courseimageheaderoption3'] = 'No course header image';
$string['coursepageimagesinfo'] = 'Course Page Images';
$string['coursepageimagesinfodesc'] = 'Settings for Course Page header images';
$string['courseheaderimageheight'] = 'Course Header image height';
$string['courseheaderimageheightdesc'] = 'Set the height for any images used as header banners (recommended height 150-175px)<br>Note: If you set this to less than 125px, you may also need to alter the font-size on the course grade to bring it to a single line (add <code>.courseheadergradepercentage table tbody tr:last-of-type .column-itemname, .courseheadergradepercentage table tbody tr:last-of-type .column-percentage {font-size:120%;}</code> to your customcss.';
$string['courseboxactivitynotice'] = 'Activity<br>Notices';

// Promoted courses.
$string['promotedtitledefault'] = 'Featured courses';
$string['promotedtitledesc'] = 'Please give the Promoted courses block title,
either language key or Text.For ex: lang:display or Display';
$string['pcourseenable'] = 'Enable admin set promoted courses slider';
$string['pcoursetagenable'] = 'Enable Tagged recommended courses slider';
$string['pcoursemyenable'] = 'Enable My courses slider';

$string['pcourses'] = 'Featured Courses';
$string['pcoursesdesc'] = 'LIMIT=9 You cannot enter more than 9 course ids. Please give the featured courses id should separated by comma.';
$string['promotedcoursesheading'] = 'Featured Courses Slider';
$string['title'] = 'Title';
$string['promotedlinktext'] = 'View More Courses Text';
$string['promotedlinktext_desc'] = 'This provides an option to link to a course category to show more courses.  Enter a URL below.';
$string['promotedlink'] = 'View More Courses URL';
$string['promotedlink_desc'] = 'Enter a URL to one of your course catagories.  This is displayed next to the featured courses title.';
$string['settingpromotedlinktext'] = 'View More Courses';
$string['settingpromotedlink'] = $CFG->wwwroot.'/course/index.php?categoryid=1';
$string['settingfeaturedslider'] = 'Featured Courses';

$string['tagscoursestitle'] = 'Tagged courses recommended for you';
$string['settingcoursestitle'] = 'Promoted courses';
$string['mycoursestitle'] = 'My courses';
$string['promotedcourseslinkdefault'] = 'View all courses';
