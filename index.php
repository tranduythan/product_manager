<?php
require ('test.php');
$customer = new Customer('john','doe',54654,'sdsad@gmail.com');
$customer->firstname = 'than';
echo $customer->getFullName();;
?>