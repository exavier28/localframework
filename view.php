<?php

/////////////////////////////////////////////////////////////////////////////
//                                                                         //
// NOTICE OF COPYRIGHT                                                     //
//                                                                         //
// Moodle - Calendar extension                                             //
//                                                                         //
// Copyright (C) 2003-2004  Greek School Network            www.sch.gr     //
//                                                                         //
// Designed by:                                                            //
//     Avgoustos Tsinakos (tsinakos@teikav.edu.gr)                         //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// Programming and development:                                            //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// For bugs, suggestions, etc contact:                                     //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// The current module was developed at the University of Macedonia         //
// (www.uom.gr) under the funding of the Greek School Network (www.sch.gr) //
// The aim of this project is to provide additional and improved           //
// functionality to the Asynchronous Distance Education service that the   //
// Greek School Network deploys.                                           //
//                                                                         //
// This program is free software; you can redistribute it and/or modify    //
// it under the terms of the GNU General Public License as published by    //
// the Free Software Foundation; either version 2 of the License, or       //
// (at your option) any later version.                                     //
//                                                                         //
// This program is distributed in the hope that it will be useful,         //
// but WITHOUT ANY WARRANTY; without even the implied warranty of          //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           //
// GNU General Public License for more details:                            //
//                                                                         //
//          http://www.gnu.org/copyleft/gpl.html                           //
//                                                                         //
/////////////////////////////////////////////////////////////////////////////

//  Display the calendar page.

require_once('../../config.php');
require_once($CFG->dirroot.'/course/lib.php');

//$courseid = optional_param('course', SITEID, PARAM_INT);
//$view = optional_param('view', 'upcoming', PARAM_ALPHA);


//require_course_login($course);
$title = 'Busca Dspace';
$pagetitle = 'Procura Dspace';
$tipoplugin = 'Módulo';
$url = new moodle_url('/localframework/view.php');

$PAGE->navbar->add(userdate($time, 'Módulo Campus Virtua Fiocruz'));
$PAGE->navbar->add(userdate($time, 'Busca Dspace'));

$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
$PAGE->set_title($title);
$PAGE->set_heading($COURSE->fullname);
$PAGE->set_button("<a href=''>Editar</a>");

echo $OUTPUT->header();
echo $OUTPUT->blocks('side-post', 'span3 desktop-first-column');

echo html_writer::start_tag('div', array('class'=>'heightcontainer'));
require_once($CFG->dirroot.'/local/localframework/menu.php');

echo $OUTPUT->heading('AAAAAAA', $level = 1, $classes = 'main', $id = null);
//echo $OUTPUT->heading_with_help('asdfasdfas', 4, $component = 'local_localframework', $icon = '', $iconalt = '');
echo "teste";
echo html_writer::end_tag('div');

echo $OUTPUT->footer();