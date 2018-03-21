<?php

if(!isset($_REQUEST['action'])){

    $_REQUEST['action'] = 'presentation';
}

$action = $_REQUEST['action'];

switch($action){

    case 'presentation':{

        include("vues/v_presentation.php");
        break;
    }

    case 'locaux':{

        include("vues/v_locaux.php");
        break;
    }

    case 'telecommunications':{

        include("vues/v_telecommunications.php");
        break;
    }

    case 'communications':{

        $lesImpressions = $pdo->getImpressions();
        include("vues/v_communications.php");
        break;
    }

    case 'modalites':{

        include ("vues/v_modalitesAcces.php");
        break;
    }

    case 'serviceInfo':{

        include ("vues/v_serviceInformatique.php");
        break;
    }

}
?>