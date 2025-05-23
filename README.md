# gotit-api-php-sdk

SDK Technical document for GotIt APIs


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
      "url": "https://github.com/Dayone-Joint-Stock-Company/gotit-api-php-sdk.git"
    }
  ],
  "require": {
    "dayonevn/gotit-api-php-sdk": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/gotit-api-php-sdk/vendor/autoload.php');
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

## Running Example with Docker

You can run an example Laravel application that uses this SDK with Docker and Docker Compose. The example setup is located in the [`example/`](example/) directory.

### Prerequisites
- [Docker](https://docs.docker.com/get-docker/) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed

### Steps

1. **Clone this repository** (if you haven't already):
   ```bash
   git clone https://github.com/Dayone-Joint-Stock-Company/gotit-api-php-sdk.git
   cd gotit-api-php-sdk/example
   ```

2. **Build and start the containers:**
   ```bash
   docker-compose up --build
   ```
   This will build the PHP application image, start MySQL, Nginx, and the PHP-FPM containers.

The example application will be available at `http://localhost:5002`
### Available Endpoints

#### Voucher Endpoints
- `GET /vouchers/e` - Create E voucher
- `GET /vouchers/v` - Create V voucher
- `GET /vouchers/g` - Create G voucher
- `GET /vouchers/send_sms` - Send voucher via SMS
- `GET /vouchers/send_email` - Send voucher via Email
- `GET /vouchers/send_zns` - Send voucher via ZNS
- `GET /vouchers/check_zns` - Check ZNS status
- `GET /vouchers/check_status_voucher` - Check voucher status

#### Brand Endpoints
- `GET /brands` - List all brands
- `GET /brands/{id}` - Get brand details
- `GET /brands/brand_product` - Get brand products

#### Category Endpoints
- `GET /categories` - List all categories
- `GET /categories/category_product` - Get category products

#### Product Endpoints
- `GET /products` - List all products
- `GET /products/{id}` - Get product details
- `GET /products/{id}/stores` - Get product stores
### Example Directory Structure

- `example/docker-compose.yml` — Docker Compose configuration
- `example/Dockerfile` — PHP-FPM application image
- `example/nginx/conf.d/app.conf` — Nginx configuration
- `example/laravel-api-gotit/` — Example Laravel application using this SDK

For more details, see the files in the [`example/`](example/) directory.
