# OpenAPI\Client\BrandsApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**brandsByProducts()**](BrandsApi.md#brandsByProducts) | **GET** /api/v4.0/brands/brandsByProducts | Get brand by product |
| [**getDetailOfBrand()**](BrandsApi.md#getDetailOfBrand) | **GET** /api/v4.0/brands/{id} | Get brand detail |
| [**getListOfBrands()**](BrandsApi.md#getListOfBrands) | **GET** /api/v4.0/brands | Get list of brands |


## `brandsByProducts()`

```php
brandsByProducts($x_gi_authorization): \OpenAPI\Client\Model\BRANDDETAILRESPONSE
```

Get brand by product

Returns brand detail data master

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization

try {
    $result = $apiInstance->brandsByProducts($x_gi_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->brandsByProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |

### Return type

[**\OpenAPI\Client\Model\BRANDDETAILRESPONSE**](../Model/BRANDDETAILRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailOfBrand()`

```php
getDetailOfBrand($x_gi_authorization, $id): \OpenAPI\Client\Model\BRANDDETAILRESPONSE
```

Get brand detail

Returns brand detail data master

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$id = 46; // int | Brand Id

try {
    $result = $apiInstance->getDetailOfBrand($x_gi_authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->getDetailOfBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **id** | **int**| Brand Id | |

### Return type

[**\OpenAPI\Client\Model\BRANDDETAILRESPONSE**](../Model/BRANDDETAILRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfBrands()`

```php
getListOfBrands($x_gi_authorization): \OpenAPI\Client\Model\BRANDSRESPONSE
```

Get list of brands

Retrieve a list of brands

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization

try {
    $result = $apiInstance->getListOfBrands($x_gi_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->getListOfBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |

### Return type

[**\OpenAPI\Client\Model\BRANDSRESPONSE**](../Model/BRANDSRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
