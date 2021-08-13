<?php

require_once('../../config.php');
require_once('training_form.php');

global $DB;

// Check for all required variables.
$courseid = required_param('courseid', PARAM_INT);


if (!$course = $DB->get_record('course', array('id' => $courseid))) {
    print_error('invalidcourse', 'block_training', $courseid);
}

require_login($course);

$training = new training_form();

$training->display();
?>