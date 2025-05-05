<?php

namespace App\Http\Controllers;
use OpenAPI\Client\Api\CategoriesApi;


class DemoCategoryController extends Controller
{
    protected $apiInstance;
    protected $apiKey;
    public function __construct()
    {
        $this->apiInstance = new CategoriesApi();
        $this->apiInstance->setHostIndex(env('GOTIT_API_ENDPOINT'));
        $this->apiKey = env('X_GI_AUTHORIZATION');
    }
    // Get list of categories
    public function index()
    {
        return response()->json($this->apiInstance->getListOfCategories($this->apiKey));
    }
    // Get list of categories by products
    public function categoriesByProducts()
    {
        return response()->json($this->apiInstance->getCategoryByProduct($this->apiKey));
    }
}



