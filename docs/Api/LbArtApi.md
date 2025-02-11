# Listenbrainz\LbArtApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCoverArtGrid()**](LbArtApi.md#createCoverArtGrid) | **POST** /1/art/grid/ | Create a cover art grid SVG file from the POSTed JSON data to this endpoint. |
| [**createCoverArtGridForUser()**](LbArtApi.md#createCoverArtGridForUser) | **GET** /1/art/grid-stats/{user_name}/{time_range}/{dimension}/{layout}/{image_size} | Create a cover art grid SVG file from the stats of a given user. |
| [**createCustomCoverArt()**](LbArtApi.md#createCustomCoverArt) | **GET** /1/art/{custom_name}/{user_name}/{time_range}/{image_size} | Create a custom cover art SVG file from the stats of a given user. |
| [**yearInMusic()**](LbArtApi.md#yearInMusic) | **GET** /1/art/year-in-music/{year}/{user_name} | Create the shareable svg image using YIM stats. |


## `createCoverArtGrid()`

```php
createCoverArtGrid($create_cover_art_grid): \SplFileObject
```

Create a cover art grid SVG file from the POSTed JSON data to this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbArtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_cover_art_grid = new \Listenbrainz\Model\CreateCoverArtGrid(); // \Listenbrainz\Model\CreateCoverArtGrid

try {
    $result = $apiInstance->createCoverArtGrid($create_cover_art_grid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbArtApi->createCoverArtGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_cover_art_grid** | [**\Listenbrainz\Model\CreateCoverArtGrid**](../Model/CreateCoverArtGrid.md)|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoverArtGridForUser()`

```php
createCoverArtGridForUser($user_name, $time_range, $dimension, $layout, $image_size): \SplFileObject
```

Create a cover art grid SVG file from the stats of a given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbArtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string | The name of the user for whom to create the cover art.
$time_range = new \Listenbrainz\Model\\Listenbrainz\Model\AllowedStatisticsRange(); // \Listenbrainz\Model\AllowedStatisticsRange | Must be a statistics time range.
$dimension = 56; // int | The dimension to use for this grid. A grid of dimension 3 has 3 images across and 3 images down, for a total of 9 images.
$layout = 56; // int | The layout to be used for this grid. Layout 0 is always a simple grid, but other layouts may have image images be of different sizes. See https://art.listenbrainz.org for examples of the available layouts.
$image_size = 56; // int | The size of the cover art image.

try {
    $result = $apiInstance->createCoverArtGridForUser($user_name, $time_range, $dimension, $layout, $image_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbArtApi->createCoverArtGridForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**| The name of the user for whom to create the cover art. | |
| **time_range** | [**\Listenbrainz\Model\AllowedStatisticsRange**](../Model/.md)| Must be a statistics time range. | |
| **dimension** | **int**| The dimension to use for this grid. A grid of dimension 3 has 3 images across and 3 images down, for a total of 9 images. | |
| **layout** | **int**| The layout to be used for this grid. Layout 0 is always a simple grid, but other layouts may have image images be of different sizes. See https://art.listenbrainz.org for examples of the available layouts. | |
| **image_size** | **int**| The size of the cover art image. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomCoverArt()`

```php
createCustomCoverArt($custom_name, $user_name, $time_range, $image_size): \SplFileObject
```

Create a custom cover art SVG file from the stats of a given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbArtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_name = new \Listenbrainz\Model\\Listenbrainz\Model\CoverTypes(); // \Listenbrainz\Model\CoverTypes | The name of cover art to be generated.
$user_name = 'user_name_example'; // string | The name of the user for whom to create the cover art.
$time_range = new \Listenbrainz\Model\\Listenbrainz\Model\AllowedStatisticsRange(); // \Listenbrainz\Model\AllowedStatisticsRange | Must be a statistics time range.
$image_size = 56; // int | The size of the cover art image.

try {
    $result = $apiInstance->createCustomCoverArt($custom_name, $user_name, $time_range, $image_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbArtApi->createCustomCoverArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_name** | [**\Listenbrainz\Model\CoverTypes**](../Model/.md)| The name of cover art to be generated. | |
| **user_name** | **string**| The name of the user for whom to create the cover art. | |
| **time_range** | [**\Listenbrainz\Model\AllowedStatisticsRange**](../Model/.md)| Must be a statistics time range. | |
| **image_size** | **int**| The size of the cover art image. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `yearInMusic()`

```php
yearInMusic($year, $user_name, $image): \SplFileObject
```

Create the shareable svg image using YIM stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbArtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = 56; // int
$user_name = 'user_name_example'; // string | The name of the user for whom to create the cover art.
$image = new \Listenbrainz\Model\\Listenbrainz\Model\YearInMusicImage(); // \Listenbrainz\Model\YearInMusicImage

try {
    $result = $apiInstance->yearInMusic($year, $user_name, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbArtApi->yearInMusic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**|  | |
| **user_name** | **string**| The name of the user for whom to create the cover art. | |
| **image** | [**\Listenbrainz\Model\YearInMusicImage**](../Model/.md)|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
