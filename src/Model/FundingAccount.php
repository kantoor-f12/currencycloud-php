<?php
namespace CurrencyCloud\Model;

use DateTime;

class FundingAccount implements EntityInterface {

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $accountId;
    /**
     * @var string
     */
    private $accountNumber;
    /**
     * @var string
     */
    private $accountNumberType;
    /**
     * @var string
     */
    private $accountHolderName;
    /**
     * @var string
     */
    private $bankName;
    /**
     * @var string
     */
    private $bankAddress;
    /**
     * @var string
     */
    private $bankCountry;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var string
     */
    private $paymentType;
    /**
     * @var string
     */
    private $regularRoutingCode;
    /**
     * @var string
     */
    private $regularRoutingCodeType;
    /**
     * @var string
     */
    private $priorityRoutingCode;
    /**
     * @var string
     */
    private $priorityRoutingCodeType;
    /**
     * @var DateTime
     */
    private $createdAt;
    /**
     * @var DateTime
     */
    private $updatedAt;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumberType()
    {
        return $this->accountNumberType;
    }

    /**
     * @param string $accountNumberType
     * @return $this
     */
    public function setAccountNumberType($accountNumberType)
    {
        $this->accountNumberType = $accountNumberType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->accountHolderName;
    }

    /**
     * @param string $accountHolderName
     * @return $this
     */
    public function setAccountHolderName($accountHolderName)
    {
        $this->accountHolderName = $accountHolderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAddress()
    {
        return $this->bankAddress;
    }

    /**
     * @param string $bankAddress
     * @return $this
     */
    public function setBankAddress($bankAddress)
    {
        $this->bankAddress = $bankAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankCountry()
    {
        return $this->bankCountry;
    }

    /**
     * @param string $bankCountry
     * @return $this
     */
    public function setBankCountry($bankCountry)
    {
        $this->bankCountry = $bankCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegularRoutingCode()
    {
        return $this->regularRoutingCode;
    }

    /**
     * @param string $regularRoutingCode
     * @return $this
     */
    public function setRegularRoutingCode($regularRoutingCode)
    {
        $this->regularRoutingCode = $regularRoutingCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegularRoutingCodeType()
    {
        return $this->regularRoutingCodeType;
    }

    /**
     * @param string $regularRoutingCodeType
     * @return $this
     */
    public function setRegularRoutingCodeType($regularRoutingCodeType)
    {
        $this->regularRoutingCodeType = $regularRoutingCodeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriorityRoutingCode()
    {
        return $this->priorityRoutingCode;
    }

    /**
     * @param string $priorityRoutingCode
     * @return $this
     */
    public function setPriorityRoutingCode($priorityRoutingCode)
    {
        $this->priorityRoutingCode = $priorityRoutingCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriorityRoutingCodeType()
    {
        return $this->priorityRoutingCodeType;
    }

    /**
     * @param string $priorityRoutingCodeType
     * @return $this
     */
    public function setPriorityRoutingCodeType($priorityRoutingCodeType)
    {
        $this->priorityRoutingCodeType = $priorityRoutingCodeType;
        return $this;
    }


    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt(DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return $this
     */
    public function setUpdatedAt(DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

}