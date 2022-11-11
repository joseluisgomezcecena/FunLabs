<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

//posts Admin
$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts/delete/(:any)'] = 'posts/delete/$1';
$route['posts/edit/(:any)'] = 'posts/edit/$1';
$route['posts'] = 'posts/index';

//posts Public
//$route['posts'] = 'posts/main';
$route['posts/read/(:any)'] = 'posts/read/$1';
$route['post/(:any)'] = 'pages/post/$1'; //read single post


//category
$route['categories/create'] = 'categories/create';
$route['categories'] = 'categories/index';
$route['categories/posts/(:any)'] = 'categories/posts/$1';


//users
$route['users/register'] = 'users/register';
$route['users/login'] = 'users/login';
$route['users/profile'] = 'users/profile';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;