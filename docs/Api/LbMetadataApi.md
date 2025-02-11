# OpenAPI\Client\LbMetadataApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**artistMetadata()**](LbMetadataApi.md#artistMetadata) | **GET** /1/metadata/artist/ | This endpoint takes in a list of artist_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch. |
| [**getManualMapping()**](LbMetadataApi.md#getManualMapping) | **GET** /1/metadata/get_manual_mapping/ | Get the manual mapping of a recording messybrainz ID that a user added. |
| [**lookup()**](LbMetadataApi.md#lookup) | **GET** /1/metadata/lookup/ | This endpoint looks up mbid metadata for the given artist, recording and optionally a release name. The total number of characters in the artist name, recording name and release name query arguments should be less than or equal to MAX_MAPPING_QUERY_LENGTH. |
| [**recordingMetadata()**](LbMetadataApi.md#recordingMetadata) | **GET** /1/metadata/recording/ | This endpoint takes in a list of recording_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch. |
| [**releaseGroupMetadata()**](LbMetadataApi.md#releaseGroupMetadata) | **GET** /1/metadata/release_group/ | This endpoint takes in a list of release_group_mbids and returns an array of dicts that contain release_group metadata suitable for showing in a context that requires as much detail about a release_group and the artist. Using the inc parameter, you can control which portions of metadata to fetch. |
| [**submitManualMapping()**](LbMetadataApi.md#submitManualMapping) | **POST** /1/metadata/submit_manual_mapping/ | Submit a manual mapping of a recording messybrainz ID to a musicbrainz recording id. |


## `artistMetadata()`

```php
artistMetadata($artist_mbids, $inc): \OpenAPI\Client\Model\ArtistMetadata[]
```

This endpoint takes in a list of artist_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_mbids = array('artist_mbids_example'); // string[] | A comma separated list of recording_mbids.
$inc = 'inc_example'; // string | A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you're interested in fetching. We encourage users to only fetch the data they plan to consume.

try {
    $result = $apiInstance->artistMetadata($artist_mbids, $inc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->artistMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_mbids** | [**string[]**](../Model/string.md)| A comma separated list of recording_mbids. | |
| **inc** | **string**| A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you&#39;re interested in fetching. We encourage users to only fetch the data they plan to consume. | |

### Return type

[**\OpenAPI\Client\Model\ArtistMetadata[]**](../Model/ArtistMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManualMapping()`

```php
getManualMapping($recording_msid): \OpenAPI\Client\Model\GetManualMapping
```

Get the manual mapping of a recording messybrainz ID that a user added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recording_msid = 'recording_msid_example'; // string

try {
    $result = $apiInstance->getManualMapping($recording_msid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->getManualMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_msid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetManualMapping**](../Model/GetManualMapping.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookup()`

```php
lookup($artist_name, $recording_name, $metadata, $inc, $release_name): \OpenAPI\Client\Model\Lookup
```

This endpoint looks up mbid metadata for the given artist, recording and optionally a release name. The total number of characters in the artist name, recording name and release name query arguments should be less than or equal to MAX_MAPPING_QUERY_LENGTH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$artist_name = 'artist_name_example'; // string | Artist name of the listen.
$recording_name = 'recording_name_example'; // string | Track name of the listen.
$metadata = True; // bool | Should extra metadata be also returned if a match is found, see /metadata/recording for details.
$inc = 'inc_example'; // string | A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you're interested in fetching. We encourage users to only fetch the data they plan to consume.
$release_name = 'release_name_example'; // string | Release name of the listen.

try {
    $result = $apiInstance->lookup($artist_name, $recording_name, $metadata, $inc, $release_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->lookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **artist_name** | **string**| Artist name of the listen. | |
| **recording_name** | **string**| Track name of the listen. | |
| **metadata** | **bool**| Should extra metadata be also returned if a match is found, see /metadata/recording for details. | |
| **inc** | **string**| A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you&#39;re interested in fetching. We encourage users to only fetch the data they plan to consume. | |
| **release_name** | **string**| Release name of the listen. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Lookup**](../Model/Lookup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingMetadata()`

```php
recordingMetadata($recording_mbids, $inc): array<string,\OpenAPI\Client\Model\RecordingMetadata>
```

This endpoint takes in a list of recording_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recording_mbids = array('recording_mbids_example'); // string[] | A comma separated list of recording_mbids.
$inc = 'inc_example'; // string | A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you're interested in fetching. We encourage users to only fetch the data they plan to consume.

try {
    $result = $apiInstance->recordingMetadata($recording_mbids, $inc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->recordingMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_mbids** | [**string[]**](../Model/string.md)| A comma separated list of recording_mbids. | |
| **inc** | **string**| A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you&#39;re interested in fetching. We encourage users to only fetch the data they plan to consume. | |

### Return type

[**array<string,\OpenAPI\Client\Model\RecordingMetadata>**](../Model/RecordingMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseGroupMetadata()`

```php
releaseGroupMetadata($release_group_mbids, $inc): array<string,\OpenAPI\Client\Model\ReleaseGroupMetadata>
```

This endpoint takes in a list of release_group_mbids and returns an array of dicts that contain release_group metadata suitable for showing in a context that requires as much detail about a release_group and the artist. Using the inc parameter, you can control which portions of metadata to fetch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_group_mbids = array('release_group_mbids_example'); // string[] | A comma separated list of release_group_mbids.
$inc = 'inc_example'; // string | A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you're interested in fetching. We encourage users to only fetch the data they plan to consume.

try {
    $result = $apiInstance->releaseGroupMetadata($release_group_mbids, $inc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->releaseGroupMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **release_group_mbids** | [**string[]**](../Model/string.md)| A comma separated list of release_group_mbids. | |
| **inc** | **string**| A space separated list of “artist”, “tag” and/or “release” to indicate which portions of metadata you&#39;re interested in fetching. We encourage users to only fetch the data they plan to consume. | |

### Return type

[**array<string,\OpenAPI\Client\Model\ReleaseGroupMetadata>**](../Model/ReleaseGroupMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitManualMapping()`

```php
submitManualMapping($submit_manual_mapping)
```

Submit a manual mapping of a recording messybrainz ID to a musicbrainz recording id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_manual_mapping = new \OpenAPI\Client\Model\SubmitManualMapping(); // \OpenAPI\Client\Model\SubmitManualMapping

try {
    $apiInstance->submitManualMapping($submit_manual_mapping);
} catch (Exception $e) {
    echo 'Exception when calling LbMetadataApi->submitManualMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_manual_mapping** | [**\OpenAPI\Client\Model\SubmitManualMapping**](../Model/SubmitManualMapping.md)|  | |

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
