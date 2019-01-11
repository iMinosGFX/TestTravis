<?php
/**
 * Created by PhpStorm.
 * User: Minos
 * Date: 11/01/2019
 * Time: 10:49
 */

namespace TestPHP;


class InvoiceLine
{
    private $amount;
    private $description;
    private $vat;
    public function __construct($amount, $description, $vat)
    {
        $this->amount = $amount;
        $this->description = $description;
        $this->vat = $vat;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setVat($vat)
    {
        $this->vat = $vat;
    }
    public function calculateTotal()
    {
        $amount = $this->amount;
        return $amount + ($this->vat * $amount) /100;
    }
}