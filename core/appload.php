<?php 
defined('APPPATH') or exit('Không được quyền truy cập phần này');

// REQUEST FILE
require CONFIGPATH.DIRECTORY_SEPARATOR.'autoload.php';

require CONFIGPATH.DIRECTORY_SEPARATOR.'config.php';

require CONFIGPATH.DIRECTORY_SEPARATOR.'database.php';

require CONFIGPATH.DIRECTORY_SEPARATOR.'email.php';

require LIBPATH.DIRECTORY_SEPARATOR.'database.php';

require COREPATH.DIRECTORY_SEPARATOR.'base.php';

if(is_array($autoload)){
    foreach($autoload as $type => $item){
        if(!empty($item)){
            foreach($item as $value){
                load($type, $value);
            }
        }
    }
}

require COREPATH.DIRECTORY_SEPARATOR."router.php";