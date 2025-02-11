<?php
/**
 * AdditionalInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ListenBrainz Swagger - OpenAPI 3.0
 *
 * OpenAPI client defintion.
 *
 * The version of the OpenAPI document: v-2024-07-17.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Listenbrainz\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AdditionalInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'additionalInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'media_player' => 'string',
        'media_player_version' => 'string',
        'submission_client' => 'string',
        'submission_client_version' => 'string',
        'music_service' => 'string',
        'music_service_name' => 'string',
        'origin_url' => 'string',
        'release_mbid' => 'string',
        'artist_mbids' => 'string[]',
        'recording_mbid' => 'string',
        'recording_msid' => 'string',
        'tags' => 'string[]',
        'duration' => 'int',
        'duration_ms' => 'int',
        'tracknumber' => 'int',
        'release_group_mbid' => 'string',
        'track_mbid' => 'string',
        'work_mbids' => 'string[]',
        'isrc' => 'string',
        'spotify_id' => 'string',
        'discnumber' => 'int',
        'listening_from' => 'string',
        'release_artist_name' => 'string',
        'release_artist_names' => 'string[]',
        'spotify_album_artist_ids' => 'string[]',
        'spotify_album_id' => 'string',
        'spotify_artist_ids' => 'string[]',
        'youtube_id' => 'string',
        'albumartist' => 'string',
        'comment' => 'string',
        'date' => 'string',
        'genre' => 'string',
        'artist_names' => 'string[]',
        'track_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'media_player' => null,
        'media_player_version' => null,
        'submission_client' => null,
        'submission_client_version' => null,
        'music_service' => null,
        'music_service_name' => null,
        'origin_url' => null,
        'release_mbid' => 'uuid',
        'artist_mbids' => 'uuid',
        'recording_mbid' => 'uuid',
        'recording_msid' => 'uuid',
        'tags' => null,
        'duration' => null,
        'duration_ms' => null,
        'tracknumber' => null,
        'release_group_mbid' => 'uuid',
        'track_mbid' => 'uuid',
        'work_mbids' => 'uuid',
        'isrc' => null,
        'spotify_id' => null,
        'discnumber' => null,
        'listening_from' => null,
        'release_artist_name' => null,
        'release_artist_names' => null,
        'spotify_album_artist_ids' => null,
        'spotify_album_id' => null,
        'spotify_artist_ids' => null,
        'youtube_id' => null,
        'albumartist' => null,
        'comment' => null,
        'date' => null,
        'genre' => null,
        'artist_names' => null,
        'track_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'media_player' => false,
        'media_player_version' => false,
        'submission_client' => false,
        'submission_client_version' => false,
        'music_service' => false,
        'music_service_name' => false,
        'origin_url' => false,
        'release_mbid' => false,
        'artist_mbids' => false,
        'recording_mbid' => false,
        'recording_msid' => false,
        'tags' => false,
        'duration' => false,
        'duration_ms' => false,
        'tracknumber' => false,
        'release_group_mbid' => false,
        'track_mbid' => false,
        'work_mbids' => false,
        'isrc' => false,
        'spotify_id' => false,
        'discnumber' => false,
        'listening_from' => false,
        'release_artist_name' => false,
        'release_artist_names' => false,
        'spotify_album_artist_ids' => false,
        'spotify_album_id' => false,
        'spotify_artist_ids' => false,
        'youtube_id' => false,
        'albumartist' => false,
        'comment' => false,
        'date' => false,
        'genre' => false,
        'artist_names' => false,
        'track_number' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'media_player' => 'media_player',
        'media_player_version' => 'media_player_version',
        'submission_client' => 'submission_client',
        'submission_client_version' => 'submission_client_version',
        'music_service' => 'music_service',
        'music_service_name' => 'music_service_name',
        'origin_url' => 'origin_url',
        'release_mbid' => 'release_mbid',
        'artist_mbids' => 'artist_mbids',
        'recording_mbid' => 'recording_mbid',
        'recording_msid' => 'recording_msid',
        'tags' => 'tags',
        'duration' => 'duration',
        'duration_ms' => 'duration_ms',
        'tracknumber' => 'tracknumber',
        'release_group_mbid' => 'release_group_mbid',
        'track_mbid' => 'track_mbid',
        'work_mbids' => 'work_mbids',
        'isrc' => 'isrc',
        'spotify_id' => 'spotify_id',
        'discnumber' => 'discnumber',
        'listening_from' => 'listening_from',
        'release_artist_name' => 'release_artist_name',
        'release_artist_names' => 'release_artist_names',
        'spotify_album_artist_ids' => 'spotify_album_artist_ids',
        'spotify_album_id' => 'spotify_album_id',
        'spotify_artist_ids' => 'spotify_artist_ids',
        'youtube_id' => 'youtube_id',
        'albumartist' => 'albumartist',
        'comment' => 'comment',
        'date' => 'date',
        'genre' => 'genre',
        'artist_names' => 'artist_names',
        'track_number' => 'trackNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media_player' => 'setMediaPlayer',
        'media_player_version' => 'setMediaPlayerVersion',
        'submission_client' => 'setSubmissionClient',
        'submission_client_version' => 'setSubmissionClientVersion',
        'music_service' => 'setMusicService',
        'music_service_name' => 'setMusicServiceName',
        'origin_url' => 'setOriginUrl',
        'release_mbid' => 'setReleaseMbid',
        'artist_mbids' => 'setArtistMbids',
        'recording_mbid' => 'setRecordingMbid',
        'recording_msid' => 'setRecordingMsid',
        'tags' => 'setTags',
        'duration' => 'setDuration',
        'duration_ms' => 'setDurationMs',
        'tracknumber' => 'setTracknumber',
        'release_group_mbid' => 'setReleaseGroupMbid',
        'track_mbid' => 'setTrackMbid',
        'work_mbids' => 'setWorkMbids',
        'isrc' => 'setIsrc',
        'spotify_id' => 'setSpotifyId',
        'discnumber' => 'setDiscnumber',
        'listening_from' => 'setListeningFrom',
        'release_artist_name' => 'setReleaseArtistName',
        'release_artist_names' => 'setReleaseArtistNames',
        'spotify_album_artist_ids' => 'setSpotifyAlbumArtistIds',
        'spotify_album_id' => 'setSpotifyAlbumId',
        'spotify_artist_ids' => 'setSpotifyArtistIds',
        'youtube_id' => 'setYoutubeId',
        'albumartist' => 'setAlbumartist',
        'comment' => 'setComment',
        'date' => 'setDate',
        'genre' => 'setGenre',
        'artist_names' => 'setArtistNames',
        'track_number' => 'setTrackNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media_player' => 'getMediaPlayer',
        'media_player_version' => 'getMediaPlayerVersion',
        'submission_client' => 'getSubmissionClient',
        'submission_client_version' => 'getSubmissionClientVersion',
        'music_service' => 'getMusicService',
        'music_service_name' => 'getMusicServiceName',
        'origin_url' => 'getOriginUrl',
        'release_mbid' => 'getReleaseMbid',
        'artist_mbids' => 'getArtistMbids',
        'recording_mbid' => 'getRecordingMbid',
        'recording_msid' => 'getRecordingMsid',
        'tags' => 'getTags',
        'duration' => 'getDuration',
        'duration_ms' => 'getDurationMs',
        'tracknumber' => 'getTracknumber',
        'release_group_mbid' => 'getReleaseGroupMbid',
        'track_mbid' => 'getTrackMbid',
        'work_mbids' => 'getWorkMbids',
        'isrc' => 'getIsrc',
        'spotify_id' => 'getSpotifyId',
        'discnumber' => 'getDiscnumber',
        'listening_from' => 'getListeningFrom',
        'release_artist_name' => 'getReleaseArtistName',
        'release_artist_names' => 'getReleaseArtistNames',
        'spotify_album_artist_ids' => 'getSpotifyAlbumArtistIds',
        'spotify_album_id' => 'getSpotifyAlbumId',
        'spotify_artist_ids' => 'getSpotifyArtistIds',
        'youtube_id' => 'getYoutubeId',
        'albumartist' => 'getAlbumartist',
        'comment' => 'getComment',
        'date' => 'getDate',
        'genre' => 'getGenre',
        'artist_names' => 'getArtistNames',
        'track_number' => 'getTrackNumber'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('media_player', $data ?? [], null);
        $this->setIfExists('media_player_version', $data ?? [], null);
        $this->setIfExists('submission_client', $data ?? [], null);
        $this->setIfExists('submission_client_version', $data ?? [], null);
        $this->setIfExists('music_service', $data ?? [], null);
        $this->setIfExists('music_service_name', $data ?? [], null);
        $this->setIfExists('origin_url', $data ?? [], null);
        $this->setIfExists('release_mbid', $data ?? [], null);
        $this->setIfExists('artist_mbids', $data ?? [], null);
        $this->setIfExists('recording_mbid', $data ?? [], null);
        $this->setIfExists('recording_msid', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('duration_ms', $data ?? [], null);
        $this->setIfExists('tracknumber', $data ?? [], null);
        $this->setIfExists('release_group_mbid', $data ?? [], null);
        $this->setIfExists('track_mbid', $data ?? [], null);
        $this->setIfExists('work_mbids', $data ?? [], null);
        $this->setIfExists('isrc', $data ?? [], null);
        $this->setIfExists('spotify_id', $data ?? [], null);
        $this->setIfExists('discnumber', $data ?? [], null);
        $this->setIfExists('listening_from', $data ?? [], null);
        $this->setIfExists('release_artist_name', $data ?? [], null);
        $this->setIfExists('release_artist_names', $data ?? [], null);
        $this->setIfExists('spotify_album_artist_ids', $data ?? [], null);
        $this->setIfExists('spotify_album_id', $data ?? [], null);
        $this->setIfExists('spotify_artist_ids', $data ?? [], null);
        $this->setIfExists('youtube_id', $data ?? [], null);
        $this->setIfExists('albumartist', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('genre', $data ?? [], null);
        $this->setIfExists('artist_names', $data ?? [], null);
        $this->setIfExists('track_number', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets media_player
     *
     * @return string|null
     */
    public function getMediaPlayer()
    {
        return $this->container['media_player'];
    }

    /**
     * Sets media_player
     *
     * @param string|null $media_player media_player
     *
     * @return self
     */
    public function setMediaPlayer($media_player)
    {
        if (is_null($media_player)) {
            throw new \InvalidArgumentException('non-nullable media_player cannot be null');
        }
        $this->container['media_player'] = $media_player;

        return $this;
    }

    /**
     * Gets media_player_version
     *
     * @return string|null
     */
    public function getMediaPlayerVersion()
    {
        return $this->container['media_player_version'];
    }

    /**
     * Sets media_player_version
     *
     * @param string|null $media_player_version media_player_version
     *
     * @return self
     */
    public function setMediaPlayerVersion($media_player_version)
    {
        if (is_null($media_player_version)) {
            throw new \InvalidArgumentException('non-nullable media_player_version cannot be null');
        }
        $this->container['media_player_version'] = $media_player_version;

        return $this;
    }

    /**
     * Gets submission_client
     *
     * @return string|null
     */
    public function getSubmissionClient()
    {
        return $this->container['submission_client'];
    }

    /**
     * Sets submission_client
     *
     * @param string|null $submission_client submission_client
     *
     * @return self
     */
    public function setSubmissionClient($submission_client)
    {
        if (is_null($submission_client)) {
            throw new \InvalidArgumentException('non-nullable submission_client cannot be null');
        }
        $this->container['submission_client'] = $submission_client;

        return $this;
    }

    /**
     * Gets submission_client_version
     *
     * @return string|null
     */
    public function getSubmissionClientVersion()
    {
        return $this->container['submission_client_version'];
    }

    /**
     * Sets submission_client_version
     *
     * @param string|null $submission_client_version submission_client_version
     *
     * @return self
     */
    public function setSubmissionClientVersion($submission_client_version)
    {
        if (is_null($submission_client_version)) {
            throw new \InvalidArgumentException('non-nullable submission_client_version cannot be null');
        }
        $this->container['submission_client_version'] = $submission_client_version;

        return $this;
    }

    /**
     * Gets music_service
     *
     * @return string|null
     */
    public function getMusicService()
    {
        return $this->container['music_service'];
    }

    /**
     * Sets music_service
     *
     * @param string|null $music_service music_service
     *
     * @return self
     */
    public function setMusicService($music_service)
    {
        if (is_null($music_service)) {
            throw new \InvalidArgumentException('non-nullable music_service cannot be null');
        }
        $this->container['music_service'] = $music_service;

        return $this;
    }

    /**
     * Gets music_service_name
     *
     * @return string|null
     */
    public function getMusicServiceName()
    {
        return $this->container['music_service_name'];
    }

    /**
     * Sets music_service_name
     *
     * @param string|null $music_service_name music_service_name
     *
     * @return self
     */
    public function setMusicServiceName($music_service_name)
    {
        if (is_null($music_service_name)) {
            throw new \InvalidArgumentException('non-nullable music_service_name cannot be null');
        }
        $this->container['music_service_name'] = $music_service_name;

        return $this;
    }

    /**
     * Gets origin_url
     *
     * @return string|null
     */
    public function getOriginUrl()
    {
        return $this->container['origin_url'];
    }

    /**
     * Sets origin_url
     *
     * @param string|null $origin_url origin_url
     *
     * @return self
     */
    public function setOriginUrl($origin_url)
    {
        if (is_null($origin_url)) {
            throw new \InvalidArgumentException('non-nullable origin_url cannot be null');
        }
        $this->container['origin_url'] = $origin_url;

        return $this;
    }

    /**
     * Gets release_mbid
     *
     * @return string|null
     */
    public function getReleaseMbid()
    {
        return $this->container['release_mbid'];
    }

    /**
     * Sets release_mbid
     *
     * @param string|null $release_mbid release_mbid
     *
     * @return self
     */
    public function setReleaseMbid($release_mbid)
    {
        if (is_null($release_mbid)) {
            throw new \InvalidArgumentException('non-nullable release_mbid cannot be null');
        }
        $this->container['release_mbid'] = $release_mbid;

        return $this;
    }

    /**
     * Gets artist_mbids
     *
     * @return string[]|null
     */
    public function getArtistMbids()
    {
        return $this->container['artist_mbids'];
    }

    /**
     * Sets artist_mbids
     *
     * @param string[]|null $artist_mbids artist_mbids
     *
     * @return self
     */
    public function setArtistMbids($artist_mbids)
    {
        if (is_null($artist_mbids)) {
            throw new \InvalidArgumentException('non-nullable artist_mbids cannot be null');
        }
        $this->container['artist_mbids'] = $artist_mbids;

        return $this;
    }

    /**
     * Gets recording_mbid
     *
     * @return string|null
     */
    public function getRecordingMbid()
    {
        return $this->container['recording_mbid'];
    }

    /**
     * Sets recording_mbid
     *
     * @param string|null $recording_mbid recording_mbid
     *
     * @return self
     */
    public function setRecordingMbid($recording_mbid)
    {
        if (is_null($recording_mbid)) {
            throw new \InvalidArgumentException('non-nullable recording_mbid cannot be null');
        }
        $this->container['recording_mbid'] = $recording_mbid;

        return $this;
    }

    /**
     * Gets recording_msid
     *
     * @return string|null
     */
    public function getRecordingMsid()
    {
        return $this->container['recording_msid'];
    }

    /**
     * Sets recording_msid
     *
     * @param string|null $recording_msid recording_msid
     *
     * @return self
     */
    public function setRecordingMsid($recording_msid)
    {
        if (is_null($recording_msid)) {
            throw new \InvalidArgumentException('non-nullable recording_msid cannot be null');
        }
        $this->container['recording_msid'] = $recording_msid;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets duration_ms
     *
     * @return int|null
     */
    public function getDurationMs()
    {
        return $this->container['duration_ms'];
    }

    /**
     * Sets duration_ms
     *
     * @param int|null $duration_ms duration_ms
     *
     * @return self
     */
    public function setDurationMs($duration_ms)
    {
        if (is_null($duration_ms)) {
            throw new \InvalidArgumentException('non-nullable duration_ms cannot be null');
        }
        $this->container['duration_ms'] = $duration_ms;

        return $this;
    }

    /**
     * Gets tracknumber
     *
     * @return int|null
     */
    public function getTracknumber()
    {
        return $this->container['tracknumber'];
    }

    /**
     * Sets tracknumber
     *
     * @param int|null $tracknumber tracknumber
     *
     * @return self
     */
    public function setTracknumber($tracknumber)
    {
        if (is_null($tracknumber)) {
            throw new \InvalidArgumentException('non-nullable tracknumber cannot be null');
        }
        $this->container['tracknumber'] = $tracknumber;

        return $this;
    }

    /**
     * Gets release_group_mbid
     *
     * @return string|null
     */
    public function getReleaseGroupMbid()
    {
        return $this->container['release_group_mbid'];
    }

    /**
     * Sets release_group_mbid
     *
     * @param string|null $release_group_mbid release_group_mbid
     *
     * @return self
     */
    public function setReleaseGroupMbid($release_group_mbid)
    {
        if (is_null($release_group_mbid)) {
            throw new \InvalidArgumentException('non-nullable release_group_mbid cannot be null');
        }
        $this->container['release_group_mbid'] = $release_group_mbid;

        return $this;
    }

    /**
     * Gets track_mbid
     *
     * @return string|null
     */
    public function getTrackMbid()
    {
        return $this->container['track_mbid'];
    }

    /**
     * Sets track_mbid
     *
     * @param string|null $track_mbid track_mbid
     *
     * @return self
     */
    public function setTrackMbid($track_mbid)
    {
        if (is_null($track_mbid)) {
            throw new \InvalidArgumentException('non-nullable track_mbid cannot be null');
        }
        $this->container['track_mbid'] = $track_mbid;

        return $this;
    }

    /**
     * Gets work_mbids
     *
     * @return string[]|null
     */
    public function getWorkMbids()
    {
        return $this->container['work_mbids'];
    }

    /**
     * Sets work_mbids
     *
     * @param string[]|null $work_mbids work_mbids
     *
     * @return self
     */
    public function setWorkMbids($work_mbids)
    {
        if (is_null($work_mbids)) {
            throw new \InvalidArgumentException('non-nullable work_mbids cannot be null');
        }
        $this->container['work_mbids'] = $work_mbids;

        return $this;
    }

    /**
     * Gets isrc
     *
     * @return string|null
     */
    public function getIsrc()
    {
        return $this->container['isrc'];
    }

    /**
     * Sets isrc
     *
     * @param string|null $isrc isrc
     *
     * @return self
     */
    public function setIsrc($isrc)
    {
        if (is_null($isrc)) {
            throw new \InvalidArgumentException('non-nullable isrc cannot be null');
        }
        $this->container['isrc'] = $isrc;

        return $this;
    }

    /**
     * Gets spotify_id
     *
     * @return string|null
     */
    public function getSpotifyId()
    {
        return $this->container['spotify_id'];
    }

    /**
     * Sets spotify_id
     *
     * @param string|null $spotify_id spotify_id
     *
     * @return self
     */
    public function setSpotifyId($spotify_id)
    {
        if (is_null($spotify_id)) {
            throw new \InvalidArgumentException('non-nullable spotify_id cannot be null');
        }
        $this->container['spotify_id'] = $spotify_id;

        return $this;
    }

    /**
     * Gets discnumber
     *
     * @return int|null
     */
    public function getDiscnumber()
    {
        return $this->container['discnumber'];
    }

    /**
     * Sets discnumber
     *
     * @param int|null $discnumber discnumber
     *
     * @return self
     */
    public function setDiscnumber($discnumber)
    {
        if (is_null($discnumber)) {
            throw new \InvalidArgumentException('non-nullable discnumber cannot be null');
        }
        $this->container['discnumber'] = $discnumber;

        return $this;
    }

    /**
     * Gets listening_from
     *
     * @return string|null
     */
    public function getListeningFrom()
    {
        return $this->container['listening_from'];
    }

    /**
     * Sets listening_from
     *
     * @param string|null $listening_from listening_from
     *
     * @return self
     */
    public function setListeningFrom($listening_from)
    {
        if (is_null($listening_from)) {
            throw new \InvalidArgumentException('non-nullable listening_from cannot be null');
        }
        $this->container['listening_from'] = $listening_from;

        return $this;
    }

    /**
     * Gets release_artist_name
     *
     * @return string|null
     */
    public function getReleaseArtistName()
    {
        return $this->container['release_artist_name'];
    }

    /**
     * Sets release_artist_name
     *
     * @param string|null $release_artist_name release_artist_name
     *
     * @return self
     */
    public function setReleaseArtistName($release_artist_name)
    {
        if (is_null($release_artist_name)) {
            throw new \InvalidArgumentException('non-nullable release_artist_name cannot be null');
        }
        $this->container['release_artist_name'] = $release_artist_name;

        return $this;
    }

    /**
     * Gets release_artist_names
     *
     * @return string[]|null
     */
    public function getReleaseArtistNames()
    {
        return $this->container['release_artist_names'];
    }

    /**
     * Sets release_artist_names
     *
     * @param string[]|null $release_artist_names release_artist_names
     *
     * @return self
     */
    public function setReleaseArtistNames($release_artist_names)
    {
        if (is_null($release_artist_names)) {
            throw new \InvalidArgumentException('non-nullable release_artist_names cannot be null');
        }
        $this->container['release_artist_names'] = $release_artist_names;

        return $this;
    }

    /**
     * Gets spotify_album_artist_ids
     *
     * @return string[]|null
     */
    public function getSpotifyAlbumArtistIds()
    {
        return $this->container['spotify_album_artist_ids'];
    }

    /**
     * Sets spotify_album_artist_ids
     *
     * @param string[]|null $spotify_album_artist_ids spotify_album_artist_ids
     *
     * @return self
     */
    public function setSpotifyAlbumArtistIds($spotify_album_artist_ids)
    {
        if (is_null($spotify_album_artist_ids)) {
            throw new \InvalidArgumentException('non-nullable spotify_album_artist_ids cannot be null');
        }
        $this->container['spotify_album_artist_ids'] = $spotify_album_artist_ids;

        return $this;
    }

    /**
     * Gets spotify_album_id
     *
     * @return string|null
     */
    public function getSpotifyAlbumId()
    {
        return $this->container['spotify_album_id'];
    }

    /**
     * Sets spotify_album_id
     *
     * @param string|null $spotify_album_id spotify_album_id
     *
     * @return self
     */
    public function setSpotifyAlbumId($spotify_album_id)
    {
        if (is_null($spotify_album_id)) {
            throw new \InvalidArgumentException('non-nullable spotify_album_id cannot be null');
        }
        $this->container['spotify_album_id'] = $spotify_album_id;

        return $this;
    }

    /**
     * Gets spotify_artist_ids
     *
     * @return string[]|null
     */
    public function getSpotifyArtistIds()
    {
        return $this->container['spotify_artist_ids'];
    }

    /**
     * Sets spotify_artist_ids
     *
     * @param string[]|null $spotify_artist_ids spotify_artist_ids
     *
     * @return self
     */
    public function setSpotifyArtistIds($spotify_artist_ids)
    {
        if (is_null($spotify_artist_ids)) {
            throw new \InvalidArgumentException('non-nullable spotify_artist_ids cannot be null');
        }
        $this->container['spotify_artist_ids'] = $spotify_artist_ids;

        return $this;
    }

    /**
     * Gets youtube_id
     *
     * @return string|null
     */
    public function getYoutubeId()
    {
        return $this->container['youtube_id'];
    }

    /**
     * Sets youtube_id
     *
     * @param string|null $youtube_id youtube_id
     *
     * @return self
     */
    public function setYoutubeId($youtube_id)
    {
        if (is_null($youtube_id)) {
            throw new \InvalidArgumentException('non-nullable youtube_id cannot be null');
        }
        $this->container['youtube_id'] = $youtube_id;

        return $this;
    }

    /**
     * Gets albumartist
     *
     * @return string|null
     */
    public function getAlbumartist()
    {
        return $this->container['albumartist'];
    }

    /**
     * Sets albumartist
     *
     * @param string|null $albumartist albumartist
     *
     * @return self
     */
    public function setAlbumartist($albumartist)
    {
        if (is_null($albumartist)) {
            throw new \InvalidArgumentException('non-nullable albumartist cannot be null');
        }
        $this->container['albumartist'] = $albumartist;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets genre
     *
     * @return string|null
     */
    public function getGenre()
    {
        return $this->container['genre'];
    }

    /**
     * Sets genre
     *
     * @param string|null $genre genre
     *
     * @return self
     */
    public function setGenre($genre)
    {
        if (is_null($genre)) {
            throw new \InvalidArgumentException('non-nullable genre cannot be null');
        }
        $this->container['genre'] = $genre;

        return $this;
    }

    /**
     * Gets artist_names
     *
     * @return string[]|null
     */
    public function getArtistNames()
    {
        return $this->container['artist_names'];
    }

    /**
     * Sets artist_names
     *
     * @param string[]|null $artist_names artist_names
     *
     * @return self
     */
    public function setArtistNames($artist_names)
    {
        if (is_null($artist_names)) {
            throw new \InvalidArgumentException('non-nullable artist_names cannot be null');
        }
        $this->container['artist_names'] = $artist_names;

        return $this;
    }

    /**
     * Gets track_number
     *
     * @return string|null
     */
    public function getTrack_Number()
    {
        return $this->container['track_number'];
    }

    /**
     * Sets track_number
     *
     * @param string|null $track_number track_number
     *
     * @return self
     */
    public function setTrack_Number($track_number)
    {
        if (is_null($track_number)) {
            throw new \InvalidArgumentException('non-nullable track_number cannot be null');
        }
        $this->container['track_number'] = $track_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
