<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AuthController';
$route['Dashboard'] = 'AuthController/Dashboard';


// USER SETTING
$route['Authors-Users'] = 'PageController/index';
$route['Personal-Information'] = 'PageController/index_Information';
$route['Admin-Setting'] = 'PageController/index_Admin';


// REPORTS
$route['List-Book'] = 'BookController/index';
$route['Book/(:num)'] = 'BookController/edit/$1';
$route['Book/update(:num)']['put'] = 'BookController/update';



// SETTING
$route['Admin-Account-Archieved'] = 'SettingController/historyAdmin';
$route['Authors-Users-Archieved'] = 'SettingController/historyAuthors';
$route['Personal-Information'] = 'PageController/index_Information';
$route['Admin-Setting'] = 'PageController/index_Admin';

//TRANSACTION
$route['Transaction'] = 'TransactionController/transaction';








// $route['project'] = "project/index";
// $route['project/create'] = "project/create";
// $route['project/store']['post'] = "project/store";
// $route['project/edit/(:num)'] = "project/edit/$1";
// $route['project/update/(:num)']['put'] = "project/update/$1";
// $route['project/delete/(:num)']['delete'] = "project/delete/$1";






$route['translate_uri_dashes'] = FALSE;


