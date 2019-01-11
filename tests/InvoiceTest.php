<?php
/**
 * Created by PhpStorm.
 * User: Minos
 * Date: 11/01/2019
 * Time: 14:31
 */
declare(strict_types=1);

namespace TestPHP;

use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    public function testItSetInvoice(){
        $l1 = new InvoiceLine(10,'Art1',20);
        $l2 = new InvoiceLine(15,'Art1',20);
        $l3 = new InvoiceLine(20,'Art1',20);
        $tablist = [$l1,$l2,$l3];
        $facture = new Invoice($tablist);
        $this->assertEquals(54,$facture->calculateTotal());
    }
}