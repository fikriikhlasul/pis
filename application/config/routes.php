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


/*  routes adalah untuk mengalihkan url ke controller dan method(function) tujuan
contoh 1 = $route['admin/data-anggota-aktif'] = 'admin/datauser';
dibaca :  alihkan jika mengakses url admin/data-anggota-aktif ke controller 'admin' dengan fungsi 'datauser'

alasan penggunaan routes ini adalah agar lebih readable saat pengaksesan url,lebih dipahami admin/user yang mengoperasikan sistem nantinya
*/
$route['default_controller'] = 'landing';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;
$route['blog'] = 'landing/blog';
$route['admin'] = 'admin/dashboard';
$route['anggota/dashboard'] = 'user/anggota';
$route['alumni/dashboard'] = 'user/alumni';
$route['dosen/dashboard'] = 'user/dosen';
$route['anggota/profile'] = 'user/profileanggota';
$route['alumni/profile'] = 'user/profilealumni';
$route['dosen/profile'] = 'user/profiledosen';

$route['anggota/changepassword'] = 'user/changepassword';
$route['alumni/changepassword'] = 'user/changepassword';
$route['dosen/changepassword'] = 'user/changepassworddosen';

$route['anggota/removepicture'] = 'user/removepicture';
$route['alumni/removepicture'] = 'user/removepicture';
$route['dosen/removepicture'] = 'user/removepicture';



$route['forgot-password'] = 'auth/forgotpassword';
$route['change-password'] = 'auth/changepassword';
//route data semua role//
$route['admin/data-seluruh-anggota'] = 'admin/dataseluruhanggota';
$route['admin/data-anggota-aktif'] = 'admin/dataanggotaaktif';
$route['admin/data-alumni'] = 'admin/dataalumni';
$route['admin/data-dosen'] = 'admin/datadosen';
$route['admin/data-anggota-belum-aktif'] = 'admin/dataanggotabelumaktif';
$route['admin/verifikasi-anggota-belum-aktif/(:any)'] = 'admin/verifikasi/$1';
$route['admin/hapus-anggota-belum-aktif/(:any)'] = 'admin/hapusanggotabelumaktif/$1';
//route kelola role anggota//
$route['admin/hapus-anggota/(:any)'] = 'admin/hapusanggota/$1';
$route['admin/ubah-anggota/(:any)'] = 'admin/editanggota/$1';
$route['admin/detail-anggota/(:any)'] = 'admin/detailanggota/$1';
$route['admin/tambah-anggota/(:any)'] = 'admin/tambahanggota/$1';
//route kelola role alumni//
$route['admin/hapus-alumni/(:any)'] = 'admin/hapusalumni/$1';
$route['admin/ubah-alumni/(:any)'] = 'admin/editalumni/$1';
$route['admin/detail-alumni/(:any)'] = 'admin/detailalumni/$1';
// $route['admin/tambah-alumni'] = 'admin/tambahalumni';
//route kelola role dosen//
$route['admin/hapus-dosen/(:any)'] = 'admin/hapusdosen/$1';
$route['admin/ubah-dosen/(:any)'] = 'admin/editdosen/$1';
$route['admin/detail-dosen/(:any)'] = 'admin/detaildosen/$1';
$route['admin/tambah-dosen'] = 'admin/tambahdosen';



