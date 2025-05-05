<?php

use App\Http\Controllers\DemoBrandController;
use App\Http\Controllers\DemoCategoryController;
use App\Http\Controllers\DemoProductController;
use App\Http\Controllers\DemoSendVoucherController;
use App\Http\Controllers\DemoVoucherController;
use App\Http\Controllers\DemoVoucherStatusController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [DemoCategoryController::class, 'index']);
    Route::get('/category_product', [DemoCategoryController::class, 'categoriesByProducts']);
});

Route::group(['prefix' => 'brands'], function () {
    Route::get('/', [DemoBrandController::class, 'index']);
    Route::get('/brand_product', [DemoBrandController::class, 'brandsByProducts']);
    Route::get('/{brandId}', [DemoBrandController::class, 'show']);
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [DemoProductController::class, 'index']);
    Route::get('/{productId}', [DemoProductController::class, 'detail']);
    Route::get('/{productId}/stores', [DemoProductController::class, 'stores']);
});

Route::group(['prefix' => 'vouchers'], function () {
    Route::get('/v', [DemoVoucherController::class, 'generateLinkV']);
    Route::get('/e', [DemoVoucherController::class, 'generateLinkE']);
    Route::get('/g', [DemoVoucherController::class, 'generateLinkG']);
	Route::get('/send_sms', [DemoSendVoucherController::class, 'sendVoucherSms']);
	Route::get('/send_email', [DemoSendVoucherController::class, 'sendVoucherEmail']);
	Route::get('/send_zns', [DemoSendVoucherController::class, 'sendVoucherZns']);
	Route::get('/check_zns', [DemoSendVoucherController::class, 'checkVoucherZns']);
    Route::get('/check_status_voucher', [DemoVoucherStatusController::class, 'checkVoucherStatus']);
});
