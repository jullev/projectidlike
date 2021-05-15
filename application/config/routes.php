<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'C_Overview';
$route['user'] = 'user/Overview/index';
$route['register'] = 'user/Overview/register';
$route['registercheck'] = 'C_Register/uniqueDataCheck';
$route['manageadmincheck'] = 'C_ManagementAdmin/uniqueDataCheck';
$route['search'] = 'user/Overview/search';
//$route['insertIklan'] = 'C_TambahIklan/prosesTambah';
$route['adminlist'] = 'C_Overview/adminlist';
$route['tambahadmin'] = 'C_Overview/tambahadmin';
$route['tambahuser'] = 'C_Overview/tambahuser';
$route['deleteuser'] = 'C_Register/delete';
$route['admin/detailuser'] = 'C_Overview/detailuser';
$route['admintambah'] = 'C_ManagementAdmin/TambahAdmin';
//$route['updateadmin'] = 'C_Overview/updateDataAdmin';
$route['editadmin/(:any)'] = 'C_Overview/editAdmin/$1';
$route['login'] = 'C_Register/loginData';
$route['logout'] = 'C_Register/logout';
$route['userlist'] = 'C_Overview/userlist';
$route['searchtest'] = 'C_Overview/searchtest';
$route['detail/(:any)'] = "user/Overview/detail_iklan/$1";
//user has login
$route['dashboard'] = 'user/Overview/dashboard';
$route['iklansaya'] = 'user/Overview/iklansaya';
$route['hitproject'] = 'user/Overview/hitproject';
$route['menunggu-persetujuan'] = 'user/Overview/menunggupersetujuan';
//iklan
$route['tambahiklan'] = 'C_Iklan/tambahIklan';
$route['simpaniklan'] = 'C_Iklan/simpanIklan';
$route['iklanbaru'] = 'C_Iklan/index_pengajuan';
$route['iklandisetujui'] = 'C_Iklan/index_pengajuan_diterima';
$route['semuaiklan'] = 'C_Iklan/tampil';
$route['terimaiklan/(:any)'] = 'C_Iklan/terimaiklan/$1';
$route['hit/(:any)'] = 'C_Iklan/detailhit/$1';
$route['hitiklan/(:any)'] = 'user/Overview/hit_iklan/$1';
//terima iklan $1 id hitter $2
$route['terimahitter/(:any)'] = 'C_Iklan/terimahitter/$1';
$route['tolakhit/(:any)'] = 'C_Iklan/tolakhitter/$1';
