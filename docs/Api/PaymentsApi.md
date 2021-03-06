# Freee\Accounting\PaymentsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDealPayment**](PaymentsApi.md#createDealPayment) | **POST** /api/1/deals/{id}/payments | 取引（収入／支出）の支払行作成
[**destroyDealPayment**](PaymentsApi.md#destroyDealPayment) | **DELETE** /api/1/deals/{id}/payments/{payment_id} | 取引（収入／支出）の支払行削除
[**updateDealPayment**](PaymentsApi.md#updateDealPayment) | **PUT** /api/1/deals/{id}/payments/{payment_id} | 取引（収入／支出）の支払行更新



## createDealPayment

> \Freee\Accounting\Model\DealsResponse createDealPayment($id, $parameters)

取引（収入／支出）の支払行作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）の支払行を作成する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li>  <li> <p>renews : 取引の+更新行</p> </li>  <li> <p>payments : 取引の支払行</p> </li>  <li> <p>from_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : 現金</li>  <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$parameters = new \Freee\Accounting\Model\DealPaymentParams(); // \Freee\Accounting\Model\DealPaymentParams | 取引（収入／支出）の支払行作成

try {
    $result = $apiInstance->createDealPayment($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createDealPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **parameters** | [**\Freee\Accounting\Model\DealPaymentParams**](../Model/DealPaymentParams.md)| 取引（収入／支出）の支払行作成 |

### Return type

[**\Freee\Accounting\Model\DealsResponse**](../Model/DealsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyDealPayment

> destroyDealPayment($id, $payment_id, $company_id)

取引（収入／支出）の支払行削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）の支払行を削除する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$payment_id = 56; // int | 決済ID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyDealPayment($id, $payment_id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->destroyDealPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **payment_id** | **int**| 決済ID |
 **company_id** | **int**| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDealPayment

> \Freee\Accounting\Model\DealsResponse updateDealPayment($id, $payment_id, $parameters)

取引（収入／支出）の支払行更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）の支払行を更新する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li>  <li> <p>renews : 取引の+更新行</p> </li>  <li> <p>payments : 取引の支払行</p> </li>  <li> <p>from_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : 現金</li>  <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$payment_id = 56; // int | 決済ID
$parameters = new \Freee\Accounting\Model\DealPaymentParams(); // \Freee\Accounting\Model\DealPaymentParams | 取引（収入／支出）の支払行更新

try {
    $result = $apiInstance->updateDealPayment($id, $payment_id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->updateDealPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **payment_id** | **int**| 決済ID |
 **parameters** | [**\Freee\Accounting\Model\DealPaymentParams**](../Model/DealPaymentParams.md)| 取引（収入／支出）の支払行更新 |

### Return type

[**\Freee\Accounting\Model\DealsResponse**](../Model/DealsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

