<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AuthController';
$route['Dashboard'] = 'AuthController/Dashboard';

// USER SETTING
$route['Authors-List'] = 'AccountController/Author';
$route['Author-Profile/(:num)'] = 'AccountController/viewprofile/$1';
$route['Users-List'] = 'AccountController/User';
$route['Personal-Information'] = 'AccountController/index_Information';
$route['Admin-Setting'] = 'AccountController/index_Admin';
$route['WaitList-Users'] = 'AccountController/WaitList';

// REPORTS
$route['Report'] = 'ReportController/index';
$route['Book-Chapter/(:num)'] = 'BookController/edit/$1';
$route['Book/(:num)'] = 'BookController/listbook/$1';
// $route['Book/(:num)'] = 'BookController/editt/$1';
$route['Book-Chapter/update(:num)']['put'] = 'BookController/update';
// $route['Book/editt(:num)']['get'] = 'BookController/editt';

// SETTING
$route['Admin-Account-Archieved'] = 'SettingController/historyAdmin';
$route['Authors-Users-Archieved'] = 'SettingController/historyAuthors';
$route['Gift-History'] = 'SettingController/gift';

$route['Personal-Information'] = 'PageController/index_Information';
$route['Admin-Setting'] = 'PageController/index_Admin';

//TRANSACTION
$route['Transaction'] = 'TransactionController/transaction';

//EMAILS
$route['Emails'] = 'EmailController/Emails';

$route['translate_uri_dashes'] = FALSE;


