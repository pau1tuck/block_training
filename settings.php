<?php
$settings->add(new admin_setting_heading(
    'headerconfig',
    get_string('headerconfig', 'block_training'),   // label
    get_string('descconfig', 'block_training')      // description
));

$settings->add(new admin_setting_configcheckbox(
    'training/Allow_HTML',
    get_string('labelallowhtml', 'block_training'), // label
    get_string('descallowhtml', 'block_training'),  // description
    '0'
));