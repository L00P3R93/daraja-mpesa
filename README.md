# M-PESA DARAJA API Package
[![Latest Stable Version](http://poser.pugx.org/phpunit/phpunit/v)](https://packagist.org/packages/phpunit/phpunit)
[![Latest Unstable Version](http://poser.pugx.org/phpunit/phpunit/v/unstable)](https://packagist.org/packages/phpunit/phpunit) 
[![License](http://poser.pugx.org/phpunit/phpunit/license)](https://packagist.org/packages/phpunit/phpunit) 
[![PHP Version Require](http://poser.pugx.org/phpunit/phpunit/require/php)](https://packagist.org/packages/phpunit/phpunit)

This is a PHP package for the Safaricom's M-Pesa Daraja API.  

## Installation

This project supports both composer dependency management tool and can also be used without composer

### Using Composer
1. Run the following command
```
composer require sntaks/daraja-mpesa
```
### Without composer

1. Download the source code as zipped 

2. Follow the following directions
``` 
<?php

use PP\Mpesa\Init as Mpesa;
```
3. Check the following example for usage [example/mpesa.php](https://github.com/L00P3R93/daraja-mpesa/blob/main/example/mpesa.php)
## Configuration

The library comes with a structured config file based on the API that you intend to use.

To add the necessary configurations:-
1. Open the folder installation.

2. Look for a file named `config/conf.php`

3. Edit the necessary keys that reflects the product you are using.


## Usage
```
<?php

use PP\Mpesa\Init as Mpesa;


$mpesa = new Mpesa();
try {

    $user_params = [
        'Amount' => 10,
        'PartyB' => '254715963478',
        'Remarks' => 'Test Business Payment'
    ];
    //$response = $mpesa->b2c($user_params);


    //$response = $mpesa->b2c_account_balance();
    //$response = $mpesa->c2b_account_balance();

    /*$user_params = [
        'TransactionID' => 'QCF9Q25VCN'
    ];
    $response = $mpesa->b2c_transaction_status($user_params);*/

    //$response_register = $mpesa->c2b();
}catch(\Exception $e){
    $response = json_decode($e->getMessage());
}

header('Content-Type: application/json');
echo json_encode($response);
```
## Support
Need support using this package:- 
[Send a quick message here](https://t.me/sntaks)

https://t.me/sntaks

## API's Supported
The library implements all the exposed endpoints by Safaricom as listed below:-

### 1. [Lipa na M-Pesa Online Payment](https://developer.safaricom.co.ke/docs#lipa-na-m-pesa-online-payment)
#### &nbsp; &nbsp; What it is?
The Lipa na M-Pesa Online Payment endpoint(STK push) allows you to request payment from your users/clients. With this endpoint all the user is required to do is input their M-PESA pin to a prompt to send a payment to you. 
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/LipaNaMpesaOnline.md).

### 2. [Lipa na M-Pesa Online Query Request](https://developer.safaricom.co.ke/docs#lipa-na-m-pesa-online-query-request)
#### &nbsp; &nbsp; What it is?
When you request payment from your users/clients via Lipa na M-Pesa Online endpoint above you might want to know the status of that request. This endpoint facilitates that. It allows you to query the status of any STK push on demand. 
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/LipaNaMpesaOnlineQuery.md).

### 3. [C2B](https://developer.safaricom.co.ke/docs#c2b-api)
#### &nbsp; &nbsp; What it is?
This endpoint enables developers to receive real time notifications when a client makes a payments to a merchant's Till number or Paybill number. It assumes the payment are made via the SIM card toolkit and as a developer you need to know when that payment hits the merchants till/paybill number for reconciliation and accounting purposes.
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/C2B.md).

### 4. [B2C](https://developer.safaricom.co.ke/docs#b2c-api)
#### &nbsp; &nbsp; What it is?
This endpoints enables merchants to pay their customers from they paybill account. Some of the use cases are but not limited to paying salaries, paying promotions to customers etc.
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/B2C.md).

### 5. [Transaction Status](https://developer.safaricom.co.ke/docs#transaction-status)
#### &nbsp; &nbsp; What it is?
This endpoint enables developers to initiate status check of a B2B, B2C and C2B transactions. It really comes in handy where one party in a transactions fails/claims not to have received an acknowledgment for a transaction.
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/TransactionStatus.md).


### 7. [Account Balance](https://developer.safaricom.co.ke/docs#account-balance-api)
#### &nbsp; &nbsp; What it is?
This endpoint enables merchants to query their Till/Paybill numbers account balance on demand.
#### &nbsp; &nbsp; How to implement it?
[Read docs here](docs/AccountBalance.md).


## License

The M-Pesa Package is open-sourced software licensed under the [GNU license](http://opensource.org/licenses/MIT).

