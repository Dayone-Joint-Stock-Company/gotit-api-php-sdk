# OpenAPI\Client\ProductsApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getListOfProducts()**](ProductsApi.md#getListOfProducts) | **GET** /api/v4.0/products | Get all products master data |
| [**getProductDetail()**](ProductsApi.md#getProductDetail) | **GET** /api/v4.0/products/{id} | Get product detail data |
| [**getStoresOfProduct()**](ProductsApi.md#getStoresOfProduct) | **GET** /api/v4.0/products/{id}/stores | Get stores of this product |


## `getListOfProducts()`

```php
getListOfProducts($x_gi_authorization, $page, $page_size, $min_price, $max_price, $is_exclude_store_list_info, $store_list_page, $store_list_page_size): \OpenAPI\Client\Model\PRODUCTSRESPONSE
```

Get all products master data

Returns all products master data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$page = 1; // int | Page
$page_size = 200; // int | Page Size
$min_price = 1000; // int | Min price
$max_price = 10000000; // int | Max price
$is_exclude_store_list_info = true; // bool | Stores
$store_list_page = 1; // int | Store Page
$store_list_page_size = 200; // int | Store Page Size

try {
    $result = $apiInstance->getListOfProducts($x_gi_authorization, $page, $page_size, $min_price, $max_price, $is_exclude_store_list_info, $store_list_page, $store_list_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getListOfProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **page** | **int**| Page | |
| **page_size** | **int**| Page Size | |
| **min_price** | **int**| Min price | [optional] |
| **max_price** | **int**| Max price | [optional] |
| **is_exclude_store_list_info** | **bool**| Stores | [optional] |
| **store_list_page** | **int**| Store Page | [optional] |
| **store_list_page_size** | **int**| Store Page Size | [optional] |

### Return type

[**\OpenAPI\Client\Model\PRODUCTSRESPONSE**](../Model/PRODUCTSRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDetail()`

```php
getProductDetail($x_gi_authorization, $id, $is_exclude_store_list_info, $store_list_page, $store_list_page_size): \OpenAPI\Client\Model\PRODUCTDETAILRESPONSE
```

Get product detail data

Returns product detail data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$id = 1541; // int | Product ID
$is_exclude_store_list_info = true; // bool | Exclude store list information
$store_list_page = 1; // int | Store Page
$store_list_page_size = 200; // int | Store Page Size

try {
    $result = $apiInstance->getProductDetail($x_gi_authorization, $id, $is_exclude_store_list_info, $store_list_page, $store_list_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **id** | **int**| Product ID | |
| **is_exclude_store_list_info** | **bool**| Exclude store list information | [optional] |
| **store_list_page** | **int**| Store Page | [optional] |
| **store_list_page_size** | **int**| Store Page Size | [optional] |

### Return type

[**\OpenAPI\Client\Model\PRODUCTDETAILRESPONSE**](../Model/PRODUCTDETAILRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresOfProduct()`

```php
getStoresOfProduct($x_gi_authorization, $id): \OpenAPI\Client\Model\STORESRESPONSE
```

Get stores of this product

Returns all stores of this product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$id = 1541; // int | Product ID

try {
    $result = $apiInstance->getStoresOfProduct($x_gi_authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getStoresOfProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **id** | **int**| Product ID | |

### Return type

[**\OpenAPI\Client\Model\STORESRESPONSE**](../Model/STORESRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
