<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {


// link color setting
$name = 'theme_rackspace_overlay/linkcolor';
$title = get_string('linkcolor','theme_rackspace_overlay');
$description = get_string('linkcolordesc', 'theme_rackspace_overlay');
$default = '#428ab5';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);


// Tag line setting
$name = 'theme_rackspace_overlay/headercolor';
$title = get_string('headercolor','theme_rackspace_overlay');
$description = get_string('headercolordesc', 'theme_rackspace_overlay');
$default = '#2a4c7b';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Foot note setting
$name = 'theme_rackspace_overlay/footertext';
$title = get_string('footertext','theme_rackspace_overlay');
$description = get_string('footertextdesc', 'theme_rackspace_overlay');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Custom CSS file
$name = 'theme_rackspace_overlay/customcss';
$title = get_string('customcss','theme_rackspace_overlay');
$description = get_string('customcssdesc', 'theme_rackspace_overlay');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}