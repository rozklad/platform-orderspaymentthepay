<?php namespace Sanatorium\Orderspaymentthepay\Component;

///Class with our thepay configuration, it extends TpMerchantConfig
class PayConfig extends TpMerchantConfig {

    ///Our id
    public $merchantId = 1;

    ///Our account id
    public $accountId = 1;

    ///Our password
    public $password = 'my$up3rsecr3tp4$$word';

    ///Url of thepay gate
    public $gateUrl = "https://www.thepay.cz/demo-gate/";

}