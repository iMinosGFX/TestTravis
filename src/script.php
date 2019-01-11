<?php
/**
 * Created by PhpStorm.
 * User: Minos
 * Date: 11/01/2019
 * Time: 11:07
 */

require "../vendor/autoload.php";

use TestPHP\Invoice;
use TestPHP\InvoiceLine;

$l1 = new InvoiceLine(20,'Art1',20);
$l2 = new InvoiceLine(30,'Art2',20);
$l3 = new InvoiceLine(20,'Art3',20);

$tablist = [$l1,$l2,$l3];

$facture = new Invoice($tablist);

echo $facture->calculateTotal();