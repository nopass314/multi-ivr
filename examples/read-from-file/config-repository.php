<?php if (isset($_GET['zd_echo'])) exit($_GET['zd_echo']); ?>
<?php

use MultiIvr\MultiIvr;

if (isset($_GET['zd_echo'])) {
    exit($_GET['zd_echo']);
}

require_once 'vendor/autoload.php';
$key = '5c837446d6ab41d582d5';
$secret = 'dd2716e0a51ae1e79343';
$ivrMenuConfig = 'your config';
MultiIvr::default()->handle($key, $secret, $ivrMenuConfig);
start default action=goto action-target=main

menu name=main playfile=file1
menu name=main button=1 action=redirect action-target=100
menu name=main button=2 action=redirect action-target=101
menu name=main button=3 action=redirect action-target=102
menu name=main default action=redirect action-target=103
