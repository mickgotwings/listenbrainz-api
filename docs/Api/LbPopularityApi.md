# Listenbrainz\LbPopularityApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**artist()**](LbPopularityApi.md#artist) | **POST** /1/popularity/artist | Get the total listen count and total unique listeners count for a given artist.  A JSON document with a list of artists and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once. |
| [**recording()**](LbPopularityApi.md#recording) | **POST** /1/popularity/recording | Get the total listen count and total unique listeners count for a given recording.  A JSON document with a list of recording_mbids and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once. |
| [**release()**](LbPopularityApi.md#release) | **POST** /1/popularity/release | Get the total listen count and total unique listeners count for a given release.  A JSON document with a list of releases and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once. |
| [**releaseGroup()**](LbPopularityApi.md#releaseGroup) | **POST** /1/popularity/release-group | Get the total listen count and total unique listeners count for a given release group.  A JSON document with a list of release groups and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once. |
| [**topRecordingsForArtist()**](LbPopularityApi.md#topRecordingsForArtist) | **GET** /1/popularity/top-recordings-for-artist/{artist_mbid} | Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned. |
| [**topReleaseGroupForArtist()**](LbPopularityApi.md#topReleaseGroupForArtist) | **GET** /1/popularity/top-release-groups-for-artist/{artist_mbid} | Get the top release groups by listen count for a given artist. |


## `artist()`

```php
artist($artist_request): \Listenbrainz\Model\Artist200ResponseInner[]
```

Get the total listen count and total unique listeners count for a given artist.  A JSON document with a list of artists and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_request = new \Listenbrainz\Model\ArtistRequest(); // \Listenbrainz\Model\ArtistRequest

try {
    $result = $apiInstance->artist($artist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->artist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_request** | [**\Listenbrainz\Model\ArtistRequest**](../Model/ArtistRequest.md)|  | |

### Return type

[**\Listenbrainz\Model\Artist200ResponseInner[]**](../Model/Artist200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recording()`

```php
recording($recording_request): \Listenbrainz\Model\Recording200ResponseInner[]
```

Get the total listen count and total unique listeners count for a given recording.  A JSON document with a list of recording_mbids and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recording_request = new \Listenbrainz\Model\RecordingRequest(); // \Listenbrainz\Model\RecordingRequest

try {
    $result = $apiInstance->recording($recording_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->recording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_request** | [**\Listenbrainz\Model\RecordingRequest**](../Model/RecordingRequest.md)|  | |

### Return type

[**\Listenbrainz\Model\Recording200ResponseInner[]**](../Model/Recording200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `release()`

```php
release($release_request): \Listenbrainz\Model\Release200ResponseInner[]
```

Get the total listen count and total unique listeners count for a given release.  A JSON document with a list of releases and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_request = new \Listenbrainz\Model\ReleaseRequest(); // \Listenbrainz\Model\ReleaseRequest

try {
    $result = $apiInstance->release($release_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->release: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **release_request** | [**\Listenbrainz\Model\ReleaseRequest**](../Model/ReleaseRequest.md)|  | |

### Return type

[**\Listenbrainz\Model\Release200ResponseInner[]**](../Model/Release200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseGroup()`

```php
releaseGroup($release_group_request): \Listenbrainz\Model\ReleaseGroup200ResponseInner[]
```

Get the total listen count and total unique listeners count for a given release group.  A JSON document with a list of release groups and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_group_request = new \Listenbrainz\Model\ReleaseGroupRequest(); // \Listenbrainz\Model\ReleaseGroupRequest

try {
    $result = $apiInstance->releaseGroup($release_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->releaseGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **release_group_request** | [**\Listenbrainz\Model\ReleaseGroupRequest**](../Model/ReleaseGroupRequest.md)|  | |

### Return type

[**\Listenbrainz\Model\ReleaseGroup200ResponseInner[]**](../Model/ReleaseGroup200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topRecordingsForArtist()`

```php
topRecordingsForArtist($artist_mbid): \Listenbrainz\Model\TopRecordingsForArtistInner[]
```

Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_mbid = 'artist_mbid_example'; // string

try {
    $result = $apiInstance->topRecordingsForArtist($artist_mbid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->topRecordingsForArtist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_mbid** | **string**|  | |

### Return type

[**\Listenbrainz\Model\TopRecordingsForArtistInner[]**](../Model/TopRecordingsForArtistInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topReleaseGroupForArtist()`

```php
topReleaseGroupForArtist($artist_mbid): \Listenbrainz\Model\TopReleaseGroupsForArtistInner[]
```

Get the top release groups by listen count for a given artist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPopularityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_mbid = 'artist_mbid_example'; // string

try {
    $result = $apiInstance->topReleaseGroupForArtist($artist_mbid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPopularityApi->topReleaseGroupForArtist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_mbid** | **string**|  | |

### Return type

[**\Listenbrainz\Model\TopReleaseGroupsForArtistInner[]**](../Model/TopReleaseGroupsForArtistInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
