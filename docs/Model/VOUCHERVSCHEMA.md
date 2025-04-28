# # VOUCHERVSCHEMA

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_ref_id** | **string** | TransactionRefId receive from client request | [optional]
**voucher_code** | **string** | Voucher code. Contains 10 numbers, unique and not duplicated with any other voucher. For some brands that do not use Got It code but use integerernal code (Big C, Mobile World), the system returns the integerernal code. | [optional]
**voucher_link** | **string** | Link of voucher | [optional]
**voucher_link_code** | **string** | Last 8 characters of voucher link | [optional]
**voucher_image_link** | **string** | Link of voucher image. To display vouchers as images | [optional]
**voucher_cover_link** | **string** | Cover link of voucher. | [optional]
**voucher_cover_link_code** | **string** | Last 8 characters of voucher cover link | [optional]
**voucher_serial** | **string** | Is a unique code to identify voucher link v and is not valid for use. For example: V1562342ET2 | [optional]
**expiry_date** | **string** | Voucher expiration date | [optional]
**product** | [**\OpenAPI\Client\Model\VOUCHERVSCHEMAProduct**](VOUCHERVSCHEMAProduct.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
