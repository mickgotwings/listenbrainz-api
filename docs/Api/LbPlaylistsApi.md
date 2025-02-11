# Listenbrainz\LbPlaylistsApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appendRecordings()**](LbPlaylistsApi.md#appendRecordings) | **POST** /1/playlist/{playlist_mbid}/item/add/{offset} | Append recordings to an existing playlist by posting a playlist with one of more recordings in it. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf .  If the offset is provided in the URL, then the recordings will be added at that offset, otherwise they will be added at the end of the playlist. |
| [**copyPlaylist()**](LbPlaylistsApi.md#copyPlaylist) | **POST** /1/playlist/{playlist_mbid}/copy | Copy a playlist - the new playlist will be given the name “Copy of &lt;playlist_name&gt;”. POST body data does not need to contain anything. |
| [**createPlaylist()**](LbPlaylistsApi.md#createPlaylist) | **POST** /1/playlist/create | Create a playlist |
| [**deletePlaylist()**](LbPlaylistsApi.md#deletePlaylist) | **POST** /1/playlist/{playlist_mbid}/delete | Delete a playlist. |
| [**editPlaylist()**](LbPlaylistsApi.md#editPlaylist) | **POST** /1/playlist/edit/{playlist_mbid} | Create a playlist. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf . To create an empty playlist, you can send an empty playlist with only the title field filled out. If you would like to create a playlist populated with recordings, each of the track items in the playlist must have an identifier element that contains the MusicBrainz recording that includes the recording MBID.  When creating a playlist, only the playlist title and the track identifier elements will be used - all other elements in the posted JSPF wil be ignored.  If a created_for field is found and the user is not an approved playlist bot, then a 403 forbidden will be raised. |
| [**fetchPlaylist()**](LbPlaylistsApi.md#fetchPlaylist) | **GET** /1/playlist/{playlist_mbid} | Fetch the given playlist. |
| [**itemDelete()**](LbPlaylistsApi.md#itemDelete) | **POST** /1/playlist/{playlist_mbid}/item/delete | Delete an item in a playlist. |
| [**moveItem()**](LbPlaylistsApi.md#moveItem) | **POST** /1/playlist/{playlist_mbid}/item/move | To move an item in a playlist, the POST data needs to specify the recording MBID and current index of the track to move (from), where to move it to (to) and how many tracks from that position should be moved (count). |
| [**playlistsCreatedForUser()**](LbPlaylistsApi.md#playlistsCreatedForUser) | **GET** /1/user/{playlist_user_name}/playlists/createdfor | Fetch playlist metadata in JSPF format without recordings that have been created for the user. |
| [**playlistsForUser()**](LbPlaylistsApi.md#playlistsForUser) | **GET** /1/user/{playlist_user_name}/playlists | Fetch playlist metadata in JSPF format without recordings for the given user. |
| [**playlistsForUserCollaborator()**](LbPlaylistsApi.md#playlistsForUserCollaborator) | **GET** /1/user/{playlist_user_name}/playlists/collaborator | Fetch playlist metadata in JSPF format without recordings for which a user is a collaborator. If a playlist is private, it will only be returned if the caller is authorized to edit that playlist. |
| [**searchPlaylists()**](LbPlaylistsApi.md#searchPlaylists) | **GET** /1/playlist/search | Search for playlists by name or description. The search query must be at least 3 characters long. |


## `appendRecordings()`

```php
appendRecordings($playlist_mbid, $offset, $playlist)
```

Append recordings to an existing playlist by posting a playlist with one of more recordings in it. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf .  If the offset is provided in the URL, then the recordings will be added at that offset, otherwise they will be added at the end of the playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to append to.
$offset = 56; // int | Offset.
$playlist = new \Listenbrainz\Model\Playlist(); // \Listenbrainz\Model\Playlist

try {
    $apiInstance->appendRecordings($playlist_mbid, $offset, $playlist);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->appendRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to append to. | |
| **offset** | **int**| Offset. | |
| **playlist** | [**\Listenbrainz\Model\Playlist**](../Model/Playlist.md)|  | |

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

## `copyPlaylist()`

```php
copyPlaylist($playlist_mbid)
```

Copy a playlist - the new playlist will be given the name “Copy of <playlist_name>”. POST body data does not need to contain anything.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to append to.

try {
    $apiInstance->copyPlaylist($playlist_mbid);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->copyPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to append to. | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPlaylist()`

```php
createPlaylist($create_playlist_request): \Listenbrainz\Model\CreatePlaylist200Response
```

Create a playlist

Create a playlist. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf . To create an empty playlist, you can send an empty playlist with only the title field filled out. If you would like to create a playlist populated with recordings, each of the track items in the playlist must have an identifier element that contains the MusicBrainz recording that includes the recording MBID.  When creating a playlist, only the playlist title and the track identifier elements will be used - all other elements in the posted JSPF wil be ignored.  If a created_for field is found and the user is not an approved playlist bot, then a 403 forbidden will be raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_playlist_request = new \Listenbrainz\Model\CreatePlaylistRequest(); // \Listenbrainz\Model\CreatePlaylistRequest

try {
    $result = $apiInstance->createPlaylist($create_playlist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->createPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_playlist_request** | [**\Listenbrainz\Model\CreatePlaylistRequest**](../Model/CreatePlaylistRequest.md)|  | |

### Return type

[**\Listenbrainz\Model\CreatePlaylist200Response**](../Model/CreatePlaylist200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlaylist()`

```php
deletePlaylist($playlist_mbid)
```

Delete a playlist.

POST body data does not need to contain anything.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to fetch.

try {
    $apiInstance->deletePlaylist($playlist_mbid);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->deletePlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to fetch. | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editPlaylist()`

```php
editPlaylist($playlist_mbid, $create_playlist_request)
```

Create a playlist. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf . To create an empty playlist, you can send an empty playlist with only the title field filled out. If you would like to create a playlist populated with recordings, each of the track items in the playlist must have an identifier element that contains the MusicBrainz recording that includes the recording MBID.  When creating a playlist, only the playlist title and the track identifier elements will be used - all other elements in the posted JSPF wil be ignored.  If a created_for field is found and the user is not an approved playlist bot, then a 403 forbidden will be raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to edit.
$create_playlist_request = new \Listenbrainz\Model\CreatePlaylistRequest(); // \Listenbrainz\Model\CreatePlaylistRequest

try {
    $apiInstance->editPlaylist($playlist_mbid, $create_playlist_request);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->editPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to edit. | |
| **create_playlist_request** | [**\Listenbrainz\Model\CreatePlaylistRequest**](../Model/CreatePlaylistRequest.md)|  | |

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

## `fetchPlaylist()`

```php
fetchPlaylist($playlist_mbid, $fetch_metadata): \Listenbrainz\Model\CreatePlaylistRequest
```

Fetch the given playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to fetch.
$fetch_metadata = True; // bool | Optional, pass value ‘false' to skip lookup up recording metadata.

try {
    $result = $apiInstance->fetchPlaylist($playlist_mbid, $fetch_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->fetchPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to fetch. | |
| **fetch_metadata** | **bool**| Optional, pass value ‘false&#39; to skip lookup up recording metadata. | [optional] |

### Return type

[**\Listenbrainz\Model\CreatePlaylistRequest**](../Model/CreatePlaylistRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemDelete()`

```php
itemDelete($playlist_mbid, $item_delete_request)
```

Delete an item in a playlist.

To delete an item in a playlist, the POST data needs to specify the recording MBID and current index of the track to delete, and how many tracks from that position should be moved deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to fetch.
$item_delete_request = new \Listenbrainz\Model\ItemDeleteRequest(); // \Listenbrainz\Model\ItemDeleteRequest

try {
    $apiInstance->itemDelete($playlist_mbid, $item_delete_request);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->itemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to fetch. | |
| **item_delete_request** | [**\Listenbrainz\Model\ItemDeleteRequest**](../Model/ItemDeleteRequest.md)|  | |

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

## `moveItem()`

```php
moveItem($playlist_mbid, $move_item_request)
```

To move an item in a playlist, the POST data needs to specify the recording MBID and current index of the track to move (from), where to move it to (to) and how many tracks from that position should be moved (count).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Listenbrainz\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_mbid = 'playlist_mbid_example'; // string | The playlist mbid to append to.
$move_item_request = new \Listenbrainz\Model\MoveItemRequest(); // \Listenbrainz\Model\MoveItemRequest

try {
    $apiInstance->moveItem($playlist_mbid, $move_item_request);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->moveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_mbid** | **string**| The playlist mbid to append to. | |
| **move_item_request** | [**\Listenbrainz\Model\MoveItemRequest**](../Model/MoveItemRequest.md)|  | |

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

## `playlistsCreatedForUser()`

```php
playlistsCreatedForUser($playlist_user_name, $count, $offset): \Listenbrainz\Model\Playlists
```

Fetch playlist metadata in JSPF format without recordings that have been created for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_user_name = 'playlist_user_name_example'; // string
$count = 25; // int
$offset = 56; // int

try {
    $result = $apiInstance->playlistsCreatedForUser($playlist_user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->playlistsCreatedForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] |

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

## `playlistsForUser()`

```php
playlistsForUser($playlist_user_name, $count, $offset): \Listenbrainz\Model\Playlists
```

Fetch playlist metadata in JSPF format without recordings for the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_user_name = 'playlist_user_name_example'; // string
$count = 25; // int
$offset = 56; // int

try {
    $result = $apiInstance->playlistsForUser($playlist_user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->playlistsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] |

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

## `playlistsForUserCollaborator()`

```php
playlistsForUserCollaborator($playlist_user_name, $count, $offset): \Listenbrainz\Model\Playlists
```

Fetch playlist metadata in JSPF format without recordings for which a user is a collaborator. If a playlist is private, it will only be returned if the caller is authorized to edit that playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$playlist_user_name = 'playlist_user_name_example'; // string
$count = 25; // int
$offset = 56; // int

try {
    $result = $apiInstance->playlistsForUserCollaborator($playlist_user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->playlistsForUserCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] |

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

## `searchPlaylists()`

```php
searchPlaylists($query): \Listenbrainz\Model\Playlists
```

Search for playlists by name or description. The search query must be at least 3 characters long.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Listenbrainz\Api\LbPlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = 'query_example'; // string

try {
    $result = $apiInstance->searchPlaylists($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbPlaylistsApi->searchPlaylists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | |

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
