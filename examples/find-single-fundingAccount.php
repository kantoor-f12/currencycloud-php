#!/usr/bin/env php
<?php

use CurrencyCloud\Criteria\FindFundingAccountsCriteria;
use CurrencyCloud\CurrencyCloud;
use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Session;

require_once __DIR__ . '/../vendor/autoload.php';

$session = new Session(
    Session::ENVIRONMENT_DEMONSTRATION,
    '<user-id>',
    '<api-key>'
);
$currencyCloud = CurrencyCloud::createDefault($session);

$pagination = new Pagination();
$pagination->setTotalEntries(1);

$fundingAccountsCriteria = new FindFundingAccountsCriteria();
$fundingAccountsCriteria->setAccountId('<account-id>');

$fundingAccount = $currencyCloud->fundingAccounts()->find($fundingAccountsCriteria, $pagination);

var_dump($fundingAccount);

