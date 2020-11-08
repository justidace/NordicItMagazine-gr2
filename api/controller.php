<?php
     
    var_dump($_REQUEST);
    switch ($_REQUEST['action']){
        case 'catalog':
            header("Access-Control-Allow-Origin: *");
            include_once('./goods.php');
            $goods = new goods;
            echo json_encode($goods -> getList());
        break;
        case 'card':
           
        break;
        case 'basket':
           include_once('./basket.php');
        break;
        case 'reg':
            include_once('./user.php');
            $user = new User;
            $user -> save(false);
        break;    
    }
    

