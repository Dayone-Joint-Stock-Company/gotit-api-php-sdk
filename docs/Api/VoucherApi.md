# OpenAPI\Client\VoucherApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoucherLinkE()**](VoucherApi.md#createVoucherLinkE) | **POST** /api/v4.0/vouchers/e | Create voucher link e |
| [**createVoucherLinkG()**](VoucherApi.md#createVoucherLinkG) | **POST** /api/v4.0/vouchers/g | Create voucher link g |
| [**createVoucherLinkV()**](VoucherApi.md#createVoucherLinkV) | **POST** /api/v4.0/vouchers/v | Create voucher link v |


## `createVoucherLinkE()`

```php
createVoucherLinkE($x_gi_authorization, $requestcreatevoucherlinke): \OpenAPI\Client\Model\VOUCHERERESPONSE
```

Create voucher link e

Create voucher link e

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestcreatevoucherlinke = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKE(); // \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKE

try {
    $result = $apiInstance->createVoucherLinkE($x_gi_authorization, $requestcreatevoucherlinke);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherLinkE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestcreatevoucherlinke** | [**\OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKE**](../Model/REQUESTCREATEVOUCHERLINKE.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERERESPONSE**](../Model/VOUCHERERESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoucherLinkG()`

```php
createVoucherLinkG($x_gi_authorization, $requestcreatevoucherlinkg): \OpenAPI\Client\Model\VOUCHERGRESPONSE
```

Create voucher link g

Create voucher link g

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestcreatevoucherlinkg = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKG(); // \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKG

try {
    $result = $apiInstance->createVoucherLinkG($x_gi_authorization, $requestcreatevoucherlinkg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherLinkG: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestcreatevoucherlinkg** | [**\OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKG**](../Model/REQUESTCREATEVOUCHERLINKG.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERGRESPONSE**](../Model/VOUCHERGRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoucherLinkV()`

```php
createVoucherLinkV($x_gi_authorization, $requestcreatevoucherlinkv): \OpenAPI\Client\Model\VOUCHERVRESPONSE
```

Create voucher link v

Create voucher link v

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestcreatevoucherlinkv = new \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKV(); // \OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKV

try {
    $result = $apiInstance->createVoucherLinkV($x_gi_authorization, $requestcreatevoucherlinkv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherLinkV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestcreatevoucherlinkv** | [**\OpenAPI\Client\Model\REQUESTCREATEVOUCHERLINKV**](../Model/REQUESTCREATEVOUCHERLINKV.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERVRESPONSE**](../Model/VOUCHERVRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
