<?php
function renderPageBegin(){
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<link rel='stylesheet' href='../css/style.css'>";
    echo'<script src="https://kit.fontawesome.com/f374c3af1e.js" crossorigin="anonymous"></script>';
    echo "</head>";
    echo "<body>";
}

function renderPageEnd(){
    echo "</body>";
    echo "</html>";
}



function renderFooter() {
    echo '<footer  class = "footer" style="display: flex; height: 350px; position: fixed; bottom: 0; width: 100%;">';

    //Links
    echo '<div style="flex: 1;  padding: 10px; display: flex; flex-direction: column; justify-content: center;">';
    echo '<ul style="list-style: none; padding: 0; margin-bottom: 0;">';
    echo    '<ul><h2 style="margin-bottom: 25px;">runtime records</h2></ul>';
    echo    '<ul><span class="fa-solid fa-envelope"></span> info@runtime-records.com</ul>';
    echo    '<ul><span class="fa-solid fa-record-vinyl"></span> discogs.com/runtime-records</ul>';
    echo    '<ul><span class="fa-brands fa-facebook"></span> facebook.com/runtime-records</ul>';
    echo    '<ul><span class="fa-brands fa-twitter"></span> @RuntimeRecords</ul>';
    echo    '<ul><span class="fa-brands fa-instagram"></span> @RuntimeRecords</ul>';
    echo '</ul>';
    echo '</div>';

    //Middel
    echo '<div style="flex: 1;  padding: 10px; display: flex; flex-direction: column; justify-content: center;">';
    echo '<ul style="justify-content: flex-start">';
    echo    '<ul><h2 style="margin-bottom: 25px; justify-content: flex-start">info</h2></ul>';
    echo    '<ul><a href="https://www.w3schools.com/html/html_links.asp">About Us</a></ul>';
    echo    '<ul><a href="https://www.w3schools.com/html/html_links.asp">Privacy Policy</a></ul>';
    echo    '<ul><a href="https://www.w3schools.com/html/html_links.asp">Shipping</a></ul>';
    echo '</ul>';
    echo '</div>';

    //Rechts

    echo '<div style="flex: 1;  display: flex; justify-content: center; align-items: center;">';
    echo '<img src="../images/record-store-day.svg" alt=wit-icoon style="height: 100px; width: auto;">';
    echo '<img src="../images/disc-payoff-white.svg" alt=wit-icoon style="height: 110px; width: auto;">';
    echo '</div>';
    
    
    echo '</footer>';
}

function renderNavbar(){
    echo '<nav>';
    echo '<ul>';
    echo '<ul><a href="index.php">runtime records</a><ul>';
    echo '</ul>';
    echo '</nav>';

}

?>