<?php

namespace App\Http\Controllers;

use OpenAPI\Client\Api\VoucherSendMethodApi;

class DemoSendVoucherController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new VoucherSendMethodApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }
    // Send voucher by SMS
    public function sendVoucherSms()
    {
        $requestSendVoucherSms = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYSMS(); // \OpenAPI\Client\Model\RequestSendVoucherSms
        $requestSendVoucherSms->setVoucherLinkCode("gLsZaFRN");
        $requestSendVoucherSms->setPhoneNo("0394162063");
        $requestSendVoucherSms->setReceiverNm("Wang");
        $requestSendVoucherSms->setSenderNm("GOTIT");
        return response()->json($this->apiInstance->sendVoucherBySMS($this->apiKey, $requestSendVoucherSms));
    }
    // Send voucher by email
    public function sendVoucherEmail()
    {
        $requestSendVoucherEmail = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYEMAIL(); // \OpenAPI\Client\Model\RequestSendVoucherEmail
        $requestSendVoucherEmail->setVoucherLinkCode("gLsZaFRN");
        $requestSendVoucherEmail->setEmail("quang.huynh@gotit.vn");
        $requestSendVoucherEmail->setReceiverNm("Wang");
        $requestSendVoucherEmail->setSenderNm("GOTIT");
        return response()->json($this->apiInstance->sendVoucherByEmail($this->apiKey, $requestSendVoucherEmail));
    }
    // Send voucher by ZNS
    public function sendVoucherZns()
    {
        $requestSendVoucherZns = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYZNS(); // \OpenAPI\Client\Model\RequestSendVoucherZns
        $requestSendVoucherZns->setPhoneNo("0394162063");
        $requestSendVoucherZns->setTransactionId(\Str::random(15));
        $requestSendVoucherZns->setVoucherSerials(['E2V2RML6F52']);
        return response()->json($this->apiInstance->sendVoucherByZNS($this->apiKey, $requestSendVoucherZns));
    }
    // Check voucher send by ZNS
    public function checkVoucherZns()
    {
        $requestCheckVoucherZns = new \OpenAPI\Client\Model\REQUESTCHECKSTATUSZNS(); // \OpenAPI\Client\Model\RequestCheckVoucherZns
        $requestCheckVoucherZns->setTransactionId("aNGqaAljTaLc5B3");
        return response()->json($this->apiInstance->checkStatusZNS($this->apiKey, $requestCheckVoucherZns));
    }
}



