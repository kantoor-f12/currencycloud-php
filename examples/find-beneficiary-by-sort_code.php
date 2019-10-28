#!/usr/bin/env php
<?php

use CurrencyCloud\CurrencyCloud;
use CurrencyCloud\Model\Beneficiary;
use CurrencyCloud\Model\Conversion;
use CurrencyCloud\Model\Payment;
use CurrencyCloud\Session;

require_once __DIR__ . '/../vendor/autoload.php';

$session = new Session(
    Session::ENVIRONMENT_DEMONSTRATION,
    '<user-id>',
    '<api-key>'
);

$currencyCloud = CurrencyCloud::createDefault($session);


$beneficiary = new Beneficiary();
$beneficiary->setRoutingCodeType1('sort_code');
$beneficiary->setRoutingCodeValue1('012345');

$beneficiary = $currencyCloud->beneficiaries()->find($beneficiary);

var_dump($beneficiary);

