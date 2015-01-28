<?php

global $databases;
$databases['default']['default'] = array(
  'driver' => $_SERVER['db_type'],
  'database' => $_SERVER['db_name'],
  'username' => $_SERVER['db_user'],
  'password' => $_SERVER['db_passwd'],
  'host' => $_SERVER['db_host'],
  'port' => $_SERVER['db_port'],
);
