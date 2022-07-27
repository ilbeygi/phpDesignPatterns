<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../Contract/PaymentInterface.php';

class Zarinpal implements PaymentInterface
{
    /**
     * Zarinpal Pay method
     * 
     * @param float $price
     * @return void
     */
    public function pay(float $price): void
    {
        // pay with zarinpal

        echo "Zarinpal Payment successful. Amount : $price" . PHP_EOL;
    }
}