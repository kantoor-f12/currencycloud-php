<?php
namespace CurrencyCloud\Model;

use ArrayIterator;

class FundingAccounts extends PaginatedData {

    /**
     * @var FundingAccount[]
     */
    private $fundingAccounts;

    /**
     * Ibans constructor.
     *
     * @param array      $fundingAccounts
     * @param Pagination $pagination
     */
    function __construct(array $fundingAccounts, Pagination $pagination)
    {
        parent::__construct($pagination);
        $this->fundingAccounts = $fundingAccounts;
    }

    /**
     * @return FundingAccount[]
     */
    public function getFundingAccounts()
    {
        return $this->fundingAccounts;
    }

    /**
     * @param FundingAccount[] $fundingAccounts
     */
    public function setFundingAccounts($fundingAccounts)
    {
        $this->fundingAccounts = $fundingAccounts;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new ArrayIterator($this->fundingAccounts);
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        return count($this->fundingAccounts);
    }
}