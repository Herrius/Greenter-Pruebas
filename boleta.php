<?php

use Greenter\Model\Sale\Invoice;
use Greenter\See;



$boleta = (new Invoice())
    ->setUblVersion('2.1')
    ->setTipoOperacion('0101')
    ->setTipoDoc('03') // Código para Boletas, ver Catalog. 51  
    ->setSerie('B001')
    ->setCorrelativo('1')
    // ...
    ;

$see = new See();
$see->setCertificate(file_get_contents(__DIR__.'/certificate.pem'));

$xml = $see->getXmlSigned($boleta);

file_put_contents('20000000001-03-B001-1.xml', $xml);
