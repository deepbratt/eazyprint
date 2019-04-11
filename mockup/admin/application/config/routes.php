<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'admin_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['edit_dealer/(:num)'] = "edit_dealer";
$route['edit_vendors/(:num)'] = "edit_vendors";
$route['edit_customers/(:num)'] = "edit_customers";
$route['edit_eazycrew/(:num)'] = "edit_eazycrew";
$route['edit_tshirt/(:num)'] = "edit_tshirt";
$route['edit_mobile_case/(:num)'] = "edit_mobile_case";
$route['edit_mug/(:num)'] = "edit_mug";
$route['edit_tiles/(:num)'] = "edit_tiles";
$route['edit_product/(:num)'] = "edit_product";
$route['add_order_summery/(:num)'] = "add_order_summery";
$route['listing_pillow/(:num)'] = "listing_pillow";
$route['edit_plate/(:num)'] = "edit_plate";
$route['edit_plate/update_raw_plate/(:num)'] = "edit_plate/update_raw_plate";
$route['edit_pillow/(:num)'] = "edit_pillow";

