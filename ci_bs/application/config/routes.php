<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['home'] = 'home';
$route['login'] = 'home/login';
$route['signup'] = 'home/signup';
$route['profile'] = 'home/profile';
$route['writepost']='home/writepost';
$route['logout']='home/logout';
$route['edit/(:num)']='user/edit/$1';
$route['delete/(:num)']='user/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
