<?php
// Windows
define('LOCALE_NL', 'nld_nld');
define('LOCALE_EN', 'us_us');
// Unix
//define('LOCALE_NL', 'nl_NL.utf8');
//define('LOCALE_EN', 'en_US.utf8');

// OSX
//define('LOCALE_NL', 'nl_NL.UTF-8');
//define('LOCALE_EN', 'en_US.UTF-8');

setlocale(LC_ALL, LOCALE_NL);
date_default_timezone_set('Europe/Amsterdam');

Configure::write('soundcloud_client_id', '');
Configure::write('soundcloud_client_secret', '');