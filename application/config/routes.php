<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AuthController';
$route['Dashboard'] = 'AuthController/Dashboard';

// USER SETTING
$route['Authors-Users'] = 'UserSettingController/index';
$route['Personal-Information'] = 'UserSettingController/index_Information';
$route['Admin-Setting'] = 'UserSettingController/index_Admin';

// REPORTS
$route['Report'] = 'ReportController/index';
$route['Book/(:num)'] = 'BookController/edit/$1';
// $route['Book/(:num)'] = 'BookController/chapterview/$1';
$route['Book/update(:num)']['put'] = 'BookController/update';

// SETTING
$route['Admin-Account-Archieved'] = 'SettingController/historyAdmin';
$route['Authors-Users-Archieved'] = 'SettingController/historyAuthors';
$route['Personal-Information'] = 'PageController/index_Information';
$route['Admin-Setting'] = 'PageController/index_Admin';

//TRANSACTION
$route['Transaction'] = 'TransactionController/transaction';

$route['translate_uri_dashes'] = FALSE;


