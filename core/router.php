<?php 

$request_path = MODULESPATH.DIRECTORY_SEPARATOR.get_module().DIRECTORY_SEPARATOR."Controllers".DIRECTORY_SEPARATOR.get_controller()."Controller.php";

if(file_exists($path)){
    require $request_path;
}else{
    echo "Không tồn tại ".$request_path;
}

$action_name = get_action()."Action";

call_function(array('construct', $action));