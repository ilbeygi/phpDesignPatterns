<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '/PaymentMethods/Behpardakht.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '/PaymentMethods/Zarinpal.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PurchaseController.php';

$zarinpal = new Zarinpal;
$behpardakht = new Behpardakht;

$purchaseController = new PurchaseController($zarinpal);

$purchaseController->purchase(100.2);
$purchaseController->purchase(102.2);

echo PHP_EOL;

$purchaseController->setStrategy($behpardakht);

$purchaseController->purchase(1020.2);
$purchaseController->purchase(1011.2);

echo PHP_EOL;

$purchaseController->setStrategy($zarinpal);

$purchaseController->purchase(852.2);


