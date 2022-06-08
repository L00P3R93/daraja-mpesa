<?php
namespace PP\Mpesa;

class C2B{
    /**
     * The production URLs will be issued once you 'Go Live' on Daraja Website
     * 
     * The sandbox URLs can also be used for sandbox testing.
     * */
    protected $production_url = '';
    protected $balance_url = '';

    protected $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
    protected $url_simulate = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';

    protected $core;

    /**
     * C2B constructor.
     */
    public function __construct(){$this->core = new Core();}
    /**
     * Calls request to register C2B URLs
     * Ensure to use the correct URL for the set environment.
     * @return bool|string
     */
    public function submit(){
        return $this->core->request_c2b_register($this->url);
    }
    /**
     * Simulates C2B Payment
     * Ensure to use the correct URL for the set environment.
     * @param array $user_params
     * @return bool|string
     */
    public function submit_simulate($user_params=[]){
        return $this->core->request_c2b_simulate($this->url_simulate, $user_params);
    }

    /**
     * Queries For C2B Paybill Account Balance
     * Ensure to use the correct URL for the set environment.
     * @return bool|string
     */
    public function account_balance(){
        return $this->core->request_account_balance_c2b($this->balance_url);
    }
}