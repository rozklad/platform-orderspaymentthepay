<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | Choose payment gate environment
    |
    */

    'environment' => 'testing',

    /**
     * URL where the ThePay gate is located.
     * Use for switch between development and production environment.
     * @var string
     */
    'gateUrl'             => 'https://www.thepay.cz/demo-gate/',

    /**
     * ID of your account in the ThePay system.
     * @var integer
     */
    'merchantId'          => 1,

    /**
     * ID of your account, which you can create in the ThePay
     * administration interface. You can have multiple accounts under
     * your login.
     * @var integer
     */
    'accountId'           => 3,

    /**
     * Password for external communication that you can fill in for the
     * account. This password should not be the same that you use to
     * log-in to the administration.
     * @var string
     */
    'password'            => 'my$up3rsecr3tp4$$word',
    'dataApiPassword'     => 'my$up3rsecr3tp4$$word',

    /**
     * URL of WSDL document for webservices API.
     * Web services are used for automatic comunications with gate. For example
     * for creating permanent payments.
     * @var string
     */
    'webServicesWsdl'     => 'https://www.thepay.cz/demo-gate/api/gate-api-demo.wsdl',
    'dataWebServicesWsdl' => 'https://www.thepay.cz/demo-gate/api/data-demo.wsdl',

    // Defaults for testing
    'testing' => [
        'gateUrl'             => 'https://www.thepay.cz/demo-gate/',
        'merchantId'          => 1,
        'accountId'           => 3,
        'password'            => 'my$up3rsecr3tp4$$word',
        'dataApiPassword'     => 'my$up3rsecr3tp4$$word',
        'webServicesWsdl'     => 'https://www.thepay.cz/demo-gate/api/gate-api-demo.wsdl',
        'dataWebServicesWsdl' => 'https://www.thepay.cz/demo-gate/api/data-demo.wsdl',
    ],

    // Defaults for production
    'production' => [
        'gateUrl'             => 'https://www.thepay.cz/gate/',
        'merchantId'          => '',
        'accountId'           => '',
        'password'            => 'my$up3rsecr3tp4$$word',
        'dataApiPassword'     => 'my$up3rsecr3tp4$$word',
        'webServicesWsdl'     => 'https://www.thepay.cz/gate/api/gate-api.wsdl',
        'dataWebServicesWsdl' => 'https://www.thepay.cz/gate/api/data.wsdl',
    ],


];
