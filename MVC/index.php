<?php
    
    include_once 'controller/note.php';
    include_once 'model/note.php';

    $action = $_GET['action'] ?? DEFAULT_ACTION;


    $dataToView = [];
    $dataToView = new NoteController(
        $action,
        '',
        new NoteTabla()
    );

    $dataToView->setVista($action);

    /* load views */
    require_once 'view/templates/header.php';
    require_once 'view/'. $dataToView->getVista().'.php';
    require_once 'view/templates/footer.php';

?>