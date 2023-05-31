<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Logout']                        = 'Auth/Logout';

// route admin
$route['admin/dashboard']               = 'Admin/Dashboard';
$route['manage_user']                   = 'Admin/Manage_user';
$route['admin/pengumuman']              = 'Admin/Pengumuman';
$route['admin/setting']                 = 'Admin/Setting';
$route['detailUser/(:num)']             = 'Admin/Seleksi/Detail/$1';
$route['hasil_seleksi_terima']          = 'Admin/Seleksi/Hasil_Seleksi_terima';
$route['hasil_seleksi_tolak']           = 'Admin/Seleksi/Hasil_Seleksi_Tolak';
$route['auth']                          = 'Auth';
$route['auth/login']                    = 'Auth/login';
$route['admin/profile']                 = 'Admin/Profile';
$route['admin/logout']                  = 'Auth/Logout';
$route['umum']                          = 'Admin/Setting/umum';
$route['website']                       = 'Admin/Setting/Website';
$route['pembayaran']                    = 'Admin/Pembayaran/tambahPembayaran';
$route['editPembayaran']                = 'Admin/Pembayaran/EditPembayaran';
$route['HapusPembayaran']               = 'Admin/Pembayaran/DeletePembayaran';
$route['pencarian']                     = 'Admin/Pengumuman/Searching';
$route['admin/postest']                 = "Admin/Postest";

// sidebar
$route['pendaftaran']                   = 'Admin/Pendaftaran';
$route['seleksi']                       = 'Admin/Seleksi';

// register

$route['register']                      = 'Auth/RegisterView';
$route['registerUser']                  = 'Auth/RegisterUser';
$route['updateStatus/(:num)']           = 'Admin/Manage_user/StatusUpdate/$1';

// route user
$route['user/dashboard']                = 'User/Dashboard';
$route['user/pendaftaran']              = 'User/Pendaftaran';
$route['user/DataMahasiswa']            = 'User/Pendaftaran/DataMahasiswa';
$route['user/daftar']                   = 'User/Pendaftaran/tambahData';
$route['user/pengumuman']               = 'User/Pengumuman';
$route['user/pembayaran']               = 'User/Pembayaran';
$route['user/token']                    = 'User/Pembayaran/token';
$route['user/finish']                   = 'User/Pembayaran/finish';
$route['user/DataOrangtua']             = 'User/Pendaftaran/DataOrangtua';
$route['user/DataPendidikan']            = 'User/Pendaftaran/DataPendidikan';
$route['user/BerkasWajib']              = 'User/Pendaftaran/BerkasWajib';
$route['user/PenerimaBeasiswa']         = 'User/Pendaftaran/PenerimaBeasiswa';

//pembayaran
$route['snap']                          = 'Pembayaran/Snap';
$route['snap/token']                    = 'Pembayaran/Snap/token';
$route['snap/finish']                   = 'Pembayaran/Snap/finish';
