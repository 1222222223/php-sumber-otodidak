<?php

if(isset($_GET['page'])){

    $page = $_GET['page'];
    switch($page) {
        case 'input' :
            include 'view/input-data.php';
            break;

        case 'data' :
            include 'view/tampilan-data.php';
            break;
    }

} else {
    include 'view/tampil-data.php';
}

?>