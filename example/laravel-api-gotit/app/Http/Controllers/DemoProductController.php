<?php

namespace App\Http\Controllers;
use OpenAPI\Client\Api\ProductsApi;


class DemoProductController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new ProductsApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }
    // Get list of products
    public function index()
    {
        $page = 1; // int | Page
        $page_size = 200; // int | Page Size
        $min_price = 1000; // int | Min price
        $max_price = 10000000; // int | Max price
        $is_exclude_store_list_info = 'false'; // bool | Stores
        $store_list_page = 1; // int | Store Page
        $store_list_page_size = 100; // int | Store Page Size

        return response()->json($this->apiInstance->getListOfProducts($this->apiKey, $page, $page_size, $min_price, $max_price, $is_exclude_store_list_info, $store_list_page, $store_list_page_size));
    }
    // Get detail of product
    public function detail($productId)
    {
        return response()->json($this->apiInstance->getProductDetail($this->apiKey, $productId));
    }
    // Get stores of this product
    public function stores($productId)
    {
        return response()->json($this->apiInstance->getStoresOfProduct($this->apiKey, $productId));
    }
}



