# OpenAPI\Client\LbMiscApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**color()**](LbMiscApi.md#color) | **GET** /1/explore/color/{color} | Fetch a list of releases that have cover art that has a predominant color that is close to the given color. |
| [**freshReleases()**](LbMiscApi.md#freshReleases) | **GET** /1/explore/fresh-releases/ | This endpoint fetches upcoming and recently released (fresh) releases. |
| [**getDumpInfo()**](LbMiscApi.md#getDumpInfo) | **GET** /1/status/get-dump-info | Get information about ListenBrainz data dumps. You need to pass the id parameter in a GET request to get data about that particular dump. |
| [**lbRadio()**](LbMiscApi.md#lbRadio) | **GET** /1/explore/lb-radio | Generate a playlist with LB Radio. |


## `color()`

```php
color($color): \OpenAPI\Client\Model\Color
```

Fetch a list of releases that have cover art that has a predominant color that is close to the given color.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$color = 'color_example'; // string | Color must be a 6 digit hex color code.

try {
    $result = $apiInstance->color($color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMiscApi->color: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **color** | **string**| Color must be a 6 digit hex color code. | |

### Return type

[**\OpenAPI\Client\Model\Color**](../Model/Color.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freshReleases()`

```php
freshReleases($release_date, $days, $sort, $past, $future): \OpenAPI\Client\Model\FreshReleases
```

This endpoint fetches upcoming and recently released (fresh) releases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_date = 'release_date_example'; // string | Fresh releases will be shown around this pivot date. Must be in YYYY-MM-DD format.
$days = 56; // int | The number of days of fresh releases to show. Max 90 days.
$sort = 'release_name'; // string | The sort order of the results.
$past = true; // bool | Whether to show releases in the past.
$future = true; // bool | Whether to show releases in the future.

try {
    $result = $apiInstance->freshReleases($release_date, $days, $sort, $past, $future);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMiscApi->freshReleases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **release_date** | **string**| Fresh releases will be shown around this pivot date. Must be in YYYY-MM-DD format. | [optional] |
| **days** | **int**| The number of days of fresh releases to show. Max 90 days. | [optional] |
| **sort** | **string**| The sort order of the results. | [optional] [default to &#39;release_name&#39;] |
| **past** | **bool**| Whether to show releases in the past. | [optional] [default to true] |
| **future** | **bool**| Whether to show releases in the future. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\FreshReleases**](../Model/FreshReleases.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDumpInfo()`

```php
getDumpInfo($id): \OpenAPI\Client\Model\GetDumpInfo
```

Get information about ListenBrainz data dumps. You need to pass the id parameter in a GET request to get data about that particular dump.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Integer specifying the ID of the dump, if not provided, the endpoint returns information about the latest data dump.

try {
    $result = $apiInstance->getDumpInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMiscApi->getDumpInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Integer specifying the ID of the dump, if not provided, the endpoint returns information about the latest data dump. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetDumpInfo**](../Model/GetDumpInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lbRadio()`

```php
lbRadio($prompt, $mode): \OpenAPI\Client\Model\LbRadio
```

Generate a playlist with LB Radio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prompt = 'prompt_example'; // string | The LB Radio prompt from which to generate playlists.
$mode = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Mode(); // \OpenAPI\Client\Model\Mode | The mode that LB radio should use. Must be easy, medium or hard.

try {
    $result = $apiInstance->lbRadio($prompt, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMiscApi->lbRadio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prompt** | **string**| The LB Radio prompt from which to generate playlists. | |
| **mode** | [**\OpenAPI\Client\Model\Mode**](../Model/.md)| The mode that LB radio should use. Must be easy, medium or hard. | |

### Return type

[**\OpenAPI\Client\Model\LbRadio**](../Model/LbRadio.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
