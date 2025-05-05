<?php

namespace App\Http\Controllers;
use OpenAPI\Client\Api\BrandsApi;


class DemoBrandController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new BrandsApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }
    // Get list of brands
    public function index()
    {
        return response()->json($this->apiInstance->getListOfBrands($this->apiKey));
    }
    // Get list of brands by products
    public function brandsByProducts()
    {
        return response()->json($this->apiInstance->brandsByProducts($this->apiKey));
    }
    // Get detail of brand
    public function show($brandId)
    {
        return response()->json($this->apiInstance->getDetailOfBrand($this->apiKey, $brandId));
    }
}



