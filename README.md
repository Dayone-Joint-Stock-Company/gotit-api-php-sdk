# gotit_api_php_sdk

Technical document APIs for API Version 4.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/gotit_api_php_sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api-biz-stg.gotit.vn*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandsApi* | [**brandsByProducts**](docs/Api/BrandsApi.md#brandsbyproducts) | **GET** /api/v4.0/brands/brandsByProducts | Get brand by product
*BrandsApi* | [**getDetailOfBrand**](docs/Api/BrandsApi.md#getdetailofbrand) | **GET** /api/v4.0/brands/{id} | Get brand detail
*BrandsApi* | [**getListOfBrands**](docs/Api/BrandsApi.md#getlistofbrands) | **GET** /api/v4.0/brands | Get list of brands
*CategoriesApi* | [**getCategoryByProduct**](docs/Api/CategoriesApi.md#getcategorybyproduct) | **GET** /api/v4.0/categories/categoriesByProducts | Get category by product
*CategoriesApi* | [**getListOfCategories**](docs/Api/CategoriesApi.md#getlistofcategories) | **GET** /api/v4.0/categories | Get lists category
*ProductsApi* | [**getListOfProducts**](docs/Api/ProductsApi.md#getlistofproducts) | **GET** /api/v4.0/products | Get all products master data
*ProductsApi* | [**getProductDetail**](docs/Api/ProductsApi.md#getproductdetail) | **GET** /api/v4.0/products/{id} | Get product detail data
*ProductsApi* | [**getStoresOfProduct**](docs/Api/ProductsApi.md#getstoresofproduct) | **GET** /api/v4.0/products/{id}/stores | Get stores of this product
*VoucherApi* | [**createVoucherLinkE**](docs/Api/VoucherApi.md#createvoucherlinke) | **POST** /api/v4.0/vouchers/e | Create voucher link e
*VoucherApi* | [**createVoucherLinkG**](docs/Api/VoucherApi.md#createvoucherlinkg) | **POST** /api/v4.0/vouchers/g | Create voucher link g
*VoucherApi* | [**createVoucherLinkV**](docs/Api/VoucherApi.md#createvoucherlinkv) | **POST** /api/v4.0/vouchers/v | Create voucher link v
*VoucherSendMethodApi* | [**checkStatusZNS**](docs/Api/VoucherSendMethodApi.md#checkstatuszns) | **POST** /api/v4.0/vouchers/send/zns/check | Check status zns
*VoucherSendMethodApi* | [**sendVoucherByEmail**](docs/Api/VoucherSendMethodApi.md#sendvoucherbyemail) | **POST** /api/v4.0/vouchers/send/email | Send voucher by mail
*VoucherSendMethodApi* | [**sendVoucherBySMS**](docs/Api/VoucherSendMethodApi.md#sendvoucherbysms) | **POST** /api/v4.0/vouchers/send/sms | Send voucher by sms
*VoucherSendMethodApi* | [**sendVoucherByZNS**](docs/Api/VoucherSendMethodApi.md#sendvoucherbyzns) | **POST** /api/v4.0/vouchers/send/zns | Send voucher by zns
*VoucherStatusApi* | [**checkVoucher**](docs/Api/VoucherStatusApi.md#checkvoucher) | **GET** /api/v4.0/vouchers/multiple/status/{refId} | Check voucher status

## Models

- [BRANDCATEGORYDETAIL](docs/Model/BRANDCATEGORYDETAIL.md)
- [BRANDCATEGORYDETAILRESPONSE](docs/Model/BRANDCATEGORYDETAILRESPONSE.md)
- [BRANDDETAIL](docs/Model/BRANDDETAIL.md)
- [BRANDDETAILRESPONSE](docs/Model/BRANDDETAILRESPONSE.md)
- [BRANDREEDEMSCHEMA](docs/Model/BRANDREEDEMSCHEMA.md)
- [BRANDSDETAIL](docs/Model/BRANDSDETAIL.md)
- [BRANDSRESPONSE](docs/Model/BRANDSRESPONSE.md)
- [CATEGORIESDETAIL](docs/Model/CATEGORIESDETAIL.md)
- [CATEGORIESRESPONSE](docs/Model/CATEGORIESRESPONSE.md)
- [GROUPVOUCHERSCHEMA](docs/Model/GROUPVOUCHERSCHEMA.md)
- [HTTPBADREQUEST](docs/Model/HTTPBADREQUEST.md)
- [HTTPINTERNALSERVERERROR](docs/Model/HTTPINTERNALSERVERERROR.md)
- [HTTPNOTFOUND](docs/Model/HTTPNOTFOUND.md)
- [HTTPUNAUTHORIZED](docs/Model/HTTPUNAUTHORIZED.md)
- [PAGINGSCHEMA](docs/Model/PAGINGSCHEMA.md)
- [PRODUCTDEFAULTLINKG](docs/Model/PRODUCTDEFAULTLINKG.md)
- [PRODUCTDETAIL](docs/Model/PRODUCTDETAIL.md)
- [PRODUCTDETAILRESPONSE](docs/Model/PRODUCTDETAILRESPONSE.md)
- [PRODUCTG](docs/Model/PRODUCTG.md)
- [PRODUCTPRICESCHEMA](docs/Model/PRODUCTPRICESCHEMA.md)
- [PRODUCTSALLDETAIL](docs/Model/PRODUCTSALLDETAIL.md)
- [PRODUCTSDEFAULTLINKG](docs/Model/PRODUCTSDEFAULTLINKG.md)
- [PRODUCTSDETAIL](docs/Model/PRODUCTSDETAIL.md)
- [PRODUCTSRESPONSE](docs/Model/PRODUCTSRESPONSE.md)
- [PRODUCTSRESPONSEDataInner](docs/Model/PRODUCTSRESPONSEDataInner.md)
- [PRODUCTSVOUCHERCHECK](docs/Model/PRODUCTSVOUCHERCHECK.md)
- [PRODUCTV](docs/Model/PRODUCTV.md)
- [PRODUCTVENDORLINKG](docs/Model/PRODUCTVENDORLINKG.md)
- [REQUESTCHECKSTATUSZNS](docs/Model/REQUESTCHECKSTATUSZNS.md)
- [REQUESTCREATEVOUCHERLINKE](docs/Model/REQUESTCREATEVOUCHERLINKE.md)
- [REQUESTCREATEVOUCHERLINKG](docs/Model/REQUESTCREATEVOUCHERLINKG.md)
- [REQUESTCREATEVOUCHERLINKV](docs/Model/REQUESTCREATEVOUCHERLINKV.md)
- [REQUESTSENDVOUCHERBYEMAIL](docs/Model/REQUESTSENDVOUCHERBYEMAIL.md)
- [REQUESTSENDVOUCHERBYSMS](docs/Model/REQUESTSENDVOUCHERBYSMS.md)
- [REQUESTSENDVOUCHERBYZNS](docs/Model/REQUESTSENDVOUCHERBYZNS.md)
- [STOREPAGINGSCHEMA](docs/Model/STOREPAGINGSCHEMA.md)
- [STOREPRODUCTSCHEMA](docs/Model/STOREPRODUCTSCHEMA.md)
- [STORESRESPONSE](docs/Model/STORESRESPONSE.md)
- [STORESRESPONSEDataInner](docs/Model/STORESRESPONSEDataInner.md)
- [STORESSCHEMA](docs/Model/STORESSCHEMA.md)
- [USAGEMETHODSCHEMA](docs/Model/USAGEMETHODSCHEMA.md)
- [VENDORSCHEMA](docs/Model/VENDORSCHEMA.md)
- [VOUCHERCHECKRESPONSE](docs/Model/VOUCHERCHECKRESPONSE.md)
- [VOUCHERCHECKSCHEMA](docs/Model/VOUCHERCHECKSCHEMA.md)
- [VOUCHERCHECKSCHEMADETAIL](docs/Model/VOUCHERCHECKSCHEMADETAIL.md)
- [VOUCHERCHECKZNSRESPONSE](docs/Model/VOUCHERCHECKZNSRESPONSE.md)
- [VOUCHERCHECKZNSRESPONSEData](docs/Model/VOUCHERCHECKZNSRESPONSEData.md)
- [VOUCHERE](docs/Model/VOUCHERE.md)
- [VOUCHERERESPONSE](docs/Model/VOUCHERERESPONSE.md)
- [VOUCHERESCHEMA](docs/Model/VOUCHERESCHEMA.md)
- [VOUCHERG](docs/Model/VOUCHERG.md)
- [VOUCHERGRESPONSE](docs/Model/VOUCHERGRESPONSE.md)
- [VOUCHERGSCHEMA](docs/Model/VOUCHERGSCHEMA.md)
- [VOUCHERSENDEMAILRESPONSE](docs/Model/VOUCHERSENDEMAILRESPONSE.md)
- [VOUCHERSENDEMAILSCHEMA](docs/Model/VOUCHERSENDEMAILSCHEMA.md)
- [VOUCHERSENDSMSRESPONSE](docs/Model/VOUCHERSENDSMSRESPONSE.md)
- [VOUCHERSENDSMSSCHEMA](docs/Model/VOUCHERSENDSMSSCHEMA.md)
- [VOUCHERSENDZNSRESPONSE](docs/Model/VOUCHERSENDZNSRESPONSE.md)
- [VOUCHERSENDZNSRESPONSEData](docs/Model/VOUCHERSENDZNSRESPONSEData.md)
- [VOUCHERV](docs/Model/VOUCHERV.md)
- [VOUCHERVRESPONSE](docs/Model/VOUCHERVRESPONSE.md)
- [VOUCHERVSCHEMA](docs/Model/VOUCHERVSCHEMA.md)
- [VOUCHERVSCHEMAProduct](docs/Model/VOUCHERVSCHEMAProduct.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

quang.huynh@gotit.vn

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.0.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
