<?php
if(isset($_GET['page'])) {
    $page = $_GET['page'];

    switch($page) {
        case 'addVehicule':
            include dirname(__DIR__).'/controller/addVehiculeController.php';
            break;

        case 'home':

            break;


    }

} else {
    //Inclure home page
}