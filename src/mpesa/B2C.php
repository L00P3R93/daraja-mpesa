<?php
namespace PP\Mpesa;

class B2C{
    protected $core;

    /**
     * The production URLs will be issued once you 'Go Live' on Daraja Website
     * 
     * The sandbox URLs can also be used for sandbox testing.
     * */
    protected $production_url = '';
    protected $transaction_url = '';
    protected $balance_url = '';
    protected $url = 'https://sandbox.safaricom.co.ke/mpesa/b2c/v1/paymentrequest';

    public function __construct(){$this->core = new Core();}

    /**
     * Ensure to use the correct URL for the set environment.
     * @param array $user_params
     * @return bool|string
     */
    public function submit($user_params=[]){
        return $this->core->request_b2c($this->url, $user_params); 
    }

    /**
     * Ensure to use the correct URL for the set environment.
     * @param array $user_params
     * @return bool|string
     */
    public function transaction_status($user_params=[]){
        return $this->core->request_transaction_status_b2c($this->transaction_url, $user_params);
    }

    /**
     * Ensure to use the correct URL for the set environment.
     * @return bool|string
     */
    public function account_balance(){
        return $this->core->request_account_balance_b2c($this->balance_url);
    }

}