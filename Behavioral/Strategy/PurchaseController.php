<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Contract/PaymentInterface.php';

class PurchaseController
{
    public PaymentInterface $paymentMethod;

    public function __construct(PaymentInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * set strategy
     * 
     * @param PaymentInterface $paymentMethod
     * @return void
     */
    public function setStrategy(PaymentInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * purchase
     * 
     * @param float $price
     * @return void
     */
    public function purchase(float $price): void
    {
        $this->paymentMethod->pay($price);
    }
}
