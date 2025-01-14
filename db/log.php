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
 * LTI web service endpoints
 *
 * @package    mod_orcalti
 * @category   log
 * @copyright  Copyright (c) 2011 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Chris Scribner
 */

defined('MOODLE_INTERNAL') || die();

$logs = array(
    array('module' => 'orcalti', 'action' => 'view', 'mtable' => 'orcalti', 'field' => 'name'),
    array('module' => 'orcalti', 'action' => 'launch', 'mtable' => 'orcalti', 'field' => 'name'),
    array('module' => 'orcalti', 'action' => 'view all', 'mtable' => 'orcalti', 'field' => 'name')
);