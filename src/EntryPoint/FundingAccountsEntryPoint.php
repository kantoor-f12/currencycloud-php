<?php
namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Criteria\FindFundingAccountsCriteria;
use CurrencyCloud\Model\FundingAccount;
use CurrencyCloud\Model\FundingAccounts;
use CurrencyCloud\Model\PaginatedData;
use CurrencyCloud\Model\Pagination;
use DateTime;

class FundingAccountsEntryPoint extends AbstractEntityEntryPoint {

    /**
     * @param FindFundingAccountsCriteria $findFundingAccountsCriteria
     * @param Pagination                  $pagination
     *
     * @return FundingAccounts|PaginatedData
     */
    public function find(FindFundingAccountsCriteria $findFundingAccountsCriteria, Pagination $pagination){
        if (null === $findFundingAccountsCriteria) {
            $findFundingAccountsCriteria = new FindFundingAccountsCriteria();
        }
        if (null === $pagination) {
            $pagination = new Pagination();
        }
        return $this->doFind('funding_accounts/find', $findFundingAccountsCriteria, $pagination,
            function ($findFundingAccountsCriteria){
                return $this->convertFundingAccountsCriteriaToRequest($findFundingAccountsCriteria);
            },
            function ($response){
                return $this->convertResponseToFundingAccount($response);
            },
            function (array $entities, Pagination $pagination) {
                return new FundingAccounts($entities, $pagination);
            },
            'funding_accounts');
    }

    /**
     * @param FindFundingAccountsCriteria $findFundingAccountsCriteria
     * @return array
     */
    protected function convertFundingAccountsCriteriaToRequest(FindFundingAccountsCriteria $findFundingAccountsCriteria){
        $common = [
            'currency' => $findFundingAccountsCriteria->getCurrency(),
            'account_id' => $findFundingAccountsCriteria->getAccountId()
        ];

        return $common;
    }

    protected function convertResponseToFundingAccount($response) {
        $fundingAccount = new FundingAccount();

        $this->setIdProperty($fundingAccount, $response->id, 'id');
        $fundingAccount->setAccountId($response->account_id);
        $fundingAccount->setAccountNumber($response->account_number);
        $fundingAccount->setAccountNumberType($response->account_number_type);
        $fundingAccount->setAccountHolderName($response->account_holder_name);
        $fundingAccount->setBankName($response->bank_name);
        $fundingAccount->setBankAddress($response->bank_address);
        $fundingAccount->setBankCountry($response->bank_country);
        $fundingAccount->setCurrency($response->currency);
        $fundingAccount->setPaymentType($response->payment_type);
        $fundingAccount->setRegularRoutingCode($response->regular_routing_code);
        $fundingAccount->setRegularRoutingCodeType($response->regular_routing_code_type);
        $fundingAccount->setPriorityRoutingCode($response->priority_routing_code);
        $fundingAccount->setPriorityRoutingCodeType($response->priority_routing_code_type);
        $fundingAccount->setCreatedAt(null !== $response->created_at ? new DateTime($response->created_at) : null);
        $fundingAccount->setUpdatedAt(null !== $response->updated_at ? new DateTime($response->updated_at) : null);

        return $fundingAccount;
    }
}