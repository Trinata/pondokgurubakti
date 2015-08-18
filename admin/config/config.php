<?php

define ('APP_CONTROLLER', APPPATH.'controller/');
define ('APP_VIEW', APPPATH.'view/');
define ('APP_MODELS', APPPATH.'model/');

/* Konfigurasi APP */

$CONFIG['admin']['app_server'] = TRUE;
$CONFIG['admin']['app_status'] = 'Development';
$CONFIG['admin']['app_debug'] = TRUE;
$CONFIG['admin']['app_underdevelopment'] = FAlSE;
$CONFIG['admin']['php_ext'] = '.php';
$CONFIG['admin']['html_ext'] = '.html';
$CONFIG['admin']['default_view'] = 'home';
$CONFIG['admin']['login'] = 'login';
$CONFIG['admin']['admin'] = false;
$CONFIG['admin']['salt'] = "c0d3k1r-v1.0";
$CONFIG['admin']['hostname'] = "10.10.200.115";

$CONFIG['admin']['base_url'] = 'http://localhost/pondokgurubakti/admin/';
$CONFIG['admin']['root_path'] = $_SERVER['DOCUMENT_ROOT'].'/pondokgurubakti/admin/';

$CONFIG['admin']['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/pondokgurubakti/public_assets/';
$CONFIG['admin']['max_filesize'] = 2097152;
$CONFIG['admin']['upload_path_temporary'] = "/home/";
$CONFIG['admin']['zip_foldername'] = "PUT_YOUR_ZIP_HERE";

$CONFIG['admin']['css'] = APPPATH.'css/';
$CONFIG['admin']['images'] = APPPATH.'images/';
$CONFIG['admin']['js'] = APPPATH.'js/';

$CONFIG['admin']['zip_ext'] = array('application/zip', 'application/x-zip', 'application/x-zip-compressed',  'application/octet-stream', 'application/x-compress', 'application/x-compressed', 'multipart/x-zip');
$CONFIG['admin']['image'] = array('image/jpeg', 'image/pjpeg','image/png');

$CONFIG['admin']['unzip'] = 'zipArchive'; //s_linux or zipArchive

$basedomain = $CONFIG['admin']['base_url'];
$rootpath = $CONFIG['admin']['root_path'];

$CONFIG['uri']['short'] = false;
$CONFIG['uri']['friendly'] = true;
$CONFIG['uri']['extension'] = ".html";

$CONFIG['email']['EMAIL_FROM_DEFAULT'] = "";
$CONFIG['email']['EMAIL_SMTP_HOST'] = "mail.gmail.com";
$CONFIG['email']['EMAIL_SMTP_USER'] = "";
$CONFIG['email']['EMAIL_SMTP_PASSWORD'] = "";

$dbConfig[0]['host'] = 'localhost';
$dbConfig[0]['user'] = 'root';
$dbConfig[0]['pass'] = 'jonedganteng';
$dbConfig[0]['name'] = 'db_elearningbsn';
$dbConfig[0]['server'] = 'mysql';

?>
