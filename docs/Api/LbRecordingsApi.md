# OpenAPI\Client\LbRecordingsApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFeedback()**](LbRecordingsApi.md#getFeedback) | **GET** /1/feedback/user/{user_name}/get-feedback | Get feedback given by user &#39;user_name&#39;. The format for the JSON returned is defined in our Feedback JSON Documentation.  If the optional argument score is not given, this endpoint will return all the feedback submitted by the user. Otherwise filters the feedback to be returned by score. |
| [**getFeedbackForRecordings()**](LbRecordingsApi.md#getFeedbackForRecordings) | **GET** /1/feedback/user/{user_name}/get-feedback-for-recordings | Get feedback given by user user_name for the list of recordings supplied. |
| [**getFeedbackMbid()**](LbRecordingsApi.md#getFeedbackMbid) | **GET** /1/feedback/recording/{recording_mbid}/get-feedback-mbid | Get feedback for recording with given recording_mbid. |
| [**getFeedbackMsid()**](LbRecordingsApi.md#getFeedbackMsid) | **GET** /1/feedback/user/{recording_msid}/get-feedback | Get feedback for recording with given recording_msid. |
| [**getPins()**](LbRecordingsApi.md#getPins) | **GET** /1/{user_name}/pins | Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned. |
| [**getPinsCurrent()**](LbRecordingsApi.md#getPinsCurrent) | **GET** /1/{user_name}/pins/current | Get the currently pinned recording by a user with given user_name. |
| [**getPinsFollowing()**](LbRecordingsApi.md#getPinsFollowing) | **GET** /1/{user_name}/pins/following | Get a list containing the active pinned recordings for all users in a user&#39;s user_name following list. The returned pinned recordings are sorted in descending order of the time they were pinned. |
| [**pin()**](LbRecordingsApi.md#pin) | **POST** /1/pin | Pin a recording for user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload. |
| [**pinDelete()**](LbRecordingsApi.md#pinDelete) | **POST** /1/pin/delete/{row_id} | Deletes the pinned recording with given row_id from the server. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! |
| [**recordingFeedback()**](LbRecordingsApi.md#recordingFeedback) | **POST** /1/feedback/recording-feedback | Submit recording feedback (love/hate) to the server. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload. |
| [**unpin()**](LbRecordingsApi.md#unpin) | **POST** /1/unpin | Unpins the currently active pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! |
| [**updatePin()**](LbRecordingsApi.md#updatePin) | **POST** /1/pin/update/{row_id} | Updates the blurb content of a pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload. |


## `getFeedback()`

```php
getFeedback($user_name, $score, $count, $offset, $metadata): \OpenAPI\Client\Model\FeedbackResponse
```

Get feedback given by user 'user_name'. The format for the JSON returned is defined in our Feedback JSON Documentation.  If the optional argument score is not given, this endpoint will return all the feedback submitted by the user. Otherwise filters the feedback to be returned by score.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$score = 56; // int
$count = 25; // int
$offset = 0; // int
$metadata = 'metadata_example'; // string

try {
    $result = $apiInstance->getFeedback($user_name, $score, $count, $offset, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **score** | **int**|  | [optional] |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |
| **metadata** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedbackForRecordings()`

```php
getFeedbackForRecordings($user_name, $recording_msids, $recording_mbids): \OpenAPI\Client\Model\FeedbackResponse
```

Get feedback given by user user_name for the list of recordings supplied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$recording_msids = array('recording_msids_example'); // string[] | Comma separated list of recording_msids for which feedback records are to be fetched.
$recording_mbids = array('recording_mbids_example'); // string[] | Comma separated list of recording_mbids for which feedback records are to be fetched.

try {
    $result = $apiInstance->getFeedbackForRecordings($user_name, $recording_msids, $recording_mbids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getFeedbackForRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **recording_msids** | [**string[]**](../Model/string.md)| Comma separated list of recording_msids for which feedback records are to be fetched. | [optional] |
| **recording_mbids** | [**string[]**](../Model/string.md)| Comma separated list of recording_mbids for which feedback records are to be fetched. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedbackMbid()`

```php
getFeedbackMbid($recording_mbid, $score, $count, $offset): \OpenAPI\Client\Model\FeedbackResponse
```

Get feedback for recording with given recording_mbid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recording_mbid = 'recording_mbid_example'; // string
$score = 56; // int
$count = 25; // int
$offset = 0; // int

try {
    $result = $apiInstance->getFeedbackMbid($recording_mbid, $score, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getFeedbackMbid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_mbid** | **string**|  | |
| **score** | **int**|  | [optional] |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedbackMsid()`

```php
getFeedbackMsid($recording_msid, $score, $count, $offset): \OpenAPI\Client\Model\FeedbackResponse
```

Get feedback for recording with given recording_msid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recording_msid = 'recording_msid_example'; // string
$score = 56; // int
$count = 25; // int
$offset = 0; // int

try {
    $result = $apiInstance->getFeedbackMsid($recording_msid, $score, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getFeedbackMsid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_msid** | **string**|  | |
| **score** | **int**|  | [optional] |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\FeedbackResponse**](../Model/FeedbackResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPins()`

```php
getPins($user_name, $count, $offset): \OpenAPI\Client\Model\GetPins
```

Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int

try {
    $result = $apiInstance->getPins($user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getPins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\GetPins**](../Model/GetPins.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPinsCurrent()`

```php
getPinsCurrent($user_name): \OpenAPI\Client\Model\GetPinsCurrent200Response
```

Get the currently pinned recording by a user with given user_name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string

try {
    $result = $apiInstance->getPinsCurrent($user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getPinsCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetPinsCurrent200Response**](../Model/GetPinsCurrent200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPinsFollowing()`

```php
getPinsFollowing($user_name, $count, $offset): \OpenAPI\Client\Model\GetPins
```

Get a list containing the active pinned recordings for all users in a user's user_name following list. The returned pinned recordings are sorted in descending order of the time they were pinned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string
$count = 25; // int
$offset = 0; // int

try {
    $result = $apiInstance->getPinsFollowing($user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->getPinsFollowing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**|  | |
| **count** | **int**|  | [optional] [default to 25] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\GetPins**](../Model/GetPins.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pin()`

```php
pin($pin_request): \OpenAPI\Client\Model\Pin200Response
```

Pin a recording for user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pin_request = new \OpenAPI\Client\Model\PinRequest(); // \OpenAPI\Client\Model\PinRequest

try {
    $result = $apiInstance->pin($pin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->pin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pin_request** | [**\OpenAPI\Client\Model\PinRequest**](../Model/PinRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Pin200Response**](../Model/Pin200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pinDelete()`

```php
pinDelete($row_id)
```

Deletes the pinned recording with given row_id from the server. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$row_id = 56; // int

try {
    $apiInstance->pinDelete($row_id);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->pinDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **row_id** | **int**|  | |

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

## `recordingFeedback()`

```php
recordingFeedback($recording_feedback_request)
```

Submit recording feedback (love/hate) to the server. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recording_feedback_request = new \OpenAPI\Client\Model\RecordingFeedbackRequest(); // \OpenAPI\Client\Model\RecordingFeedbackRequest

try {
    $apiInstance->recordingFeedback($recording_feedback_request);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->recordingFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_feedback_request** | [**\OpenAPI\Client\Model\RecordingFeedbackRequest**](../Model/RecordingFeedbackRequest.md)|  | |

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

## `unpin()`

```php
unpin()
```

Unpins the currently active pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->unpin();
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->unpin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updatePin()`

```php
updatePin($row_id, $update_pin_request)
```

Updates the blurb content of a pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$row_id = 56; // int
$update_pin_request = new \OpenAPI\Client\Model\UpdatePinRequest(); // \OpenAPI\Client\Model\UpdatePinRequest

try {
    $apiInstance->updatePin($row_id, $update_pin_request);
} catch (Exception $e) {
    echo 'Exception when calling LbRecordingsApi->updatePin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **row_id** | **int**|  | |
| **update_pin_request** | [**\OpenAPI\Client\Model\UpdatePinRequest**](../Model/UpdatePinRequest.md)|  | |

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
