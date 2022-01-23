<?php

require_once __DIR__."/classes/Product.php";
require_once __DIR__."/classes/UserPremium.php";
require_once __DIR__."/classes/CreditCard.php";

// prodotto
$new_product = new Product("smalto", 5);
$new_product->setBrand("kiko");

$new_product->country = 'Italy';
$new_product->city = 'Rome';

// utente
$new_user = new User('Giuseppe','Verdi');
$new_user->setDiscount(40);

$new_user->setCreditCard(987654321098, 456, 6, 2023);

// utente premium
$new_userPremium = new UserPremium('Ugo', 'de Ughi', 3);
$new_userPremium->setDiscount(30);
echo $new_userPremium->getDiscount();

// carta di credito
try {
  $cc = new CreditCard(123456789123, 123, 3, 2022);
} catch (Exception $e) {
  echo $e->getMessage();
}

var_dump($new_product);
var_dump($new_user);
var_dump($new_userPremium);
var_dump($cc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>