<?php


/**
 * Settings for the tudarmstadt theme
 *
 * @package   theme_tudarmstadt
 * @copyright 2011 onwards Oliver Günther
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {


	// Setting for accent color of the tudarmstadt theme
	$name = 'theme_tudarmstadt/accentcolor';
	$title = get_string('accentcolor','theme_tudarmstadt');
	$description = get_string('accentcolordesc', 'theme_tudarmstadt');
	$choices = array(
		'#5D85c3' => '1a',
		'#009cDA' => '2a',
		'#50B695' => '3a',
		'#AFcc50' => '4a',
		'#DDDF48' => '5a',
		'#FFE05c' => '6a',
		'#F8BA3c' => '7a',
		'#EE7A34' => '8a',
		'#E9503E' => '9a',
		'#c9308E' => '10a',
		'#804597' => '11a',
		'#005AA9' => '1b',
		'#0083cc' => '2b',
		'#009D81' => '3b',
		'#99c000' => '4b',
		'#c9D400' => '5b',
		'#FDcA00' => '6b',
		'#F5A300' => '7b',
		'#Ec6500' => '8b',
		'#E6001A' => '9b',
		'#A60084' => '10b',
		'#721085' => '11b',
		'#004E8A' => '1c',
		'#00689D' => '2c',
		'#008877' => '3c',
		'#7FAB16' => '4c',
		'#B1BD00' => '5c',
		'#D7Ac00' => '6c',
		'#D28700' => '7c',
		'#cc4c03' => '8c',
		'#B90F22' => '9c',
		'#951169' => '10c',
		'#611c73' => '11c',
		'#243572' => '1d',
		'#004E73' => '2d',
		'#00715E' => '3d',
		'#6A8B22' => '4d',
		'#99A604' => '5d',
		'#AE8E00' => '6d',
		'#BE6F00' => '7d',
		'#961c26' => '8d',
		'#961c26' => '9d',
		'#732054' => '10d',
		'#4c226A' => '11d'
	);
	$setting = new admin_setting_configselect($name, $title, $description, '#F5A300', $choices);
	$settings->add($setting);
}
