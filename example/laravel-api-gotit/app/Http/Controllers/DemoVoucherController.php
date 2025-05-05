<?php

namespace App\Http\Controllers;
use OpenAPI\Client\Api\VoucherApi;
use OpenAPI\Client\Model\PRODUCTDEFAULTLINKG;

class DemoVoucherController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new VoucherApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }
    // Generate voucher link V
    public function generateLinkV()
    {
        $requestCreateVoucherLinkV = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKV(); // \OpenAPI\Client\Model\RequestCreateVoucherLinkV
        $requestCreateVoucherLinkV->setProductId(1541);
        $requestCreateVoucherLinkV->setProductPriceId(2991);
        $requestCreateVoucherLinkV->setQuantity(1);
        $requestCreateVoucherLinkV->setOrderName("WangTest" . \Str::uuid()->toString());
        $requestCreateVoucherLinkV->setExpiryDate("2025-12-31");
        $requestCreateVoucherLinkV->setTransactionRefId(\Str::uuid()->toString());
        return response()->json($this->apiInstance->createVoucherLinkV($this->apiKey, $requestCreateVoucherLinkV));
    }
    // Generate voucher link E
    public function generateLinkE()
    {
        $privateKey = env('PRIVATE_KEY_STR');
        if (empty($privateKey)) {
            return response()->json(['error' => 'Private key is empty. Please set the PRIVATE_KEY_STR environment variable.'], 500);
        }
        $transactionRef = \Str::uuid()->toString();
        $data = $this->apiKey . '|' . $transactionRef;
        openssl_sign($data, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $requestCreateVoucherLinkE = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKE(); // \OpenAPI\Client\Model\RequestCreateVoucherLinkE
        $requestCreateVoucherLinkE->setProductId(1541);
        $requestCreateVoucherLinkE->setOrderName("WangTest" . \Str::uuid()->toString());
        $requestCreateVoucherLinkE->setExpiryDate("2025-12-31");
        $requestCreateVoucherLinkE->setTransactionRefId($transactionRef);
        $requestCreateVoucherLinkE->setSignature(base64_encode($signature));
        $requestCreateVoucherLinkE->setAmount(100000);
        $requestCreateVoucherLinkE->setUseOtp(0);
        return response()->json($this->apiInstance->createVoucherLinkE($this->apiKey, $requestCreateVoucherLinkE));
    }
    // Generate voucher link G
    public function generateLinkG()
    {
        $productList = [];
        $product = new PRODUCTDEFAULTLINKG();
        $product->setProductId(1541);
        $product->setProductPriceId(2991);
        $product->setQuantity(1);
        // Case multiple products
        $product1 = new PRODUCTDEFAULTLINKG();
        $product1->setProductId(1541);
        $product1->setProductPriceId(2991);
        $product1->setQuantity(1);
        // Case multiple products
        array_push($productList, $product);
        // Case multiple products
        array_push($productList, $product1);
        // Case multiple products
        $requestCreateVoucherLinkG = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKG(); // \OpenAPI\Client\Model\RequestCreateVoucherLinkG
        $requestCreateVoucherLinkG->setProductList($productList);
        $requestCreateVoucherLinkG->setOrderName("WangTest" . \Str::uuid()->toString());
        $requestCreateVoucherLinkG->setExpiryDate("2025-12-31");
        $requestCreateVoucherLinkG->setTransactionRefId(\Str::uuid()->toString());
        return response()->json($this->apiInstance->createVoucherLinkG($this->apiKey, $requestCreateVoucherLinkG));
    }
}



