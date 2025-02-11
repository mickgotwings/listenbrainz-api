# Listenbrainz\LbCoreApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteListen()**](LbCoreApi.md#deleteListen) | **POST** /1/delete-listen | Delete a particular listen from a user&#39;s listen history. |
| [**latestImport()**](LbCoreApi.md#latestImport) | **GET** /1/latest-import | Get the timestamp of the newest listen submitted by a user in previous imports to ListenBrainz. |
| [**lbRadioRecordingsForArtist()**](LbCoreApi.md#lbRadioRecordingsForArtist) | **GET** /1/lb-radio/artist/{seed_artist_mbid} | Get recordings for use in LB radio with the given seed artist. The endpoint returns a dict of all the similar artists, including the seed artist. For each artists, there will be a list of dicts that contain recording_mbid, similar_artist_mbid and total_listen_count. |
| [**lbRadioTags()**](LbCoreApi.md#lbRadioTags) | **GET** /1/lb-radio/tags | Get recordings for use in LB radio with the specified tags that match the requested criteria. |
| [**listenCountForUser()**](LbCoreApi.md#listenCountForUser) | **GET** /1/user/{user_name}/listen-count | Get the number of listens for a user &#39;user_name&#39;. |
| [**listensForUser()**](LbCoreApi.md#listensForUser) | **GET** /1/user/{user_name}/listens | Get listens for user &#39;user_name&#39;. |
| [**playingNowForUser()**](LbCoreApi.md#playingNowForUser) | **GET** /1/user/{user_name}/playing-now | Get the listen being played right now for user &#39;user_name&#39; |
| [**recommendationPlaylistsForUser()**](LbCoreApi.md#recommendationPlaylistsForUser) | **GET** /1/user/{playlist_user_name}/playlists/recommendations | Fetch recommendation playlist metadata in JSPF format without recordings for &#39;playlist_user_name&#39;. This endpoint only lists playlists that are to be shown on the listenbrainz.org recommendations pages. |
| [**searchPlaylistForUser()**](LbCoreApi.md#searchPlaylistForUser) | **GET** /1/user/{playlist_user_name}/playlists/search | Search for a playlist by name for a user. |
| [**searchUsers()**](LbCoreApi.md#searchUsers) | **GET** /1/search/users | Search a ListenBrainz-registered user. |
| [**servicesForUser()**](LbCoreApi.md#servicesForUser) | **GET** /1/user/{user_name}/services | Get list of services which are connected to a given user&#39;s account. |
| [**similarUsersForUser()**](LbCoreApi.md#similarUsersForUser) | **GET** /1/user/{user_name}/similar-users | Get the listen being played right now for user &#39;user_name&#39;. |
| [**similarityOfUserForUser()**](LbCoreApi.md#similarityOfUserForUser) | **GET** /1/user/{user_name}/similar-to/{other_user_name} | Get the similarity of &#39;user_name&#39; and &#39;other_user_name&#39;, based on their listening history. |
| [**submitListens()**](LbCoreApi.md#submitListens) | **POST** /1/submit-listens | Submit listens to the server. |
| [**validateToken()**](LbCoreApi.md#validateToken) | **GET** /1/validate-token | Check whether a User Token is a valid entry in the database. |


## `deleteListen()`

```php
deleteListen($delete_listen)
```

Delete a particular listen from a user's listen history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_listen = new \Listenbrainz\Model\DeleteListen(); // \Listenbrainz\Model\DeleteListen

try {
    $apiInstance->deleteListen($delete_listen);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->deleteListen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_listen** | [**\Listenbrainz\Model\DeleteListen**](../Model/DeleteListen.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `latestImport()`

```php
latestImport($user_name): \Listenbrainz\Model\LatestImport
```

Get the timestamp of the newest listen submitted by a user in previous imports to ListenBrainz.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_name = 'user_name_example'; // string | The MusicBrainz ID of the user whose data is needed.

try {
    $result = $apiInstance->latestImport($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->latestImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**| The MusicBrainz ID of the user whose data is needed. | |

### Return type

[**\Listenbrainz\Model\LatestImport**](../Model/LatestImport.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lbRadioRecordingsForArtist()`

```php
lbRadioRecordingsForArtist($seed_artist_mbid, $mode, $max_similar_artists, $max_recordings_per_artist, $pop_begin, $pop_end): array<string,\Listenbrainz\Model\LbRadioRecordingsForArtistValueInner[]>
```

Get recordings for use in LB radio with the given seed artist. The endpoint returns a dict of all the similar artists, including the seed artist. For each artists, there will be a list of dicts that contain recording_mbid, similar_artist_mbid and total_listen_count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seed_artist_mbid = 'seed_artist_mbid_example'; // string
$mode = new \Listenbrainz\Model\\Listenbrainz\Model\Mode(); // \Listenbrainz\Model\Mode | The mode that LB radio should use. Must be easy, medium or hard.
$max_similar_artists = 56; // int | The maximum number of similar artists to return recordings for.
$max_recordings_per_artist = 56; // int | The maximum number of recordings to return for each artist. If there are aren’t enough recordings, all available recordings will be returned.
$pop_begin = 56; // int | Popularity range percentage lower bound. A popularity range is given to narrow down the recordings into a smaller target group. The most popular recording(s) on LB have a pop percent of 100. The least popular recordings have a score of 0. This range is not coupled to the specified mode, but the mode would often determine the popularity range, so that less popular recordings can be returned on the medium and harder modes.
$pop_end = 56; // int | Popularity range percentage upper bound.

try {
    $result = $apiInstance->lbRadioRecordingsForArtist($seed_artist_mbid, $mode, $max_similar_artists, $max_recordings_per_artist, $pop_begin, $pop_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->lbRadioRecordingsForArtist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seed_artist_mbid** | **string**|  | |
| **mode** | [**\Listenbrainz\Model\Mode**](../Model/.md)| The mode that LB radio should use. Must be easy, medium or hard. | |
| **max_similar_artists** | **int**| The maximum number of similar artists to return recordings for. | |
| **max_recordings_per_artist** | **int**| The maximum number of recordings to return for each artist. If there are aren’t enough recordings, all available recordings will be returned. | |
| **pop_begin** | **int**| Popularity range percentage lower bound. A popularity range is given to narrow down the recordings into a smaller target group. The most popular recording(s) on LB have a pop percent of 100. The least popular recordings have a score of 0. This range is not coupled to the specified mode, but the mode would often determine the popularity range, so that less popular recordings can be returned on the medium and harder modes. | |
| **pop_end** | **int**| Popularity range percentage upper bound. | |

### Return type

**array<string,\Listenbrainz\Model\LbRadioRecordingsForArtistValueInner[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lbRadioTags()`

```php
lbRadioTags($tag, $pop_begin, $pop_end, $count, $operator): \Listenbrainz\Model\LbRadioTagsInner[]
```

Get recordings for use in LB radio with the specified tags that match the requested criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 'tag_example'; // string | The MusicBrainz tag to fetch recordings for, this parameter can be specified multiple times. if more than one tag is specified, the operator param should also be specified.
$pop_begin = 56; // int | Popularity range percentage lower bound. A popularity range is given to narrow down the recordings into a smaller target group. The most popular recording(s) on LB have a pop percent of 100. The least popular recordings have a score of 0. This range is not coupled to the specified mode, but the mode would often determine the popularity range, so that less popular recordings can be returned on the medium and harder modes.
$pop_end = 56; // int | Popularity range percentage upper bound.
$count = 25; // int | Optional, number of listens to return.
$operator = new \Listenbrainz\Model\\Listenbrainz\Model\Operator(); // \Listenbrainz\Model\Operator | Specify AND to retrieve recordings that have all the tags, otherwise specify OR to retrieve recordings that have any one of the tags.

try {
    $result = $apiInstance->lbRadioTags($tag, $pop_begin, $pop_end, $count, $operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->lbRadioTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag** | **string**| The MusicBrainz tag to fetch recordings for, this parameter can be specified multiple times. if more than one tag is specified, the operator param should also be specified. | |
| **pop_begin** | **int**| Popularity range percentage lower bound. A popularity range is given to narrow down the recordings into a smaller target group. The most popular recording(s) on LB have a pop percent of 100. The least popular recordings have a score of 0. This range is not coupled to the specified mode, but the mode would often determine the popularity range, so that less popular recordings can be returned on the medium and harder modes. | |
| **pop_end** | **int**| Popularity range percentage upper bound. | |
| **count** | **int**| Optional, number of listens to return. | [default to 25] |
| **operator** | [**\Listenbrainz\Model\Operator**](../Model/.md)| Specify AND to retrieve recordings that have all the tags, otherwise specify OR to retrieve recordings that have any one of the tags. | [optional] |

### Return type

[**\Listenbrainz\Model\LbRadioTagsInner[]**](../Model/LbRadioTagsInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listenCountForUser()`

```php
listenCountForUser($user_name): \Listenbrainz\Model\ListenCountForUser
```

Get the number of listens for a user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string

try {
    $result = $apiInstance->listenCountForUser($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->listenCountForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\ListenCountForUser**](../Model/ListenCountForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listensForUser()`

```php
listensForUser($user_name, $max_ts, $min_ts, $count): \Listenbrainz\Model\ListensForUser
```

Get listens for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$max_ts = 56; // int | If you specify a 'max_ts' timestamp, listens with listened_at less than (but not including) this value will be returned.
$min_ts = 56; // int | If you specify a 'min_ts' timestamp, listens with listened_at greater than (but not including) this value will be returned.
$count = 25; // int | Optional, number of listens to return.

try {
    $result = $apiInstance->listensForUser($user_name, $max_ts, $min_ts, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->listensForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **max_ts** | **int**| If you specify a &#39;max_ts&#39; timestamp, listens with listened_at less than (but not including) this value will be returned. | [optional] |
| **min_ts** | **int**| If you specify a &#39;min_ts&#39; timestamp, listens with listened_at greater than (but not including) this value will be returned. | [optional] |
| **count** | **int**| Optional, number of listens to return. | [optional] [default to 25] |

### Return type

[**\Listenbrainz\Model\ListensForUser**](../Model/ListensForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playingNowForUser()`

```php
playingNowForUser($user_name): \Listenbrainz\Model\PlayingNowForUser
```

Get the listen being played right now for user 'user_name'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string

try {
    $result = $apiInstance->playingNowForUser($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->playingNowForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\PlayingNowForUser**](../Model/PlayingNowForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recommendationPlaylistsForUser()`

```php
recommendationPlaylistsForUser($playlist_user_name): \Listenbrainz\Model\Playlists
```

Fetch recommendation playlist metadata in JSPF format without recordings for 'playlist_user_name'. This endpoint only lists playlists that are to be shown on the listenbrainz.org recommendations pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_user_name = 'playlist_user_name_example'; // string

try {
    $result = $apiInstance->recommendationPlaylistsForUser($playlist_user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->recommendationPlaylistsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\Playlists**](../Model/Playlists.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPlaylistForUser()`

```php
searchPlaylistForUser($playlist_user_name, $query, $count, $offset): \Listenbrainz\Model\Playlists
```

Search for a playlist by name for a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_user_name = 'playlist_user_name_example'; // string
$query = 'query_example'; // string
$count = 25; // int | The number of playlists to return (for pagination).
$offset = 56; // int | The offset of into the list of playlists to return (for pagination).

try {
    $result = $apiInstance->searchPlaylistForUser($playlist_user_name, $query, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->searchPlaylistForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_user_name** | **string**|  | |
| **query** | **string**|  | |
| **count** | **int**| The number of playlists to return (for pagination). | [optional] [default to 25] |
| **offset** | **int**| The offset of into the list of playlists to return (for pagination). | [optional] |

### Return type

[**\Listenbrainz\Model\Playlists**](../Model/Playlists.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUsers()`

```php
searchUsers($search_term): \Listenbrainz\Model\SearchUsers
```

Search a ListenBrainz-registered user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_term = 'search_term_example'; // string | Input on which search operation is to be performed.

try {
    $result = $apiInstance->searchUsers($search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_term** | **string**| Input on which search operation is to be performed. | |

### Return type

[**\Listenbrainz\Model\SearchUsers**](../Model/SearchUsers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesForUser()`

```php
servicesForUser($user_name): \Listenbrainz\Model\ServicesForUser
```

Get list of services which are connected to a given user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_name = 'user_name_example'; // string

try {
    $result = $apiInstance->servicesForUser($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->servicesForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\ServicesForUser**](../Model/ServicesForUser.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarUsersForUser()`

```php
similarUsersForUser($user_name): \Listenbrainz\Model\SimilarUsersForUser
```

Get the listen being played right now for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string

try {
    $result = $apiInstance->similarUsersForUser($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->similarUsersForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\SimilarUsersForUser**](../Model/SimilarUsersForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarityOfUserForUser()`

```php
similarityOfUserForUser($user_name, $other_user_name): \Listenbrainz\Model\SimilarityOfUserForUser
```

Get the similarity of 'user_name' and 'other_user_name', based on their listening history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$other_user_name = 'other_user_name_example'; // string

try {
    $result = $apiInstance->similarityOfUserForUser($user_name, $other_user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->similarityOfUserForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **other_user_name** | **string**|  | |

### Return type

[**\Listenbrainz\Model\SimilarityOfUserForUser**](../Model/SimilarityOfUserForUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitListens()`

```php
submitListens($submit_listens)
```

Submit listens to the server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_listens = new \Listenbrainz\Model\SubmitListens(); // \Listenbrainz\Model\SubmitListens

try {
    $apiInstance->submitListens($submit_listens);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->submitListens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_listens** | [**\Listenbrainz\Model\SubmitListens**](../Model/SubmitListens.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateToken()`

```php
validateToken(): \Listenbrainz\Model\ValidateToken
```

Check whether a User Token is a valid entry in the database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbCoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->validateToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbCoreApi->validateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Listenbrainz\Model\ValidateToken**](../Model/ValidateToken.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
