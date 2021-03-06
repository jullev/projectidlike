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
// $route['manageadmincheck'] = 'C_ManagementAdmin/uniqueDataCheck';
$route['search/(:any)'] = 'C_Iklan/searchIklan/$1';
$route['search'] = 'C_Iklan/searchIklan/';
//$route['insertIklan'] = 'C_TambahIklan/prosesTambah';
$route['adminlist'] = 'C_Overview/adminlist';
$route['tambahadmin'] = 'C_Overview/tambahadmin';
$route['tambahuser'] = 'C_Overview/tambahuser';
$route['deleteuser'] = 'C_Register/delete';
$route['deleteadmin'] = 'C_Register/deleteAdmin';
$route['deletekategori'] = 'C_SetKategori/delete';
$route['admin/detailuser'] = 'C_Overview/detailuser';
// $route['admintambah'] = 'C_ManagementAdmin/TambahAdmin';
$route['updateadminproses'] = 'C_ManagementAdmin/updateAdmin';
$route['kategoriadd'] = 'C_SetKategori/prosestambahkategori';
$route['kategoriedit'] = 'C_Overview/editKategori';
$route['kategoriupdate'] = 'C_SetKategori/UpdateKategori';
$route['wilayahset'] = 'C_Overview/setWilayah';
// $route['updateadmin'] = 'C_Overview/updateadmin';
$route['editadmin/(:any)'] = 'C_Overview/editAdmin/$1';
$route['update-admin'] = 'C_Overview/UpdateAdminTest';
$route['updateadmin'] = 'C_ManagementAdmin/updateAdmin';
$route['login'] = 'C_Register/loginData';
$route['logout'] = 'C_Register/logout';
$route['lupa-password'] = 'user/Overview/lupapassword';
$route['userlist'] = 'C_Overview/userlist';
$route['searchtest'] = 'C_Overview/searchtest';
$route['detail/(:any)'] = "user/Overview/detail_iklan/$1";
$route['laporkerjaan/(:any)'] = "C_Iklan/reportkerjaan/$1";
$route['setkategori'] = "C_Overview/setKategori";
$route['tambahkategori'] = "C_Overview/tambahKategori";
$route['kategoriedit'] = "C_Overview/editKategori";
//user has login
$route['dashboard'] = 'user/Overview/dashboard';
$route['iklansaya'] = 'user/Overview/iklansaya';
$route['hitproject'] = 'user/Overview/hitproject';
$route['update-profile'] = 'C_ManagementUser/updateProfile';
$route['update-password'] = 'C_ManagementUser/updatePassword';
$route['menunggu-persetujuan'] = 'user/Overview/menunggupersetujuan';
$route['verifikasiemail'] = 'user/Overview/verifikasiemail';
$route['lupa-password-status'] = 'user/Overview/lupapassword2';
$route['forgot'] = 'C_Register/forgot';
//iklan
$route['tambahiklan'] = 'C_Iklan/tambahIklan';
$route['simpaniklan'] = 'C_Iklan/simpanIklan';
$route['reportkerjaan'] = 'C_Iklan/reportIklan';
$route['editiklan'] = 'user/Overview/editiklan';
$route['iklanbaru'] = 'C_Iklan/index_pengajuan';
$route['iklandisetujui'] = 'C_Iklan/index_pengajuan_diterima';
$route['semuaiklan'] = 'C_Iklan/tampil';
$route['iklanselesai'] = 'C_Iklan/tampiliklanselesai';
$route['iklanditolak'] = 'C_Iklan/tampilIklanTolak';
$route['deleteiklan'] = 'C_Iklan/delete';
$route['starpoint'] = 'C_Iklan/inputReview';
$route['editiklan/(:any)'] = 'C_Iklan/editIklan/$1';
$route['reportiklanselesai/(:any)'] = 'C_Iklan/detaillaporan/$1';
$route['terimaiklan/(:any)'] = 'C_Iklan/terimaiklan/$1';
$route['hit/(:any)'] = 'C_Iklan/detailhit/$1';
$route['hitiklan/(:any)'] = 'user/Overview/hit_iklan/$1';
//terima iklan $1 id hitter $2
$route['terimahitter/(:any)'] = 'C_Iklan/terimahitter/$1';
$route['tolakhit/(:any)'] = 'C_Iklan/tolakhitter/$1';
