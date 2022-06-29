<?php
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegistredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';

$food = new Food('Croccantini', 10.20, 10, 'gatto', '2022-10-10');


$user = new User('Samuele', 'Madrigali', 'samuele.madrigali@gmail.com');
$registred_user = new RegistredUser('Samantha', 'Madrigali', 'samantha.madrigali@gmail.com');

try {
    $visa = new CreditCard('4000 4000 4000 4000', '2022-10-10', 'visa', 'Samuele', 'Madrigali', 123);
    $user->setCreditCard($visa);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $amex = new CreditCard('1111 1111 1111 1111', '2022-01-10', 'amex', 'Samuele', 'Madrigali', 123);
    $registred_user->setCreditCard($amex);
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($user, $registred_user);