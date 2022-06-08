<?php
/**B2B is not supported by Daraja API */ 
namespace PP\Mpesa;

class B2B{
    protected $url = 'https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest';
    protected $core;

    public function __construct(){$this->core = new Core();}
    public function submit($user_params=[]){
        return $this->core->request_b2b($this->url, $user_params);
    }

}