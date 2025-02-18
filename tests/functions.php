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



function renderFooter() {
    echo '<footer style="display: flex; height: 150px;">';

    //Links
    echo '
    <div style="flex: 1; background-color: red;">
    <h3>Runtime Records</h3>
    <ul>
    <ul>info@runtime-records.com</ul>
    <ul>discogs.com/runtime-records</ul>
    <ul>facebook.com/runtime-records</ul>
    <ul>@RuntimeRecords</ul>
    <ul>@RuntimeRecords</ul>
    </ul>
    </div>';

    //Middel
    echo '
    <div style="flex: 1; background-color: green;">
    <h3>info</h3>
    <ul>
        <ul><a href="https://www.w3schools.com/html/html_links.asp">About Us</a></ul>
        <ul><a href="https://www.w3schools.com/html/html_links.asp">Privacy Policy</a></ul>
        <ul><a href="https://www.w3schools.com/html/html_links.asp">Shipping</a></ul>
    </ul>
    </div>';

    //Rechts
    echo '    <div style="flex: 1; background-color: black; display: flex; justify-content: flex-end;">
    <img src="../images/record-store-day.svg" alt=wit-icoon style="height: 150px; width: auto;">
    <img src="../images/disc-payoff-white.svg" alt=wit-icoon style="height: 150px; width: auto;">
    </div>';
    
    
    echo '</footer>';
}



?>