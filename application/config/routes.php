<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['default_controller'] = 'Home/view';
// $route['(:any)'] = 'Home/view/$1';
$route['default_controller'] = 'Home/view';
$route['home'] = 'Home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['services'] = 'home/services';

$route['cotizacion'] = 'home/cotizacion';

$route['nosotros'] = 'home/nosotros';

$route['contacto'] = 'home/contacto';

$route['service-details/(:num)'] = 'home/servicesDetails';

$route['admin'] = 'home/admin/login-admin';