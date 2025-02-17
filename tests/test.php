<?php
require_once __DIR__ . '/../models/customer.php';

echo 'hello world';
echo '<hr>';

$customer = new customer(1, "1", "John Doe", "john@example.com", "asdf", "Jazz");
$customer -> displayCustomer();

?>