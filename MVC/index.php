<?php
    include_once 'config/config.php';
    include_once 'model/note.php';
    if(!isset($_GET['action'])){
        $_GET['action'] = DEFAULT_ACTION;
    }

    $action = $_GET['action'];
    //echo $action;

    $data = array();
    $data = $controlador->$action();


    /* load views */
    require_once 'view/templates/header.php';
    require_once 'view/'. $controlador->view . '.php';
    require_once 'view/templates/footer.php';
?>