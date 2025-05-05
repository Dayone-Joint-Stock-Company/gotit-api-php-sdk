<?php

namespace App\Http\Controllers;

use OpenAPI\Client\Api\VoucherStatusApi;

class DemoVoucherStatusController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new VoucherStatusApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }

    public function checkVoucherStatus()
    {
        $refId = "1111_1aa11"; // string | Transaction RefId
        $isExcludeStoreListInfo = 'false'; // bool | Exclude store list information
        $storeListPage = 1; // int | Store Page
        $storeListPageSize = 1; // int | Store Page Size

        return response()->json($this->apiInstance->checkVoucher($this->apiKey, $refId, $isExcludeStoreListInfo, $storeListPage, $storeListPageSize));
    }
}



