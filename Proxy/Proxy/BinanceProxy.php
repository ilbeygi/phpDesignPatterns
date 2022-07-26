<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../Exchange/BinanceExchange.php';

class BinanceProxy implements BinanceOrderInterface
{
    private array $cache = [];
    public array $log = [];

    public function __construct(private BinanceOrderInterface $binance) {
        //
    }

    /**
     * Get all orders from Binance and save them on your own database
     * 
     * @param string $apiKey
     * @return array
     */
    public function fetchOrders(string $apiKey): array
    {
        if (! $this->checkAccess('fetchOrders')) {
            echo 'Check access failed.' . PHP_EOL;
            $this->log[] = 'Check access failed.';
            
            throw new \Exception("Error Processing Request", 1);
        }

        if (! isset($this->cache[$apiKey])) {
            $this->cache[$apiKey] = $this->binance->fetchOrders($apiKey);

            echo 'Request to binance and save to cache.' . PHP_EOL;
            $this->log[] = 'Request to binance and save to cache.';
        } else {
            echo 'Fetch from cache.' . PHP_EOL;
            $this->log[] = 'Fetch from cache.';
        }

        return $this->cache[$apiKey];
    }

    /**
     * cancel an order on exchange
     * 
     * @param string|int $orderId
     * @return bool
     */
    public function cancelOrder(string|int $orderId): bool
    {
        if (! $this->checkAccess('cancelOrder')) {
            $this->log[] = 'Check access failed.';
            
            throw new \Exception("Error Processing Request", 1);
        }

        $cancelOrder = $this->binance->cancelOrder($orderId);

        if ($cancelOrder) {
            $this->log[] = 'Cancel order OK.';
        } else {
            $this->log[] = 'Cancel order failed.';
        }

        return $cancelOrder;
    }

    /**
     * check access control
     * 
     * @param string $action
     * @return bool
     */
    private function checkAccess(string $action): bool
    {
        return true;
        return rand(1, 99) < 50 ? true : false;
    }
}