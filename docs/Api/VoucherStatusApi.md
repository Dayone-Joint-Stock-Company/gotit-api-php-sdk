# OpenAPI\Client\VoucherStatusApi

All URIs are relative to https://api-biz-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkVoucher()**](VoucherStatusApi.md#checkVoucher) | **GET** /api/v4.0/vouchers/multiple/status/{refId} | Check voucher status |


## `checkVoucher()`

```php
checkVoucher($x_gi_authorization, $ref_id, $is_exclude_store_list_info, $store_list_page, $store_list_page_size): \OpenAPI\Client\Model\VOUCHERCHECKRESPONSE
```

Check voucher status

Check voucher status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VoucherStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_gi_authorization = API key GotIt provided; // string | Authorization
$ref_id = voucher_0711_102; // string | Transaction RefId
$is_exclude_store_list_info = true; // bool | Exclude store list information
$store_list_page = 1; // int | Store Page
$store_list_page_size = 200; // int | Store Page Size

try {
    $result = $apiInstance->checkVoucher($x_gi_authorization, $ref_id, $is_exclude_store_list_info, $store_list_page, $store_list_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherStatusApi->checkVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_gi_authorization** | **string**| Authorization | |
| **ref_id** | **string**| Transaction RefId | |
| **is_exclude_store_list_info** | **bool**| Exclude store list information | [optional] |
| **store_list_page** | **int**| Store Page | [optional] |
| **store_list_page_size** | **int**| Store Page Size | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOUCHERCHECKRESPONSE**](../Model/VOUCHERCHECKRESPONSE.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
