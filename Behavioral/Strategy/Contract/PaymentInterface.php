<?php

interface PaymentInterface
{
    /**
     * Pay method
     * 
     * @param float $price
     * @return void
     */
    public function pay(float $price): void;
}
