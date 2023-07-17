<?php

use PP\Mpesa\Init as Mpesa;


$mpesa = new Mpesa();
try {
    $user_params = [
        'Amount' => 10,
        'PartyB' => '',
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

