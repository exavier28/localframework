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
 * Analytics
 *
 * This module provides extensive analytics on a platform of choice
 * Currently support Google Analytics and Piwik
 *
 * @package    local_analytics
 * @copyright  David Bezemer <info@davidbezemer.nl>, www.davidbezemer.nl
 * @author     David Bezemer <info@davidbezemer.nl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
//require_once('../../config.php');

$enabled = get_config('local_localframework', 'enabled');



//function local_localframework_extends_settings_navigation($settingsnav, $context) {
//  global $CFG, $PAGE;
 
//$previewnode = $PAGE->navigation->add(get_string('preview'), new moodle_url('/a/link/if/you/want/one.php'), navigation_node::TYPE_CONTAINER);
//$thingnode = $previewnode->add(get_string('name of thing'), new moodle_url('/a/link/if/you/want/one.php'));
//$thingnode->make_active();

//}