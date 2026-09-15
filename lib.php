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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Theme callbacks.
 *
 * @package   theme_duallearning
 * @copyright 2026 Hiroshi Ozeki
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Return the Dual Learning variables, Boost preset, and presentation layer.
 *
 * @param theme_config $theme Theme configuration.
 * @return string
 */
function theme_duallearning_get_main_scss_content($theme): string {
    global $CFG;

    $scss = file_get_contents($CFG->dirroot . '/theme/' . $theme->name . '/scss/pre.scss');
    $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $scss .= file_get_contents($CFG->dirroot . '/theme/' . $theme->name . '/scss/duallearning.scss');
    return $scss;
}
