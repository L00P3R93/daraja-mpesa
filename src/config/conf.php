<?php
    return [
        /* Credentials
         * *************************************************************************************************************
         * The DARAJA API Credentials
         */
        'apps' => [
            /*
             * The first two are credentials for the Daraja Apps after 'Going Live'
             */
            'c2b' => [
                'consumer_key' => '',
                'consumer_secret' => '',
            ],
            'b2c' => [
                'consumer_key' => '',
                'consumer_secret' => '',
            ],
            /*
             * The last two are credentials for the Daraja Apps in 'Sandbox'
             */
            'sandbox_default' => [
                'consumer_key' => '',
                'consumer_secret' => '',
            ],
            'sandbox_c2b' => [
                'consumer_key' => '',
                'consumer_secret' => '',
            ],
            /*
             * The default working environment will be 'sandbox'.
             * Change this environment only when finally ready for 'production' and Daraja Apps are LIVE.
             */
            'env' => 'sandbox',
        ],
        /* File Cache Location
         * **************************************************************************************************************
         * Caching location on the local disk
         */
        'cache_location' => 'cache',

        /* Callback Method
         * **************************************************************************************************************
         * Server Request Method to be used on the Callback URL
         */
        'callback_method' => 'POST',

        /* LNM Online Configurations (STK Push)
         * *************************************************************************************************************
         */
        'lnmo' => [
            /*
             * Paybill Number
             * *********************************************************************************************************
             * The Registered Paybill Number that is used as the Merchant ID
             */
            'short_code' => 174379,
            /*
             * STK Push Callback URL
             * *********************************************************************************************************
             * A fully qualified endpoint that will be queried by Safaricom API
             * on completion or failure of a push transaction
             */
            'callback' => '',
            /*
             * SAG Passkey
             * *********************************************************************************************************
             * The secret SAG Passkey generated by Safaricom on successful
             * registrations of the Merchant's Paybill Number.
             */
            'passkey' => '',
            /*
             * Default Transaction Type
             * *********************************************************************************************************
             * This is the Default Transaction Type set on every STK Push request
             */
            'default_transaction_type' => 'CustomerPaybillOnline'
        ],

        /*
         * C2B Configuration
         * *************************************************************************************************************
         * A fully qualified endpoint that will be queried by Safaricom API
         * on completion or failure of the transaction.
         * 
         * Create Confirmation_URL and Validation_URL Files and host the on a secure server with SSL 
         * Certificates (https://) or otherwise use ngrok to host on localhost.
         * 
         * Type the URL Path of the two files below and use to register the URLS.
         * 
         * The initiator_name and security_credential are created in the MPESA Portal under the API Roles.
         * The currently supplied credentials are for sandbox testing.
         */
        'c2b' => [
            'initiator_name' => 'apiop37',
            'security_credential' => 'Safaricom3021#',
            'confirmation_url' => '', // Receives successful payment notifications
            'validation_url' => '', // Validates successful payment notifications (Accept or Reject)
            'on_timeout' => 'Completed',
            'short_code' => '600000',
            'test_phone_number' => '254708374149',
            'default_command_id' => 'CustomerPayBillOnline'
        ],

        /*
         * B2C Configuration
         * *************************************************************************************************************
         * A fully qualified endpoint that will be queried by Safaricom API
         * on completion or failure of the transaction.
         * 
         * Create Result_URL and Timeout_URL Files and host the on a secure server with SSL 
         * Certificates (https://) or otherwise use ngrok to host on localhost.
         * 
         * Type the URL Path of the two files below and use to register the URLS.
         * 
         * The initiator_name and security_credential are created in the MPESA Portal under the API Roles.
         * The currently supplied credentials are for sandbox testing.
         * 
         */
        'b2c' => [
            'initiator_name' => 'apiop37',
            'security_credential' => 'Safaricom3021#',
            'short_code' => '603021',
            'default_command_id' => 'BusinessPayment',
            'test_phone_number' => '254715963478',
            'result_url' => '', // Receives notifications for failed or successful sending of funds
            'timeout_url' => '' // Receives notifications for timed-out requests
        ],

        /*
         * B2B Configuration
         * *************************************************************************************************************
         * A fully qualified endpoint that will be queried by Safaricom API
         * on completion or failure of the transaction.
         * 
         * Currently no longer supported by Daraja API
         */
        'b2b' => [
            'initiator_name' => '',
            'security_credential' => '',
            'default_command_id' => 'BusinessPayBill', // possible values are: BusinessPayBill, MerchantToMerchantTransfer, MerchantTransferFromMerchantToWorking, MerchantServicesMMFAccountTransfer, AgencyFloatAdvance
            'result_url' => '',
            'timeout_url' => ''
        ],

        /*
         * Transaction Status API Config
         * *************************************************************************************************************
         * Fully qualified endpoints used in requesting for the status of a successful B2C transaction.
         */
        'transaction_status_b2c' => [
            'result_url' => '', // Receives notification on the status of transaction
            'timeout_url' => '' // Receives notification for timed-out requests
        ],

        /*
         * Account Balance B2C
         * *************************************************************************************************************
         * Fully qualified endpoints used in requesting the B2C account balances for all Accounts.
         */
        'account_balance_b2c' => [
            'timeout_url'=> '',// Receives notification for timed-out requests
            'result_url'=> '' // Receives notification for the account balance request
        ],

        /*
         * Account Balance C2B
         * *************************************************************************************************************
         * Fully qualified endpoints used in requesting the C2B account balances for all Accounts.
         */
        'account_balance_c2b' => [
            'timeout_url'=> '', // Receives notification for timed-out requests
            'result_url'=> '' // Receives notification for the account balance request
        ]
    ];
