<?php

namespace TPerformant\API\Model;

class Program extends GenericEntity {
    public $id;
    public $slug;
    public $name;
    public $mainUrl;
    public $baseUrl;
    public $description;
    public $activatedAt;
    public $userId;
    public $uniqueCode;
    public $status;
    public $cookieLife;
    public $tos;
    public $productFeedsCount;
    public $productsCount;
    public $bannersCount;
    public $approvalTime;
    public $currency;
    public $enableLeads;
    public $enableSales;
    public $defaultLeadCommissionRate;
    public $defaultLeadCommissionType;
    public $defaultSaleCommissionRate;
    public $defaultSaleCommissionType;
    public $approvedCommissionCountRate;
    public $approvedCommissionAmountRate;
    public $paymentType;
    public $balanceIndicator;
    public $downtime;
    public $averagePaymentTime;
    public $logoId;
    public $logoPath;
    public $userLogin;
    public $category = null;
    public $countries = null;
    public $ignoreIPs = null;
}
