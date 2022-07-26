<?php

interface BinanceOrderInterface
{
    /**
     * Fetch all orders from exchange and save on own database
     * 
     * @param string $apiKey
     * @return array
     */
    public function fetchOrders(string $apiKey): array;

    /**
     * cancel an order on exchange
     * 
     * @param string|int $orderId
     * @return bool
     */
    public function cancelOrder(string|int $orderId): bool;
}