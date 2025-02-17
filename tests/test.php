<?php
require_once __DIR__ . '/../models/customer.php';
require_once "functions.php";
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='../css/style.css'>";
echo "</head>";
echo "<body>";


echo 'hello world';
echo '<hr>';

$customer = new customer(1, "1", "John Doe", "john@example.com", "asdf", "Jazz");
$customer -> displayCustomer();
echo '<hr>';

echo showFooter();
echo renderPageEnd();
?>