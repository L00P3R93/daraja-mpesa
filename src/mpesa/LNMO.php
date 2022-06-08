<?php
namespace PP\Mpesa;

class LNMO{
    protected $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    protected $production_url = '';
    protected $core;
    public function __construct(){$this->core = new Core();}

    /**
     * Ensure to use the correct URL for the set environment.
     * @param array $user_params
     * @return bool|string
     */
    public function submit($user_params=[]){
        return $this->core->request_stk($this->url, $user_params);
    }
}