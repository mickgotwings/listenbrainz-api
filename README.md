# OpenAPIClient-php

OpenAPI client defintion.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\LbArtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_cover_art_grid = new \OpenAPI\Client\Model\CreateCoverArtGrid(); // \OpenAPI\Client\Model\CreateCoverArtGrid

try {
    $result = $apiInstance->createCoverArtGrid($create_cover_art_grid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LbArtApi->createCoverArtGrid: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.listenbrainz.org*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LbArtApi* | [**createCoverArtGrid**](docs/Api/LbArtApi.md#createcoverartgrid) | **POST** /1/art/grid/ | Create a cover art grid SVG file from the POSTed JSON data to this endpoint.
*LbArtApi* | [**createCoverArtGridForUser**](docs/Api/LbArtApi.md#createcoverartgridforuser) | **GET** /1/art/grid-stats/{user_name}/{time_range}/{dimension}/{layout}/{image_size} | Create a cover art grid SVG file from the stats of a given user.
*LbArtApi* | [**createCustomCoverArt**](docs/Api/LbArtApi.md#createcustomcoverart) | **GET** /1/art/{custom_name}/{user_name}/{time_range}/{image_size} | Create a custom cover art SVG file from the stats of a given user.
*LbArtApi* | [**yearInMusic**](docs/Api/LbArtApi.md#yearinmusic) | **GET** /1/art/year-in-music/{year}/{user_name} | Create the shareable svg image using YIM stats.
*LbCoreApi* | [**deleteListen**](docs/Api/LbCoreApi.md#deletelisten) | **POST** /1/delete-listen | Delete a particular listen from a user&#39;s listen history.
*LbCoreApi* | [**latestImport**](docs/Api/LbCoreApi.md#latestimport) | **GET** /1/latest-import | Get the timestamp of the newest listen submitted by a user in previous imports to ListenBrainz.
*LbCoreApi* | [**lbRadioRecordingsForArtist**](docs/Api/LbCoreApi.md#lbradiorecordingsforartist) | **GET** /1/lb-radio/artist/{seed_artist_mbid} | Get recordings for use in LB radio with the given seed artist. The endpoint returns a dict of all the similar artists, including the seed artist. For each artists, there will be a list of dicts that contain recording_mbid, similar_artist_mbid and total_listen_count.
*LbCoreApi* | [**lbRadioTags**](docs/Api/LbCoreApi.md#lbradiotags) | **GET** /1/lb-radio/tags | Get recordings for use in LB radio with the specified tags that match the requested criteria.
*LbCoreApi* | [**listenCountForUser**](docs/Api/LbCoreApi.md#listencountforuser) | **GET** /1/user/{user_name}/listen-count | Get the number of listens for a user &#39;user_name&#39;.
*LbCoreApi* | [**listensForUser**](docs/Api/LbCoreApi.md#listensforuser) | **GET** /1/user/{user_name}/listens | Get listens for user &#39;user_name&#39;.
*LbCoreApi* | [**playingNowForUser**](docs/Api/LbCoreApi.md#playingnowforuser) | **GET** /1/user/{user_name}/playing-now | Get the listen being played right now for user &#39;user_name&#39;
*LbCoreApi* | [**recommendationPlaylistsForUser**](docs/Api/LbCoreApi.md#recommendationplaylistsforuser) | **GET** /1/user/{playlist_user_name}/playlists/recommendations | Fetch recommendation playlist metadata in JSPF format without recordings for &#39;playlist_user_name&#39;. This endpoint only lists playlists that are to be shown on the listenbrainz.org recommendations pages.
*LbCoreApi* | [**searchPlaylistForUser**](docs/Api/LbCoreApi.md#searchplaylistforuser) | **GET** /1/user/{playlist_user_name}/playlists/search | Search for a playlist by name for a user.
*LbCoreApi* | [**searchUsers**](docs/Api/LbCoreApi.md#searchusers) | **GET** /1/search/users | Search a ListenBrainz-registered user.
*LbCoreApi* | [**servicesForUser**](docs/Api/LbCoreApi.md#servicesforuser) | **GET** /1/user/{user_name}/services | Get list of services which are connected to a given user&#39;s account.
*LbCoreApi* | [**similarUsersForUser**](docs/Api/LbCoreApi.md#similarusersforuser) | **GET** /1/user/{user_name}/similar-users | Get the listen being played right now for user &#39;user_name&#39;.
*LbCoreApi* | [**similarityOfUserForUser**](docs/Api/LbCoreApi.md#similarityofuserforuser) | **GET** /1/user/{user_name}/similar-to/{other_user_name} | Get the similarity of &#39;user_name&#39; and &#39;other_user_name&#39;, based on their listening history.
*LbCoreApi* | [**submitListens**](docs/Api/LbCoreApi.md#submitlistens) | **POST** /1/submit-listens | Submit listens to the server.
*LbCoreApi* | [**validateToken**](docs/Api/LbCoreApi.md#validatetoken) | **GET** /1/validate-token | Check whether a User Token is a valid entry in the database.
*LbMetadataApi* | [**artistMetadata**](docs/Api/LbMetadataApi.md#artistmetadata) | **GET** /1/metadata/artist/ | This endpoint takes in a list of artist_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch.
*LbMetadataApi* | [**getManualMapping**](docs/Api/LbMetadataApi.md#getmanualmapping) | **GET** /1/metadata/get_manual_mapping/ | Get the manual mapping of a recording messybrainz ID that a user added.
*LbMetadataApi* | [**lookup**](docs/Api/LbMetadataApi.md#lookup) | **GET** /1/metadata/lookup/ | This endpoint looks up mbid metadata for the given artist, recording and optionally a release name. The total number of characters in the artist name, recording name and release name query arguments should be less than or equal to MAX_MAPPING_QUERY_LENGTH.
*LbMetadataApi* | [**recordingMetadata**](docs/Api/LbMetadataApi.md#recordingmetadata) | **GET** /1/metadata/recording/ | This endpoint takes in a list of recording_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch.
*LbMetadataApi* | [**releaseGroupMetadata**](docs/Api/LbMetadataApi.md#releasegroupmetadata) | **GET** /1/metadata/release_group/ | This endpoint takes in a list of release_group_mbids and returns an array of dicts that contain release_group metadata suitable for showing in a context that requires as much detail about a release_group and the artist. Using the inc parameter, you can control which portions of metadata to fetch.
*LbMetadataApi* | [**submitManualMapping**](docs/Api/LbMetadataApi.md#submitmanualmapping) | **POST** /1/metadata/submit_manual_mapping/ | Submit a manual mapping of a recording messybrainz ID to a musicbrainz recording id.
*LbMiscApi* | [**color**](docs/Api/LbMiscApi.md#color) | **GET** /1/explore/color/{color} | Fetch a list of releases that have cover art that has a predominant color that is close to the given color.
*LbMiscApi* | [**freshReleases**](docs/Api/LbMiscApi.md#freshreleases) | **GET** /1/explore/fresh-releases/ | This endpoint fetches upcoming and recently released (fresh) releases.
*LbMiscApi* | [**getDumpInfo**](docs/Api/LbMiscApi.md#getdumpinfo) | **GET** /1/status/get-dump-info | Get information about ListenBrainz data dumps. You need to pass the id parameter in a GET request to get data about that particular dump.
*LbMiscApi* | [**lbRadio**](docs/Api/LbMiscApi.md#lbradio) | **GET** /1/explore/lb-radio | Generate a playlist with LB Radio.
*LbPlaylistsApi* | [**appendRecordings**](docs/Api/LbPlaylistsApi.md#appendrecordings) | **POST** /1/playlist/{playlist_mbid}/item/add/{offset} | Append recordings to an existing playlist by posting a playlist with one of more recordings in it. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf .  If the offset is provided in the URL, then the recordings will be added at that offset, otherwise they will be added at the end of the playlist.
*LbPlaylistsApi* | [**copyPlaylist**](docs/Api/LbPlaylistsApi.md#copyplaylist) | **POST** /1/playlist/{playlist_mbid}/copy | Copy a playlist - the new playlist will be given the name “Copy of &lt;playlist_name&gt;”. POST body data does not need to contain anything.
*LbPlaylistsApi* | [**createPlaylist**](docs/Api/LbPlaylistsApi.md#createplaylist) | **POST** /1/playlist/create | Create a playlist
*LbPlaylistsApi* | [**deletePlaylist**](docs/Api/LbPlaylistsApi.md#deleteplaylist) | **POST** /1/playlist/{playlist_mbid}/delete | Delete a playlist.
*LbPlaylistsApi* | [**editPlaylist**](docs/Api/LbPlaylistsApi.md#editplaylist) | **POST** /1/playlist/edit/{playlist_mbid} | Create a playlist. The playlist must be in JSPF format with MusicBrainz extensions, which is defined here: https://musicbrainz.org/doc/jspf . To create an empty playlist, you can send an empty playlist with only the title field filled out. If you would like to create a playlist populated with recordings, each of the track items in the playlist must have an identifier element that contains the MusicBrainz recording that includes the recording MBID.  When creating a playlist, only the playlist title and the track identifier elements will be used - all other elements in the posted JSPF wil be ignored.  If a created_for field is found and the user is not an approved playlist bot, then a 403 forbidden will be raised.
*LbPlaylistsApi* | [**fetchPlaylist**](docs/Api/LbPlaylistsApi.md#fetchplaylist) | **GET** /1/playlist/{playlist_mbid} | Fetch the given playlist.
*LbPlaylistsApi* | [**itemDelete**](docs/Api/LbPlaylistsApi.md#itemdelete) | **POST** /1/playlist/{playlist_mbid}/item/delete | Delete an item in a playlist.
*LbPlaylistsApi* | [**moveItem**](docs/Api/LbPlaylistsApi.md#moveitem) | **POST** /1/playlist/{playlist_mbid}/item/move | To move an item in a playlist, the POST data needs to specify the recording MBID and current index of the track to move (from), where to move it to (to) and how many tracks from that position should be moved (count).
*LbPlaylistsApi* | [**playlistsCreatedForUser**](docs/Api/LbPlaylistsApi.md#playlistscreatedforuser) | **GET** /1/user/{playlist_user_name}/playlists/createdfor | Fetch playlist metadata in JSPF format without recordings that have been created for the user.
*LbPlaylistsApi* | [**playlistsForUser**](docs/Api/LbPlaylistsApi.md#playlistsforuser) | **GET** /1/user/{playlist_user_name}/playlists | Fetch playlist metadata in JSPF format without recordings for the given user.
*LbPlaylistsApi* | [**playlistsForUserCollaborator**](docs/Api/LbPlaylistsApi.md#playlistsforusercollaborator) | **GET** /1/user/{playlist_user_name}/playlists/collaborator | Fetch playlist metadata in JSPF format without recordings for which a user is a collaborator. If a playlist is private, it will only be returned if the caller is authorized to edit that playlist.
*LbPlaylistsApi* | [**searchPlaylists**](docs/Api/LbPlaylistsApi.md#searchplaylists) | **GET** /1/playlist/search | Search for playlists by name or description. The search query must be at least 3 characters long.
*LbPopularityApi* | [**artist**](docs/Api/LbPopularityApi.md#artist) | **POST** /1/popularity/artist | Get the total listen count and total unique listeners count for a given artist.  A JSON document with a list of artists and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.
*LbPopularityApi* | [**recording**](docs/Api/LbPopularityApi.md#recording) | **POST** /1/popularity/recording | Get the total listen count and total unique listeners count for a given recording.  A JSON document with a list of recording_mbids and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.
*LbPopularityApi* | [**release**](docs/Api/LbPopularityApi.md#release) | **POST** /1/popularity/release | Get the total listen count and total unique listeners count for a given release.  A JSON document with a list of releases and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.
*LbPopularityApi* | [**releaseGroup**](docs/Api/LbPopularityApi.md#releasegroup) | **POST** /1/popularity/release-group | Get the total listen count and total unique listeners count for a given release group.  A JSON document with a list of release groups and inc string must be POSTed. Up to MAX_ITEMS_PER_GET items can be requested at once.
*LbPopularityApi* | [**topRecordingsForArtist**](docs/Api/LbPopularityApi.md#toprecordingsforartist) | **GET** /1/popularity/top-recordings-for-artist/{artist_mbid} | Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned.
*LbPopularityApi* | [**topReleaseGroupForArtist**](docs/Api/LbPopularityApi.md#topreleasegroupforartist) | **GET** /1/popularity/top-release-groups-for-artist/{artist_mbid} | Get the top release groups by listen count for a given artist.
*LbRecommendationsApi* | [**deleteFeedback**](docs/Api/LbRecommendationsApi.md#deletefeedback) | **POST** /1/recommendations/feedback/delete | Delete feedback for a user. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one recording mbid in the payload.
*LbRecommendationsApi* | [**feedbackGivenBy**](docs/Api/LbRecommendationsApi.md#feedbackgivenby) | **GET** /1/recommendations/feedback/user/{user_name} | Get feedback given by user &#39;user_name&#39;.
*LbRecommendationsApi* | [**recordingRecommendations**](docs/Api/LbRecommendationsApi.md#recordingrecommendations) | **GET** /1/cf/recommendation/user/{user_name}/recording | Get recommendations sorted on rating and ratings for user &#39;user_name&#39;.
*LbRecommendationsApi* | [**recordingsFeedbackGivenBy**](docs/Api/LbRecommendationsApi.md#recordingsfeedbackgivenby) | **GET** /1/recommendations/feedback/user/{user_name}/recordings | Get feedback given by user &#39;user_name&#39; for the list of recordings supplied.
*LbRecommendationsApi* | [**submitFeedback**](docs/Api/LbRecommendationsApi.md#submitfeedback) | **POST** /1/recommendation/feedback/submit | Submit recommendation feedback. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload.
*LbRecordingsApi* | [**getFeedback**](docs/Api/LbRecordingsApi.md#getfeedback) | **GET** /1/feedback/user/{user_name}/get-feedback | Get feedback given by user &#39;user_name&#39;. The format for the JSON returned is defined in our Feedback JSON Documentation.  If the optional argument score is not given, this endpoint will return all the feedback submitted by the user. Otherwise filters the feedback to be returned by score.
*LbRecordingsApi* | [**getFeedbackForRecordings**](docs/Api/LbRecordingsApi.md#getfeedbackforrecordings) | **GET** /1/feedback/user/{user_name}/get-feedback-for-recordings | Get feedback given by user user_name for the list of recordings supplied.
*LbRecordingsApi* | [**getFeedbackMbid**](docs/Api/LbRecordingsApi.md#getfeedbackmbid) | **GET** /1/feedback/recording/{recording_mbid}/get-feedback-mbid | Get feedback for recording with given recording_mbid.
*LbRecordingsApi* | [**getFeedbackMsid**](docs/Api/LbRecordingsApi.md#getfeedbackmsid) | **GET** /1/feedback/user/{recording_msid}/get-feedback | Get feedback for recording with given recording_msid.
*LbRecordingsApi* | [**getPins**](docs/Api/LbRecordingsApi.md#getpins) | **GET** /1/{user_name}/pins | Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned.
*LbRecordingsApi* | [**getPinsCurrent**](docs/Api/LbRecordingsApi.md#getpinscurrent) | **GET** /1/{user_name}/pins/current | Get the currently pinned recording by a user with given user_name.
*LbRecordingsApi* | [**getPinsFollowing**](docs/Api/LbRecordingsApi.md#getpinsfollowing) | **GET** /1/{user_name}/pins/following | Get a list containing the active pinned recordings for all users in a user&#39;s user_name following list. The returned pinned recordings are sorted in descending order of the time they were pinned.
*LbRecordingsApi* | [**pin**](docs/Api/LbRecordingsApi.md#pin) | **POST** /1/pin | Pin a recording for user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload.
*LbRecordingsApi* | [**pinDelete**](docs/Api/LbRecordingsApi.md#pindelete) | **POST** /1/pin/delete/{row_id} | Deletes the pinned recording with given row_id from the server. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!
*LbRecordingsApi* | [**recordingFeedback**](docs/Api/LbRecordingsApi.md#recordingfeedback) | **POST** /1/feedback/recording-feedback | Submit recording feedback (love/hate) to the server. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload.
*LbRecordingsApi* | [**unpin**](docs/Api/LbRecordingsApi.md#unpin) | **POST** /1/unpin | Unpins the currently active pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!
*LbRecordingsApi* | [**updatePin**](docs/Api/LbRecordingsApi.md#updatepin) | **POST** /1/pin/update/{row_id} | Updates the blurb content of a pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload.
*LbSocialApi* | [**createNotification**](docs/Api/LbSocialApi.md#createnotification) | **POST** /1/user/{user_name}/timeline-event/create/notification | Post a message with a link on a user&#39;s timeline. Only approved users are allowed to perform this action.
*LbSocialApi* | [**createReview**](docs/Api/LbSocialApi.md#createreview) | **POST** /1/user/{user_name}/timeline-event/create/review | Creates a CritiqueBrainz review event for the user. This also creates a corresponding review in CritiqueBrainz. Users need to have linked their ListenBrainz account with CritiqueBrainz first to use this endpoint successfully.
*LbSocialApi* | [**feedEvents**](docs/Api/LbSocialApi.md#feedevents) | **GET** /1/user/{user_name}/feed/events | CreatGet feed events for a user&#39;s timeline.
*LbSocialApi* | [**feedEventsDelete**](docs/Api/LbSocialApi.md#feedeventsdelete) | **POST** /1/user/{user_name}/feed/events/delete | Delete those events from user&#39;s feed that belong to them. Supports deletion of recommendation and notification. Along with the authorization token, post the event type and event id.
*LbSocialApi* | [**feedEventsHide**](docs/Api/LbSocialApi.md#feedeventshide) | **POST** /1/user/{user_name}/feed/events/hide | Hide events from the user feed, only recording_recommendation and recording_pin events that have been generated by the people one is following can be deleted via this endpoint.
*LbSocialApi* | [**feedEventsListensFollowing**](docs/Api/LbSocialApi.md#feedeventslistensfollowing) | **GET** /1/user/{user_name}/feed/events/listens/following | Get feed&#39;s listen events for followed users.
*LbSocialApi* | [**feedEventsListensSimilar**](docs/Api/LbSocialApi.md#feedeventslistenssimilar) | **GET** /1/user/{user_name}/feed/events/listens/similar | Get feed&#39;s listen events for similar users.
*LbSocialApi* | [**feedEventsUnhide**](docs/Api/LbSocialApi.md#feedeventsunhide) | **POST** /1/user/{user_name}/feed/events/unhide | Delete hidden events from the user feed, aka unhide events.
*LbSocialApi* | [**follow**](docs/Api/LbSocialApi.md#follow) | **POST** /1/user/{user_name}/follow | Follow the user &#39;user_name&#39;. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header!
*LbSocialApi* | [**followers**](docs/Api/LbSocialApi.md#followers) | **GET** /1/user/{user_name}/followers | Fetch the list of followers of the user &#39;user_name&#39;.
*LbSocialApi* | [**following**](docs/Api/LbSocialApi.md#following) | **GET** /1/user/{user_name}/following | Fetch the list of users followed by the user &#39;user_name&#39;.
*LbSocialApi* | [**recommendPersonalRecording**](docs/Api/LbSocialApi.md#recommendpersonalrecording) | **POST** /1/user/{user_name}/timeline-event/create/recommend-personal | Make the user recommend a recording to their followers. The request should post the following data about the recording being recommended (either one of recording_msid or recording_mbid is sufficient), and also the list of followers getting recommended.
*LbSocialApi* | [**recommendRecording**](docs/Api/LbSocialApi.md#recommendrecording) | **POST** /1/user/{user_name}/timeline-event/create/recording | Make the user recommend a recording to their followers.
*LbSocialApi* | [**unfollow**](docs/Api/LbSocialApi.md#unfollow) | **POST** /1/user/{user_name}/unfollow | Unfollow the user &#39;user_name&#39;. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header!
*LbStatsApi* | [**artistMapForUser**](docs/Api/LbStatsApi.md#artistmapforuser) | **GET** /1/stats/user/{user_name}/artist-map | Get the artist map for user &#39;user_name&#39;.
*LbStatsApi* | [**dailyActivityForUser**](docs/Api/LbStatsApi.md#dailyactivityforuser) | **GET** /1/stats/user/{user_name}/daily-activity | Get the daily activity for user &#39;user_name&#39;.
*LbStatsApi* | [**listenersForArtist**](docs/Api/LbStatsApi.md#listenersforartist) | **GET** /1/stats/artist/{artist_mbid}/listeners | Get top listeners for artist &#39;artist_mbid&#39;.
*LbStatsApi* | [**listenersForReleaseGroup**](docs/Api/LbStatsApi.md#listenersforreleasegroup) | **GET** /1/stats/release-group/{release_group_mbid}/listeners | Get top listeners for release group &#39;release_group_mbid&#39;.
*LbStatsApi* | [**listeningActivityForUser**](docs/Api/LbStatsApi.md#listeningactivityforuser) | **GET** /1/stats/user/{user_name}/listening-activity | Get the listening activity for user &#39;user_name&#39;.
*LbStatsApi* | [**sitewideArtistMap**](docs/Api/LbStatsApi.md#sitewideartistmap) | **GET** /1/stats/sitewide/artist-map | Get sitewide top recordings.
*LbStatsApi* | [**sitewideListeningActivity**](docs/Api/LbStatsApi.md#sitewidelisteningactivity) | **GET** /1/stats/sitewide/listening-activity | Get sitewide top recordings.
*LbStatsApi* | [**sitewideTopArtists**](docs/Api/LbStatsApi.md#sitewidetopartists) | **GET** /1/stats/sitewide/artists | Get sitewide top artists.
*LbStatsApi* | [**sitewideTopRecordings**](docs/Api/LbStatsApi.md#sitewidetoprecordings) | **GET** /1/stats/sitewide/recordings | Get sitewide top recordings.
*LbStatsApi* | [**sitewideTopReleaseGroups**](docs/Api/LbStatsApi.md#sitewidetopreleasegroups) | **GET** /1/stats/sitewide/release-groups | Get sitewide top release groups.
*LbStatsApi* | [**sitewideTopReleases**](docs/Api/LbStatsApi.md#sitewidetopreleases) | **GET** /1/stats/sitewide/releases | Get sitewide top releases.
*LbStatsApi* | [**topArtistsForUser**](docs/Api/LbStatsApi.md#topartistsforuser) | **GET** /1/stats/user/{user_name}/artists | Get top artists for user &#39;user_name&#39;.
*LbStatsApi* | [**topRecordingsForUser**](docs/Api/LbStatsApi.md#toprecordingsforuser) | **GET** /1/stats/user/{user_name}/recordings | Get top recordings for user &#39;user_name&#39;.
*LbStatsApi* | [**topReleaseGroupsForUser**](docs/Api/LbStatsApi.md#topreleasegroupsforuser) | **GET** /1/stats/user/{user_name}/release-groups | Get top release groups for user &#39;user_name&#39;.
*LbStatsApi* | [**topReleasesForUser**](docs/Api/LbStatsApi.md#topreleasesforuser) | **GET** /1/stats/user/{user_name}/releases | Get top releases for user &#39;user_name&#39;.
*LbStatsApi* | [**yearInMusicForUser**](docs/Api/LbStatsApi.md#yearinmusicforuser) | **GET** /1/stats/user/{user_name}/year-in-music/{year} | Get sitewide top recordings.

## Models

- [AdditionalInfo](docs/Model/AdditionalInfo.md)
- [AllowedRatings](docs/Model/AllowedRatings.md)
- [AllowedStatisticsRange](docs/Model/AllowedStatisticsRange.md)
- [Artist200ResponseInner](docs/Model/Artist200ResponseInner.md)
- [ArtistMapForUser](docs/Model/ArtistMapForUser.md)
- [ArtistMapForUserPayload](docs/Model/ArtistMapForUserPayload.md)
- [ArtistMapForUserPayloadArtistMapInner](docs/Model/ArtistMapForUserPayloadArtistMapInner.md)
- [ArtistMetadata](docs/Model/ArtistMetadata.md)
- [ArtistMetadataTag](docs/Model/ArtistMetadataTag.md)
- [ArtistRequest](docs/Model/ArtistRequest.md)
- [Color](docs/Model/Color.md)
- [ColorPayload](docs/Model/ColorPayload.md)
- [ColorPayloadReleasesInner](docs/Model/ColorPayloadReleasesInner.md)
- [ColorPayloadReleasesInnerRecordingsInner](docs/Model/ColorPayloadReleasesInnerRecordingsInner.md)
- [ColorPayloadReleasesInnerRecordingsInnerTrackMetadata](docs/Model/ColorPayloadReleasesInnerRecordingsInnerTrackMetadata.md)
- [ColorPayloadReleasesInnerRecordingsInnerTrackMetadataAdditionalInfo](docs/Model/ColorPayloadReleasesInnerRecordingsInnerTrackMetadataAdditionalInfo.md)
- [CoverTypes](docs/Model/CoverTypes.md)
- [CreateCoverArtGrid](docs/Model/CreateCoverArtGrid.md)
- [CreateNotificationRequest](docs/Model/CreateNotificationRequest.md)
- [CreateNotificationRequestMetadata](docs/Model/CreateNotificationRequestMetadata.md)
- [CreatePlaylist200Response](docs/Model/CreatePlaylist200Response.md)
- [CreatePlaylistRequest](docs/Model/CreatePlaylistRequest.md)
- [CreateReviewRequest](docs/Model/CreateReviewRequest.md)
- [CreateReviewRequestMetadata](docs/Model/CreateReviewRequestMetadata.md)
- [DailyActivityForUser](docs/Model/DailyActivityForUser.md)
- [DailyActivityForUserPayload](docs/Model/DailyActivityForUserPayload.md)
- [DailyActivityForUserPayloadDailyActivity](docs/Model/DailyActivityForUserPayloadDailyActivity.md)
- [DailyActivityForUserPayloadDailyActivityFridayInner](docs/Model/DailyActivityForUserPayloadDailyActivityFridayInner.md)
- [DeleteFeedbackRequest](docs/Model/DeleteFeedbackRequest.md)
- [DeleteListen](docs/Model/DeleteListen.md)
- [FeedEvents](docs/Model/FeedEvents.md)
- [FeedEventsDeleteRequest](docs/Model/FeedEventsDeleteRequest.md)
- [FeedEventsListensSimilar](docs/Model/FeedEventsListensSimilar.md)
- [FeedEventsListensSimilarPayload](docs/Model/FeedEventsListensSimilarPayload.md)
- [FeedEventsListensSimilarPayloadEventsInner](docs/Model/FeedEventsListensSimilarPayloadEventsInner.md)
- [FeedEventsPayload](docs/Model/FeedEventsPayload.md)
- [FeedEventsPayloadEventsInner](docs/Model/FeedEventsPayloadEventsInner.md)
- [Feedback](docs/Model/Feedback.md)
- [FeedbackGivenBy](docs/Model/FeedbackGivenBy.md)
- [FeedbackGivenByFeedbackInner](docs/Model/FeedbackGivenByFeedbackInner.md)
- [FeedbackResponse](docs/Model/FeedbackResponse.md)
- [Followers](docs/Model/Followers.md)
- [Following](docs/Model/Following.md)
- [FreshReleases](docs/Model/FreshReleases.md)
- [FreshReleasesPayload](docs/Model/FreshReleasesPayload.md)
- [FreshReleasesPayloadReleasesInner](docs/Model/FreshReleasesPayloadReleasesInner.md)
- [GetDumpInfo](docs/Model/GetDumpInfo.md)
- [GetManualMapping](docs/Model/GetManualMapping.md)
- [GetManualMappingMapping](docs/Model/GetManualMappingMapping.md)
- [GetPins](docs/Model/GetPins.md)
- [GetPinsCurrent200Response](docs/Model/GetPinsCurrent200Response.md)
- [GetPinsCurrent200ResponsePinnedRecording](docs/Model/GetPinsCurrent200ResponsePinnedRecording.md)
- [GetPinsPinnedRecordingsInner](docs/Model/GetPinsPinnedRecordingsInner.md)
- [ItemDeleteRequest](docs/Model/ItemDeleteRequest.md)
- [LatestImport](docs/Model/LatestImport.md)
- [LbRadio](docs/Model/LbRadio.md)
- [LbRadioPayload](docs/Model/LbRadioPayload.md)
- [LbRadioRecordingsForArtistValueInner](docs/Model/LbRadioRecordingsForArtistValueInner.md)
- [LbRadioTagsInner](docs/Model/LbRadioTagsInner.md)
- [ListenCountForUser](docs/Model/ListenCountForUser.md)
- [ListenCountForUserPayload](docs/Model/ListenCountForUserPayload.md)
- [ListenType](docs/Model/ListenType.md)
- [ListenersForArtist](docs/Model/ListenersForArtist.md)
- [ListenersForArtistPayload](docs/Model/ListenersForArtistPayload.md)
- [ListenersForArtistPayloadListenersInner](docs/Model/ListenersForArtistPayloadListenersInner.md)
- [ListenersForReleaseGroup](docs/Model/ListenersForReleaseGroup.md)
- [ListenersForReleaseGroupPayload](docs/Model/ListenersForReleaseGroupPayload.md)
- [ListeningActivityForUser](docs/Model/ListeningActivityForUser.md)
- [ListeningActivityForUserPayload](docs/Model/ListeningActivityForUserPayload.md)
- [ListeningActivityForUserPayloadListeningActivityInner](docs/Model/ListeningActivityForUserPayloadListeningActivityInner.md)
- [ListensForUser](docs/Model/ListensForUser.md)
- [ListensForUserPayload](docs/Model/ListensForUserPayload.md)
- [ListensForUserPayloadListensInner](docs/Model/ListensForUserPayloadListensInner.md)
- [Lookup](docs/Model/Lookup.md)
- [LookupMetadata](docs/Model/LookupMetadata.md)
- [LookupMetadataRecording](docs/Model/LookupMetadataRecording.md)
- [LookupMetadataRecordingRelsInner](docs/Model/LookupMetadataRecordingRelsInner.md)
- [LookupMetadataRelease](docs/Model/LookupMetadataRelease.md)
- [LookupMetadataTag](docs/Model/LookupMetadataTag.md)
- [LookupMetadataTagRecordingInner](docs/Model/LookupMetadataTagRecordingInner.md)
- [MbidMapping](docs/Model/MbidMapping.md)
- [Metadata](docs/Model/Metadata.md)
- [Mode](docs/Model/Mode.md)
- [MoveItemRequest](docs/Model/MoveItemRequest.md)
- [MusicBrainzArtist](docs/Model/MusicBrainzArtist.md)
- [Operator](docs/Model/Operator.md)
- [Pin200Response](docs/Model/Pin200Response.md)
- [Pin200ResponsePinnedRecording](docs/Model/Pin200ResponsePinnedRecording.md)
- [PinRequest](docs/Model/PinRequest.md)
- [PlayingNowForUser](docs/Model/PlayingNowForUser.md)
- [PlayingNowForUserPayload](docs/Model/PlayingNowForUserPayload.md)
- [PlayingNowForUserPayloadListensInner](docs/Model/PlayingNowForUserPayloadListensInner.md)
- [Playlist](docs/Model/Playlist.md)
- [PlaylistExtension](docs/Model/PlaylistExtension.md)
- [PlaylistExtensionPayload](docs/Model/PlaylistExtensionPayload.md)
- [PlaylistExtensionPayloadAdditionalMetadata](docs/Model/PlaylistExtensionPayloadAdditionalMetadata.md)
- [PlaylistExtensionPayloadAdditionalMetadataAlgorithmMetadata](docs/Model/PlaylistExtensionPayloadAdditionalMetadataAlgorithmMetadata.md)
- [PlaylistTrackInner](docs/Model/PlaylistTrackInner.md)
- [PlaylistTrackInnerExtension](docs/Model/PlaylistTrackInnerExtension.md)
- [PlaylistTrackInnerExtensionHttpsMusicbrainzOrgDocJspfTrack](docs/Model/PlaylistTrackInnerExtensionHttpsMusicbrainzOrgDocJspfTrack.md)
- [PlaylistTrackInnerExtensionHttpsMusicbrainzOrgDocJspfTrackAdditionalMetadata](docs/Model/PlaylistTrackInnerExtensionHttpsMusicbrainzOrgDocJspfTrackAdditionalMetadata.md)
- [Playlists](docs/Model/Playlists.md)
- [RecommendPersonalRecordingRequest](docs/Model/RecommendPersonalRecordingRequest.md)
- [RecommendPersonalRecordingRequestMetadata](docs/Model/RecommendPersonalRecordingRequestMetadata.md)
- [RecommendRecordingRequest](docs/Model/RecommendRecordingRequest.md)
- [RecommendRecordingRequestMetadata](docs/Model/RecommendRecordingRequestMetadata.md)
- [Recording200ResponseInner](docs/Model/Recording200ResponseInner.md)
- [RecordingFeedbackRequest](docs/Model/RecordingFeedbackRequest.md)
- [RecordingMetadata](docs/Model/RecordingMetadata.md)
- [RecordingMetadataArtist](docs/Model/RecordingMetadataArtist.md)
- [RecordingMetadataArtistArtistsInner](docs/Model/RecordingMetadataArtistArtistsInner.md)
- [RecordingMetadataRecording](docs/Model/RecordingMetadataRecording.md)
- [RecordingMetadataTag](docs/Model/RecordingMetadataTag.md)
- [RecordingRecommendations](docs/Model/RecordingRecommendations.md)
- [RecordingRecommendationsPayload](docs/Model/RecordingRecommendationsPayload.md)
- [RecordingRecommendationsPayloadMbidsInner](docs/Model/RecordingRecommendationsPayloadMbidsInner.md)
- [RecordingRequest](docs/Model/RecordingRequest.md)
- [RecordingsFeedbackGivenBy](docs/Model/RecordingsFeedbackGivenBy.md)
- [Release200ResponseInner](docs/Model/Release200ResponseInner.md)
- [ReleaseGroup200ResponseInner](docs/Model/ReleaseGroup200ResponseInner.md)
- [ReleaseGroupMetadata](docs/Model/ReleaseGroupMetadata.md)
- [ReleaseGroupMetadataArtist](docs/Model/ReleaseGroupMetadataArtist.md)
- [ReleaseGroupMetadataArtistArtistsInner](docs/Model/ReleaseGroupMetadataArtistArtistsInner.md)
- [ReleaseGroupMetadataReleaseGroup](docs/Model/ReleaseGroupMetadataReleaseGroup.md)
- [ReleaseGroupRequest](docs/Model/ReleaseGroupRequest.md)
- [ReleaseGroupsInner](docs/Model/ReleaseGroupsInner.md)
- [ReleaseGroupsInnerArtistsInner](docs/Model/ReleaseGroupsInnerArtistsInner.md)
- [ReleaseRequest](docs/Model/ReleaseRequest.md)
- [Rels](docs/Model/Rels.md)
- [Rels1](docs/Model/Rels1.md)
- [SearchUsers](docs/Model/SearchUsers.md)
- [SearchUsersUsersInner](docs/Model/SearchUsersUsersInner.md)
- [ServicesForUser](docs/Model/ServicesForUser.md)
- [SimilarUsersForUser](docs/Model/SimilarUsersForUser.md)
- [SimilarUsersForUserPayloadInner](docs/Model/SimilarUsersForUserPayloadInner.md)
- [SimilarityOfUserForUser](docs/Model/SimilarityOfUserForUser.md)
- [SimilarityOfUserForUserPayload](docs/Model/SimilarityOfUserForUserPayload.md)
- [SitewideArtistMap](docs/Model/SitewideArtistMap.md)
- [SitewideArtistMapPayload](docs/Model/SitewideArtistMapPayload.md)
- [SitewideListeningActivity](docs/Model/SitewideListeningActivity.md)
- [SitewideListeningActivityPayload](docs/Model/SitewideListeningActivityPayload.md)
- [SitewideTopArtists](docs/Model/SitewideTopArtists.md)
- [SitewideTopArtistsPayload](docs/Model/SitewideTopArtistsPayload.md)
- [SitewideTopRecordings](docs/Model/SitewideTopRecordings.md)
- [SitewideTopRecordingsPayload](docs/Model/SitewideTopRecordingsPayload.md)
- [SitewideTopRecordingsPayloadRecordingsInner](docs/Model/SitewideTopRecordingsPayloadRecordingsInner.md)
- [SitewideTopReleaseGroups](docs/Model/SitewideTopReleaseGroups.md)
- [SitewideTopReleaseGroupsPayload](docs/Model/SitewideTopReleaseGroupsPayload.md)
- [SitewideTopReleases](docs/Model/SitewideTopReleases.md)
- [SitewideTopReleasesPayload](docs/Model/SitewideTopReleasesPayload.md)
- [SitewideTopReleasesPayloadReleasesInner](docs/Model/SitewideTopReleasesPayloadReleasesInner.md)
- [SubmitFeedbackRequest](docs/Model/SubmitFeedbackRequest.md)
- [SubmitListens](docs/Model/SubmitListens.md)
- [SubmitListensPayloadInner](docs/Model/SubmitListensPayloadInner.md)
- [SubmitManualMapping](docs/Model/SubmitManualMapping.md)
- [TopArtistsForUser](docs/Model/TopArtistsForUser.md)
- [TopArtistsForUserPayload](docs/Model/TopArtistsForUserPayload.md)
- [TopArtistsForUserPayloadArtistsInner](docs/Model/TopArtistsForUserPayloadArtistsInner.md)
- [TopRecordingsForArtistInner](docs/Model/TopRecordingsForArtistInner.md)
- [TopRecordingsForArtistInnerReleaseColor](docs/Model/TopRecordingsForArtistInnerReleaseColor.md)
- [TopRecordingsForUser](docs/Model/TopRecordingsForUser.md)
- [TopRecordingsForUserPayload](docs/Model/TopRecordingsForUserPayload.md)
- [TopRecordingsForUserPayloadRecordingsInner](docs/Model/TopRecordingsForUserPayloadRecordingsInner.md)
- [TopReleaseGroupsForArtistInner](docs/Model/TopReleaseGroupsForArtistInner.md)
- [TopReleaseGroupsForArtistInnerArtist](docs/Model/TopReleaseGroupsForArtistInnerArtist.md)
- [TopReleaseGroupsForArtistInnerRelease](docs/Model/TopReleaseGroupsForArtistInnerRelease.md)
- [TopReleaseGroupsForArtistInnerReleaseGroup](docs/Model/TopReleaseGroupsForArtistInnerReleaseGroup.md)
- [TopReleaseGroupsForArtistInnerTag](docs/Model/TopReleaseGroupsForArtistInnerTag.md)
- [TopReleaseGroupsForArtistInnerTagArtistInner](docs/Model/TopReleaseGroupsForArtistInnerTagArtistInner.md)
- [TopReleaseGroupsForArtistInnerTagReleaseGroupInner](docs/Model/TopReleaseGroupsForArtistInnerTagReleaseGroupInner.md)
- [TopReleaseGroupsForUser](docs/Model/TopReleaseGroupsForUser.md)
- [TopReleaseGroupsForUserPayload](docs/Model/TopReleaseGroupsForUserPayload.md)
- [TopReleasesForUser](docs/Model/TopReleasesForUser.md)
- [TopReleasesForUserPayload](docs/Model/TopReleasesForUserPayload.md)
- [TopReleasesForUserPayloadReleasesInner](docs/Model/TopReleasesForUserPayloadReleasesInner.md)
- [TopReleasesForUserPayloadReleasesInnerArtistsInner](docs/Model/TopReleasesForUserPayloadReleasesInnerArtistsInner.md)
- [TrackMetadata](docs/Model/TrackMetadata.md)
- [UpdatePinRequest](docs/Model/UpdatePinRequest.md)
- [ValidateToken](docs/Model/ValidateToken.md)
- [YearInMusicForUser](docs/Model/YearInMusicForUser.md)
- [YearInMusicForUserPayload](docs/Model/YearInMusicForUserPayload.md)
- [YearInMusicForUserPayloadData](docs/Model/YearInMusicForUserPayloadData.md)
- [YearInMusicForUserPayloadDataNewReleasesOfTopArtistsInner](docs/Model/YearInMusicForUserPayloadDataNewReleasesOfTopArtistsInner.md)
- [YearInMusicForUserPayloadDataTopGenresInner](docs/Model/YearInMusicForUserPayloadDataTopGenresInner.md)
- [YearInMusicImage](docs/Model/YearInMusicImage.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v-2024-07-17.0`
    - Generator version: `7.12.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
