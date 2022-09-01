<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AuthController';
$route['Dashboard'] = 'AuthController/Dashboard';
$route['Account-Settings'] = 'PageController/index';
$route['product_view'] = 'Product/index';

$route['translate_uri_dashes'] = FALSE;


