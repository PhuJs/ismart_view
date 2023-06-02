<?php 
// Xây dựng các hằng lưu trữ đường dẫn các thư mục hệ thống

// ======= APP PATH ===========
$app_path = dirname(__FILE__);
define("APPPATH", $app_path);


// ======= CONFIG PATH =======
$config_folder = "config";
define("CONFIGPATH", APPPATH.DIRECTORY_SEPARATOR.$config_path);

// ======= CORE PATH  =======
$core_folder = "core";
define("COREPATH", APPPATH.DIRECTORY_SEPARATOR.$core_path);

// ======= HELPER PATH =======
$helper_folder = "helper";
define("HELPERPATH", APPPATH.DIRECTORY_SEPARATOR.$helper_path);

// ======== LAYOUT PATH ========
$layout_folder = "layout";
define("LAYOUTPATH", APPPATH.DIRECTORY_SEPARATOR.$layout_path);

// ======== LIB PATH =====
$lib_folder = "libraries";
define("LIBPATH", APPPATH.DIRECTORY_SEPARATOR.$lib_path);

// ======== MODULES PATH ========
$module_folder = "modules";
define("MODULESPATH", APPPATH.DIRECTORY_SEPARATOR.$module_path);

require CONFIGPATH.DIRECTORY_SEPARATOR."appload.php";