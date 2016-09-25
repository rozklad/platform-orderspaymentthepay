<?php

return [

	'title' => 'Payment ThePay',

    'environment' => [
        'label' => 'Environment',
        'info' => 'Environment type.',
        'values' => [
            'testing' => 'Testing',
            'production' => 'Production',
        ]
    ],

    'gateUrl' => [
        'label' => 'Gate URL',
        'info' => 'URL where the ThePay gate is located.',
    ],

    'merchantId' => [
        'label' => 'Merchant ID',
        'info' => 'ID of your account in the ThePay system.',
    ],

    'accountId' => [
        'label' => 'Account ID',
        'info' => 'ID of your account, which you can create in the ThePay administration interface. You can have multiple accounts under your login.',
    ],

    'password' => [
        'label' => 'Password',
        'info' => 'Password for external communication that you can fill in for the account. This password should not be the same that you use to log-in to the administration.',
    ],

    'dataApiPassword' => [
        'label' => 'Data API Password',
        'info' => 'Password for external communication that you can fill in for the account. This password should not be the same that you use to log-in to the administration.',
    ],

    'webServicesWsdl' => [
        'label' => 'Webservices WSDL URL',
        'info' => 'URL of WSDL document for webservices API.',
    ],

    'dataWebServicesWsdl' => [
        'label' => 'Data Webservices WSDL URL',
        'info' => 'URL of WSDL document for webservices API.',
    ],

];