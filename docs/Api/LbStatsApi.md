# OpenAPI\Client\LbStatsApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**artistMapForUser()**](LbStatsApi.md#artistMapForUser) | **GET** /1/stats/user/{user_name}/artist-map | Get the artist map for user &#39;user_name&#39;. |
| [**dailyActivityForUser()**](LbStatsApi.md#dailyActivityForUser) | **GET** /1/stats/user/{user_name}/daily-activity | Get the daily activity for user &#39;user_name&#39;. |
| [**listenersForArtist()**](LbStatsApi.md#listenersForArtist) | **GET** /1/stats/artist/{artist_mbid}/listeners | Get top listeners for artist &#39;artist_mbid&#39;. |
| [**listenersForReleaseGroup()**](LbStatsApi.md#listenersForReleaseGroup) | **GET** /1/stats/release-group/{release_group_mbid}/listeners | Get top listeners for release group &#39;release_group_mbid&#39;. |
| [**listeningActivityForUser()**](LbStatsApi.md#listeningActivityForUser) | **GET** /1/stats/user/{user_name}/listening-activity | Get the listening activity for user &#39;user_name&#39;. |
| [**sitewideArtistMap()**](LbStatsApi.md#sitewideArtistMap) | **GET** /1/stats/sitewide/artist-map | Get sitewide top recordings. |
| [**sitewideListeningActivity()**](LbStatsApi.md#sitewideListeningActivity) | **GET** /1/stats/sitewide/listening-activity | Get sitewide top recordings. |
| [**sitewideTopArtists()**](LbStatsApi.md#sitewideTopArtists) | **GET** /1/stats/sitewide/artists | Get sitewide top artists. |
| [**sitewideTopRecordings()**](LbStatsApi.md#sitewideTopRecordings) | **GET** /1/stats/sitewide/recordings | Get sitewide top recordings. |
| [**sitewideTopReleaseGroups()**](LbStatsApi.md#sitewideTopReleaseGroups) | **GET** /1/stats/sitewide/release-groups | Get sitewide top release groups. |
| [**sitewideTopReleases()**](LbStatsApi.md#sitewideTopReleases) | **GET** /1/stats/sitewide/releases | Get sitewide top releases. |
| [**topArtistsForUser()**](LbStatsApi.md#topArtistsForUser) | **GET** /1/stats/user/{user_name}/artists | Get top artists for user &#39;user_name&#39;. |
| [**topRecordingsForUser()**](LbStatsApi.md#topRecordingsForUser) | **GET** /1/stats/user/{user_name}/recordings | Get top recordings for user &#39;user_name&#39;. |
| [**topReleaseGroupsForUser()**](LbStatsApi.md#topReleaseGroupsForUser) | **GET** /1/stats/user/{user_name}/release-groups | Get top release groups for user &#39;user_name&#39;. |
| [**topReleasesForUser()**](LbStatsApi.md#topReleasesForUser) | **GET** /1/stats/user/{user_name}/releases | Get top releases for user &#39;user_name&#39;. |
| [**yearInMusicForUser()**](LbStatsApi.md#yearInMusicForUser) | **GET** /1/stats/user/{user_name}/year-in-music/{year} | Get sitewide top recordings. |


## `artistMapForUser()`

```php
artistMapForUser($user_name, $range, $force_recalculate): \OpenAPI\Client\Model\ArtistMapForUser
```

Get the artist map for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange
$force_recalculate = false; // bool | Optional, recalculate the data instead of returning the cached result.

try {
    $result = $apiInstance->artistMapForUser($user_name, $range, $force_recalculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->artistMapForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |
| **force_recalculate** | **bool**| Optional, recalculate the data instead of returning the cached result. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ArtistMapForUser**](../Model/ArtistMapForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dailyActivityForUser()`

```php
dailyActivityForUser($user_name, $range): \OpenAPI\Client\Model\DailyActivityForUser
```

Get the daily activity for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->dailyActivityForUser($user_name, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->dailyActivityForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DailyActivityForUser**](../Model/DailyActivityForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listenersForArtist()`

```php
listenersForArtist($artist_mbid, $range): \OpenAPI\Client\Model\ListenersForArtist
```

Get top listeners for artist 'artist_mbid'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_mbid = 'artist_mbid_example'; // string
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->listenersForArtist($artist_mbid, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->listenersForArtist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_mbid** | **string**|  | |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListenersForArtist**](../Model/ListenersForArtist.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listenersForReleaseGroup()`

```php
listenersForReleaseGroup($release_group_mbid, $range): \OpenAPI\Client\Model\ListenersForReleaseGroup
```

Get top listeners for release group 'release_group_mbid'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_group_mbid = 'release_group_mbid_example'; // string
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->listenersForReleaseGroup($release_group_mbid, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->listenersForReleaseGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **release_group_mbid** | **string**|  | |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListenersForReleaseGroup**](../Model/ListenersForReleaseGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listeningActivityForUser()`

```php
listeningActivityForUser($user_name, $range): \OpenAPI\Client\Model\ListeningActivityForUser
```

Get the listening activity for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->listeningActivityForUser($user_name, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->listeningActivityForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListeningActivityForUser**](../Model/ListeningActivityForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideArtistMap()`

```php
sitewideArtistMap($range, $force_recalculate): \OpenAPI\Client\Model\SitewideArtistMap
```

Get sitewide top recordings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange
$force_recalculate = false; // bool | Optional, recalculate the data instead of returning the cached result.

try {
    $result = $apiInstance->sitewideArtistMap($range, $force_recalculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideArtistMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |
| **force_recalculate** | **bool**| Optional, recalculate the data instead of returning the cached result. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\SitewideArtistMap**](../Model/SitewideArtistMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideListeningActivity()`

```php
sitewideListeningActivity($range): \OpenAPI\Client\Model\SitewideListeningActivity
```

Get sitewide top recordings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->sitewideListeningActivity($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideListeningActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SitewideListeningActivity**](../Model/SitewideListeningActivity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideTopArtists()`

```php
sitewideTopArtists($count, $offset, $range): \OpenAPI\Client\Model\SitewideTopArtists
```

Get sitewide top artists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->sitewideTopArtists($count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideTopArtists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SitewideTopArtists**](../Model/SitewideTopArtists.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideTopRecordings()`

```php
sitewideTopRecordings($count, $offset, $range): \OpenAPI\Client\Model\SitewideTopRecordings
```

Get sitewide top recordings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->sitewideTopRecordings($count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideTopRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SitewideTopRecordings**](../Model/SitewideTopRecordings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideTopReleaseGroups()`

```php
sitewideTopReleaseGroups($count, $offset, $range): \OpenAPI\Client\Model\SitewideTopReleaseGroups
```

Get sitewide top release groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->sitewideTopReleaseGroups($count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideTopReleaseGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SitewideTopReleaseGroups**](../Model/SitewideTopReleaseGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sitewideTopReleases()`

```php
sitewideTopReleases($count, $offset, $range): \OpenAPI\Client\Model\SitewideTopReleases
```

Get sitewide top releases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->sitewideTopReleases($count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->sitewideTopReleases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SitewideTopReleases**](../Model/SitewideTopReleases.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topArtistsForUser()`

```php
topArtistsForUser($user_name, $count, $offset, $range): \OpenAPI\Client\Model\TopArtistsForUser
```

Get top artists for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->topArtistsForUser($user_name, $count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->topArtistsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TopArtistsForUser**](../Model/TopArtistsForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topRecordingsForUser()`

```php
topRecordingsForUser($user_name, $count, $offset, $range): \OpenAPI\Client\Model\TopRecordingsForUser
```

Get top recordings for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->topRecordingsForUser($user_name, $count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->topRecordingsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TopRecordingsForUser**](../Model/TopRecordingsForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topReleaseGroupsForUser()`

```php
topReleaseGroupsForUser($user_name, $count, $offset, $range): \OpenAPI\Client\Model\TopReleaseGroupsForUser
```

Get top release groups for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->topReleaseGroupsForUser($user_name, $count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->topReleaseGroupsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TopReleaseGroupsForUser**](../Model/TopReleaseGroupsForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topReleasesForUser()`

```php
topReleasesForUser($user_name, $count, $offset, $range): \OpenAPI\Client\Model\TopReleasesForUser
```

Get top releases for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int
$range = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AllowedStatisticsRange(); // \OpenAPI\Client\Model\AllowedStatisticsRange

try {
    $result = $apiInstance->topReleasesForUser($user_name, $count, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->topReleasesForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **range** | [**\OpenAPI\Client\Model\AllowedStatisticsRange**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TopReleasesForUser**](../Model/TopReleasesForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `yearInMusicForUser()`

```php
yearInMusicForUser($user_name, $year): \OpenAPI\Client\Model\YearInMusicForUser
```

Get sitewide top recordings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$year = 56; // int

try {
    $result = $apiInstance->yearInMusicForUser($user_name, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbStatsApi->yearInMusicForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **year** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\YearInMusicForUser**](../Model/YearInMusicForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
