<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Exchange/BinanceExchange.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Contract/BinanceOrderInterface.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Proxy/BinanceProxy.php';

function client(BinanceOrderInterface $binance, string $orderId)
{
    return $binance->fetchOrders($orderId);
}

$binanceService = new BinanceExchange;
client($binanceService, 'orderId');

echo PHP_EOL;

$proxy = new BinanceProxy($binanceService);
client($proxy, 'orderId');
client($proxy, 'orderId');
client($proxy, 'orderId');
