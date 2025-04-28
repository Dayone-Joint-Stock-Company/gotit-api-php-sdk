# OpenAPI\Client\CategoriesApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCategoryByProduct()**](CategoriesApi.md#getCategoryByProduct) | **GET** /api/v4.0/categories/categoriesByProducts | Get category by product |
| [**getListOfCategories()**](CategoriesApi.md#getListOfCategories) | **GET** /api/v4.0/categories | Get lists category |


## `getCategoryByProduct()`

```php
getCategoryByProduct($x_gi_authorization): \OpenAPI\Client\Model\CATEGORIESRESPONSE
```

Get category by product

Returns all categories data master

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization

try {
    $result = $apiInstance->getCategoryByProduct($x_gi_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryByProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |

### Return type

[**\OpenAPI\Client\Model\CATEGORIESRESPONSE**](../Model/CATEGORIESRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfCategories()`

```php
getListOfCategories($x_gi_authorization): \OpenAPI\Client\Model\CATEGORIESRESPONSE
```

Get lists category

Returns all categories data master

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization

try {
    $result = $apiInstance->getListOfCategories($x_gi_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getListOfCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |

### Return type

[**\OpenAPI\Client\Model\CATEGORIESRESPONSE**](../Model/CATEGORIESRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
