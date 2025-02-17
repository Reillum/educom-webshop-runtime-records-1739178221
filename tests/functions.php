<?php
function renderPageBegin(){
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<link rel='stylesheet' href='C:\xampp\htdocs\educom-webshop-runtime-records-1739178221\css\style.css'>";
    echo "</head>";
    echo "<body>";
}

function renderPageEnd(){
    echo "</body>";
    echo "</html>";
}

function showNavbarLeft(){

}

function showNavbarRight(){

}

function showFooter() {
    $footer = "<footer class='footer'>";
    $footer .= "<ul>info@runtime-records.com</ul>".PHP_EOL;
    $footer .= "<ul>discogs.com/runtime-records</ul>" .PHP_EOL;
    $footer .= "<ul>facebook.com/runtime-records</ul>" .PHP_EOL;
    $footer .= "<ul>@RuntimeRecords</ul>" .PHP_EOL;
    $footer .= "<ul>@RuntimeRecords</ul>" .PHP_EOL;

    return $footer;
}



?>