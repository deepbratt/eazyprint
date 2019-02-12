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
/* $route['admin_listing_category/(:num)'] = "admin_listing_category";
$route['admin_edit_crew/(:num)'] = "admin_edit_crew";
$route['admin_listing_brand/(:num)'] = "admin_listing_brand";
$route['admin_edit_brand/(:num)'] = "admin_edit_brand";
$route['admin_listing_sub_category/(:num)'] = "admin_listing_sub_category";
$route['admin_edit_sub_category/(:num)'] = "admin_edit_sub_category";
$route['admin_edit_design/(:num)'] = "admin_edit_design";
$route['admin_listing_product_material_type/(:num)'] = "admin_listing_product_material_type";
$route['admin_edit_product_material_type/(:num)'] = "admin_edit_product_material_type";
$route['admin_listing_product_shape/(:num)'] = "admin_listing_product_shape";
$route['admin_edit_product_shape/(:num)'] = "admin_edit_product_shape";
$route['admin_listing_product_size/(:num)'] = "admin_listing_product_size";
$route['admin_edit_product_size/(:num)'] = "admin_edit_product_size";
$route['admin_edit_dealer/(:num)'] = "admin_edit_dealer";
$route['admin_edit_creator/(:num)'] = "admin_edit_creator";
$route['admin_listing_product_color/(:num)'] = "admin_listing_product_color";
$route['admin_edit_product_color/(:num)'] = "admin_edit_product_color";
$route['admin_edit_product/(:num)'] = "admin_edit_product";
$route['admin_edit_final_product/(:num)'] = "admin_edit_final_product";
$route['admin_listing_crew/(:num)'] = "admin_listing_crew";
$route['admin_listing_mobile_case/(:num)'] = "admin_listing_mobile_case"; */