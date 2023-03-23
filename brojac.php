<?php
function getBrojacPosjeta() {
    return file_get_contents("brojac_posjeta.txt");
}
  

function addBrojacPosjeta() {
    if(!isset($_SESSION['views'])) {
        $brojac_posjeta = getBrojacPosjeta() + 1;
        $_SESSION['views'] = "yes";
        file_put_contents("brojac_posjeta.txt", $brojac_posjeta);
    }
}

?>