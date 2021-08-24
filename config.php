<?php
require 'vendor/autoload.php';

use Greenter\Ws\Services\SunatEndpoints;
use Greenter\See;

$see = new See();
$see->setCertificate(file_get_contents('certificate.pem'));
$see->setService(SunatEndpoints::FE_BETA);
$see->setClaveSOL('20000000001', 'MODDATOS', 'moddatos');

return $see;