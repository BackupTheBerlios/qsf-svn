<?php
$set = array();

if (!defined('QUICKSILVERFORUMS')) {
       header('HTTP/1.0 403 Forbidden');
       die;
}

$set['db_host'] = 'localhost';
$set['db_name'] = 'qsf';
$set['db_pass'] = 'qsf';
$set['db_port'] = '5432';
$set['db_socket'] = '';
$set['db_user'] = 'qsf';
$set['dbtype'] = 'pgsql';
$set['prefix'] = 'qsf_';
$set['installed'] = '1';
?>