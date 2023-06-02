<?php
defined('APPPATH') or exit("Không được truy cập phần này");

// Tổng hợp các phương thức điều hướng
function get_module()
{
    global $config;
    $modules = isset($_GET['mod']) ? $_GET['mod'] : $config['defaultt_module'];
    return $modules;
}

// get Controller name
function get_controller()
{
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller'];
}

// get Action 
function get_action()
{
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
}


// Viết hàm xử lí gọi file 
function load($type, $name)
{
    if ($type == 'helper') {
        $path = HELPERPATH . DIRECTORY_SEPARATOR . $name . "php";
    } elseif ($type == 'lib') {
        $path = HELPERPATH . DIRECTORY_SEPARATOR . $name . "php";
    }
    if (file_exists($path)) {
        require $path;
    } else {
        echo $tyle . ":" . $name . "không tồn tại trên hệ thống";
    }
}

// ----------------------
function call_function($list_function = array())
{
    if (is_array($list_function)) {
        if (!empty($list_function)) {
            foreach ($list_function as $f) {
                if (function_exists($f())) {
                    $f();
                }
            }
        }
    }
}
// ----------------
function get_header($name = '')
{
    if (!empty($name)) {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "header-" . $name . ".php";
    } else {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "header.php";
    }

    if (file_exists($path)) {
        require $path;
    } else {
        echo $path . " không tồn tại";
    }
}

function get_footer($name = '')
{
    if (!empty($name)) {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "footer-" . $name . ".php";
    } else {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "footer.php";
    }

    if (file_exists($path)) {
        require $path;
    } else {
        echo $path . " không tồn tại";
    }
}

function get_sidebar($name = '')
{
    if (!empty($name)) {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "sidebar-" . $name . ".php";
    } else {
        $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "sidebar.php";
    }

    if (file_exists($path)) {
        require $path;
    } else {
        echo $path . " không tồn tại";
    }
}


function load_model($name)
{
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . $name . "Model.php";
    if (file_exists($path)) {
        require $path;
    } else {
        echo $path . " không tồn tại";
    }
}

function load_view($name, $data = array())
{
    global $data_result;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . $name . "View.php";
    $data_result = $data;
    if (file_exists($path)) {
        if (!empty($data_result)) {
            foreach ($data_result as $key => $value) {
                $$key = $value;
            }
        }
        require $path;
    } else {
        echo $path . " không tồn tại";
    }
}

function get_template_part($name)
{
    global $data;
    if (empty($name))
        return FALSE;
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . "template-" . $name . ".php";
    if (file_exists($path)) {
        foreach ($data as $key => $item) {
            $$key = $item;
        }
        require $path;
    } else {
        echo "Không tìm thấy " . $path;
    }
}
