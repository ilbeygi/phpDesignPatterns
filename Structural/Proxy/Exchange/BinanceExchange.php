<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../Contract/BinanceOrderInterface.php';

class BinanceExchange implements BinanceOrderInterface
{
    /**
     * Get all orders from Binance and save them on your own database
     * 
     * @param string $apiKey
     * @return array
     */
    public function fetchOrders(string $apiKey): array
    {
        // fetch from binance api
        echo "fetch from binance api" . PHP_EOL;

        return [
            [
                'orderId' => '2as1d5sad',
                'amount' => 2.5,
                'symbol' => 'BTCUSDT'
            ]
        ];
    }

    /**
     * cancel an order on exchange
     * 
     * @param string|int $orderId
     * @return bool
     */
    public function cancelOrder(string|int $orderId): bool
    {
        // cancel from binance true
        return rand(1, 99) < 50 ? true : false;
    }
}
