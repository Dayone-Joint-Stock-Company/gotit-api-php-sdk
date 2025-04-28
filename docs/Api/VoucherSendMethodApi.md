# OpenAPI\Client\VoucherSendMethodApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkStatusZNS()**](VoucherSendMethodApi.md#checkStatusZNS) | **POST** /api/v4.0/vouchers/send/zns/check | Check status zns |
| [**sendVoucherByEmail()**](VoucherSendMethodApi.md#sendVoucherByEmail) | **POST** /api/v4.0/vouchers/send/email | Send voucher by mail |
| [**sendVoucherBySMS()**](VoucherSendMethodApi.md#sendVoucherBySMS) | **POST** /api/v4.0/vouchers/send/sms | Send voucher by sms |
| [**sendVoucherByZNS()**](VoucherSendMethodApi.md#sendVoucherByZNS) | **POST** /api/v4.0/vouchers/send/zns | Send voucher by zns |


## `checkStatusZNS()`

```php
checkStatusZNS($x_gi_authorization, $requestcheckstatuszns): \OpenAPI\Client\Model\VOUCHERCHECKZNSRESPONSE
```

Check status zns

Check status zns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherSendMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestcheckstatuszns = new \OpenAPI\Client\Model\REQUESTCHECKSTATUSZNS(); // \OpenAPI\Client\Model\REQUESTCHECKSTATUSZNS

try {
    $result = $apiInstance->checkStatusZNS($x_gi_authorization, $requestcheckstatuszns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSendMethodApi->checkStatusZNS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestcheckstatuszns** | [**\OpenAPI\Client\Model\REQUESTCHECKSTATUSZNS**](../Model/REQUESTCHECKSTATUSZNS.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERCHECKZNSRESPONSE**](../Model/VOUCHERCHECKZNSRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendVoucherByEmail()`

```php
sendVoucherByEmail($x_gi_authorization, $requestsendvoucherbyemail): \OpenAPI\Client\Model\VOUCHERSENDEMAILRESPONSE
```

Send voucher by mail

Send voucher by mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherSendMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestsendvoucherbyemail = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYEMAIL(); // \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYEMAIL

try {
    $result = $apiInstance->sendVoucherByEmail($x_gi_authorization, $requestsendvoucherbyemail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSendMethodApi->sendVoucherByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestsendvoucherbyemail** | [**\OpenAPI\Client\Model\REQUESTSENDVOUCHERBYEMAIL**](../Model/REQUESTSENDVOUCHERBYEMAIL.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERSENDEMAILRESPONSE**](../Model/VOUCHERSENDEMAILRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendVoucherBySMS()`

```php
sendVoucherBySMS($x_gi_authorization, $requestsendvoucherbysms): \OpenAPI\Client\Model\VOUCHERSENDSMSRESPONSE
```

Send voucher by sms

Send voucher by sms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherSendMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestsendvoucherbysms = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYSMS(); // \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYSMS

try {
    $result = $apiInstance->sendVoucherBySMS($x_gi_authorization, $requestsendvoucherbysms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSendMethodApi->sendVoucherBySMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestsendvoucherbysms** | [**\OpenAPI\Client\Model\REQUESTSENDVOUCHERBYSMS**](../Model/REQUESTSENDVOUCHERBYSMS.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VOUCHERSENDSMSRESPONSE**](../Model/VOUCHERSENDSMSRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendVoucherByZNS()`

```php
sendVoucherByZNS($x_gi_authorization, $requestsendvoucherbyzns): \OpenAPI\Client\Model\VOUCHERSENDZNSRESPONSE
```

Send voucher by zns

Send voucher by zns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherSendMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$requestsendvoucherbyzns = new \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYZNS(); // \OpenAPI\Client\Model\REQUESTSENDVOUCHERBYZNS

try {
    $result = $apiInstance->sendVoucherByZNS($x_gi_authorization, $requestsendvoucherbyzns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherSendMethodApi->sendVoucherByZNS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **requestsendvoucherbyzns** | [**\OpenAPI\Client\Model\REQUESTSENDVOUCHERBYZNS**](../Model/REQUESTSENDVOUCHERBYZNS.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERSENDZNSRESPONSE**](../Model/VOUCHERSENDZNSRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
