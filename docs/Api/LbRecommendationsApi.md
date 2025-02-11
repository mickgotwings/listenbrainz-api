# OpenAPI\Client\LbRecommendationsApi

All URIs are relative to https://api.listenbrainz.org, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFeedback()**](LbRecommendationsApi.md#deleteFeedback) | **POST** /1/recommendations/feedback/delete | Delete feedback for a user. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one recording mbid in the payload. |
| [**feedbackGivenBy()**](LbRecommendationsApi.md#feedbackGivenBy) | **GET** /1/recommendations/feedback/user/{user_name} | Get feedback given by user &#39;user_name&#39;. |
| [**recordingRecommendations()**](LbRecommendationsApi.md#recordingRecommendations) | **GET** /1/cf/recommendation/user/{user_name}/recording | Get recommendations sorted on rating and ratings for user &#39;user_name&#39;. |
| [**recordingsFeedbackGivenBy()**](LbRecommendationsApi.md#recordingsFeedbackGivenBy) | **GET** /1/recommendations/feedback/user/{user_name}/recordings | Get feedback given by user &#39;user_name&#39; for the list of recordings supplied. |
| [**submitFeedback()**](LbRecommendationsApi.md#submitFeedback) | **POST** /1/recommendation/feedback/submit | Submit recommendation feedback. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload. |


## `deleteFeedback()`

```php
deleteFeedback($delete_feedback_request)
```

Delete feedback for a user. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one recording mbid in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_feedback_request = new \OpenAPI\Client\Model\DeleteFeedbackRequest(); // \OpenAPI\Client\Model\DeleteFeedbackRequest

try {
    $apiInstance->deleteFeedback($delete_feedback_request);
} catch (Exception $e) {
    echo 'Exception when calling LbRecommendationsApi->deleteFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_feedback_request** | [**\OpenAPI\Client\Model\DeleteFeedbackRequest**](../Model/DeleteFeedbackRequest.md)|  | |

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

## `feedbackGivenBy()`

```php
feedbackGivenBy($user_name, $rating, $count, $offset): \OpenAPI\Client\Model\FeedbackGivenBy
```

Get feedback given by user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string | The MusicBrainz ID of the user whose timeline is being requested.
$rating = 'rating_example'; // string | Optional, refer to db/model/recommendation_feedback.py for allowed rating values.
$count = 25; // int | Optional, number of recording mbids to return.
$offset = 25; // int | Optional, number of mbids to skip from the beginning, for pagination. Ex. An offset of 5 means the 5 mbids will be skipped.

try {
    $result = $apiInstance->feedbackGivenBy($user_name, $rating, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecommendationsApi->feedbackGivenBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**| The MusicBrainz ID of the user whose timeline is being requested. | |
| **rating** | **string**| Optional, refer to db/model/recommendation_feedback.py for allowed rating values. | [optional] |
| **count** | **int**| Optional, number of recording mbids to return. | [optional] [default to 25] |
| **offset** | **int**| Optional, number of mbids to skip from the beginning, for pagination. Ex. An offset of 5 means the 5 mbids will be skipped. | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\FeedbackGivenBy**](../Model/FeedbackGivenBy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingRecommendations()`

```php
recordingRecommendations($user_name, $count, $offset): \OpenAPI\Client\Model\RecordingRecommendations
```

Get recommendations sorted on rating and ratings for user 'user_name'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string | The MusicBrainz ID of the user whose timeline is being requested.
$count = 25; // int | Optional, number of recording mbids to return.
$offset = 25; // int | Optional, number of mbids to skip from the beginning, for pagination. Ex. An offset of 5 means the 5 mbids will be skipped.

try {
    $result = $apiInstance->recordingRecommendations($user_name, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecommendationsApi->recordingRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**| The MusicBrainz ID of the user whose timeline is being requested. | |
| **count** | **int**| Optional, number of recording mbids to return. | [optional] [default to 25] |
| **offset** | **int**| Optional, number of mbids to skip from the beginning, for pagination. Ex. An offset of 5 means the 5 mbids will be skipped. | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\RecordingRecommendations**](../Model/RecordingRecommendations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordingsFeedbackGivenBy()`

```php
recordingsFeedbackGivenBy($user_name, $mbids): \OpenAPI\Client\Model\RecordingsFeedbackGivenBy
```

Get feedback given by user 'user_name' for the list of recordings supplied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LbRecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = 'user_name_example'; // string | The MusicBrainz ID of the user whose timeline is being requested.
$mbids = array('mbids_example'); // string[] | Comma separated list of recording_mbids for which feedback records are to be fetched.

try {
    $result = $apiInstance->recordingsFeedbackGivenBy($user_name, $mbids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbRecommendationsApi->recordingsFeedbackGivenBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_name** | **string**| The MusicBrainz ID of the user whose timeline is being requested. | |
| **mbids** | [**string[]**](../Model/string.md)| Comma separated list of recording_mbids for which feedback records are to be fetched. | |

### Return type

[**\OpenAPI\Client\Model\RecordingsFeedbackGivenBy**](../Model/RecordingsFeedbackGivenBy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitFeedback()`

```php
submitFeedback($submit_feedback_request)
```

Submit recommendation feedback. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LbRecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_feedback_request = new \OpenAPI\Client\Model\SubmitFeedbackRequest(); // \OpenAPI\Client\Model\SubmitFeedbackRequest

try {
    $apiInstance->submitFeedback($submit_feedback_request);
} catch (Exception $e) {
    echo 'Exception when calling LbRecommendationsApi->submitFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_feedback_request** | [**\OpenAPI\Client\Model\SubmitFeedbackRequest**](../Model/SubmitFeedbackRequest.md)|  | |

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
