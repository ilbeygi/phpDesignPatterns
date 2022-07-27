<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../Contract/PaymentInterface.php';

class Behpardakht implements PaymentInterface
{
    /**
     * Behpardakht Pay method
     * 
     * @param float $price
     * @return void
     */
    public function pay(float $price): void
    {
        // pay with Behpardakht

        echo "Behpardakht Payment successful. Amount : $price" . PHP_EOL;
    }
}