<?php
/**
 * YearInMusicForUserPayloadData
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * YearInMusicForUserPayloadData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class YearInMusicForUserPayloadData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'yearInMusicForUser_payload_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artist_map' => '\OpenAPI\Client\Model\ArtistMapForUserPayloadArtistMapInner[]',
        'day_of_week' => 'string',
        'listens_per_day' => '\OpenAPI\Client\Model\ListeningActivityForUserPayloadListeningActivityInner[]',
        'most_listened_year' => 'array<string,int>',
        'new_releases_of_top_artists' => '\OpenAPI\Client\Model\YearInMusicForUserPayloadDataNewReleasesOfTopArtistsInner[]',
        'playlist_top_discoveries_for_year' => '\OpenAPI\Client\Model\Playlist',
        'playlist_top_missed_recordings_for_year' => '\OpenAPI\Client\Model\Playlist',
        'similar_users' => 'array<string,int>',
        'top_artists' => '\OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[]',
        'top_genres' => '\OpenAPI\Client\Model\YearInMusicForUserPayloadDataTopGenresInner[]',
        'top_recordings' => '\OpenAPI\Client\Model\TopRecordingsForUserPayloadRecordingsInner[]',
        'top_release_groups' => '\OpenAPI\Client\Model\ReleaseGroupsInner[]',
        'total_artists_count' => 'int',
        'total_listen_count' => 'int',
        'total_listening_time' => 'int',
        'total_new_artists_discovered' => 'int',
        'total_recordings_count' => 'int',
        'total_release_groups_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'artist_map' => null,
        'day_of_week' => null,
        'listens_per_day' => null,
        'most_listened_year' => null,
        'new_releases_of_top_artists' => null,
        'playlist_top_discoveries_for_year' => null,
        'playlist_top_missed_recordings_for_year' => null,
        'similar_users' => null,
        'top_artists' => null,
        'top_genres' => null,
        'top_recordings' => null,
        'top_release_groups' => null,
        'total_artists_count' => null,
        'total_listen_count' => null,
        'total_listening_time' => null,
        'total_new_artists_discovered' => null,
        'total_recordings_count' => null,
        'total_release_groups_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artist_map' => false,
        'day_of_week' => false,
        'listens_per_day' => false,
        'most_listened_year' => false,
        'new_releases_of_top_artists' => false,
        'playlist_top_discoveries_for_year' => false,
        'playlist_top_missed_recordings_for_year' => false,
        'similar_users' => false,
        'top_artists' => false,
        'top_genres' => false,
        'top_recordings' => false,
        'top_release_groups' => false,
        'total_artists_count' => false,
        'total_listen_count' => false,
        'total_listening_time' => false,
        'total_new_artists_discovered' => false,
        'total_recordings_count' => false,
        'total_release_groups_count' => false
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
        'artist_map' => 'artist_map',
        'day_of_week' => 'day_of_week',
        'listens_per_day' => 'listens_per_day',
        'most_listened_year' => 'most_listened_year',
        'new_releases_of_top_artists' => 'new_releases_of_top_artists',
        'playlist_top_discoveries_for_year' => 'playlist-top-discoveries-for-year',
        'playlist_top_missed_recordings_for_year' => 'playlist-top-missed-recordings-for-year',
        'similar_users' => 'similar_users',
        'top_artists' => 'top_artists',
        'top_genres' => 'top_genres',
        'top_recordings' => 'top_recordings',
        'top_release_groups' => 'top_release_groups',
        'total_artists_count' => 'total_artists_count',
        'total_listen_count' => 'total_listen_count',
        'total_listening_time' => 'total_listening_time',
        'total_new_artists_discovered' => 'total_new_artists_discovered',
        'total_recordings_count' => 'total_recordings_count',
        'total_release_groups_count' => 'total_release_groups_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist_map' => 'setArtistMap',
        'day_of_week' => 'setDayOfWeek',
        'listens_per_day' => 'setListensPerDay',
        'most_listened_year' => 'setMostListenedYear',
        'new_releases_of_top_artists' => 'setNewReleasesOfTopArtists',
        'playlist_top_discoveries_for_year' => 'setPlaylistTopDiscoveriesForYear',
        'playlist_top_missed_recordings_for_year' => 'setPlaylistTopMissedRecordingsForYear',
        'similar_users' => 'setSimilarUsers',
        'top_artists' => 'setTopArtists',
        'top_genres' => 'setTopGenres',
        'top_recordings' => 'setTopRecordings',
        'top_release_groups' => 'setTopReleaseGroups',
        'total_artists_count' => 'setTotalArtistsCount',
        'total_listen_count' => 'setTotalListenCount',
        'total_listening_time' => 'setTotalListeningTime',
        'total_new_artists_discovered' => 'setTotalNewArtistsDiscovered',
        'total_recordings_count' => 'setTotalRecordingsCount',
        'total_release_groups_count' => 'setTotalReleaseGroupsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist_map' => 'getArtistMap',
        'day_of_week' => 'getDayOfWeek',
        'listens_per_day' => 'getListensPerDay',
        'most_listened_year' => 'getMostListenedYear',
        'new_releases_of_top_artists' => 'getNewReleasesOfTopArtists',
        'playlist_top_discoveries_for_year' => 'getPlaylistTopDiscoveriesForYear',
        'playlist_top_missed_recordings_for_year' => 'getPlaylistTopMissedRecordingsForYear',
        'similar_users' => 'getSimilarUsers',
        'top_artists' => 'getTopArtists',
        'top_genres' => 'getTopGenres',
        'top_recordings' => 'getTopRecordings',
        'top_release_groups' => 'getTopReleaseGroups',
        'total_artists_count' => 'getTotalArtistsCount',
        'total_listen_count' => 'getTotalListenCount',
        'total_listening_time' => 'getTotalListeningTime',
        'total_new_artists_discovered' => 'getTotalNewArtistsDiscovered',
        'total_recordings_count' => 'getTotalRecordingsCount',
        'total_release_groups_count' => 'getTotalReleaseGroupsCount'
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
        $this->setIfExists('artist_map', $data ?? [], null);
        $this->setIfExists('day_of_week', $data ?? [], null);
        $this->setIfExists('listens_per_day', $data ?? [], null);
        $this->setIfExists('most_listened_year', $data ?? [], null);
        $this->setIfExists('new_releases_of_top_artists', $data ?? [], null);
        $this->setIfExists('playlist_top_discoveries_for_year', $data ?? [], null);
        $this->setIfExists('playlist_top_missed_recordings_for_year', $data ?? [], null);
        $this->setIfExists('similar_users', $data ?? [], null);
        $this->setIfExists('top_artists', $data ?? [], null);
        $this->setIfExists('top_genres', $data ?? [], null);
        $this->setIfExists('top_recordings', $data ?? [], null);
        $this->setIfExists('top_release_groups', $data ?? [], null);
        $this->setIfExists('total_artists_count', $data ?? [], null);
        $this->setIfExists('total_listen_count', $data ?? [], null);
        $this->setIfExists('total_listening_time', $data ?? [], null);
        $this->setIfExists('total_new_artists_discovered', $data ?? [], null);
        $this->setIfExists('total_recordings_count', $data ?? [], null);
        $this->setIfExists('total_release_groups_count', $data ?? [], null);
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

        if ($this->container['artist_map'] === null) {
            $invalidProperties[] = "'artist_map' can't be null";
        }
        if ($this->container['day_of_week'] === null) {
            $invalidProperties[] = "'day_of_week' can't be null";
        }
        if ($this->container['listens_per_day'] === null) {
            $invalidProperties[] = "'listens_per_day' can't be null";
        }
        if ($this->container['most_listened_year'] === null) {
            $invalidProperties[] = "'most_listened_year' can't be null";
        }
        if ($this->container['new_releases_of_top_artists'] === null) {
            $invalidProperties[] = "'new_releases_of_top_artists' can't be null";
        }
        if ($this->container['playlist_top_discoveries_for_year'] === null) {
            $invalidProperties[] = "'playlist_top_discoveries_for_year' can't be null";
        }
        if ($this->container['playlist_top_missed_recordings_for_year'] === null) {
            $invalidProperties[] = "'playlist_top_missed_recordings_for_year' can't be null";
        }
        if ($this->container['similar_users'] === null) {
            $invalidProperties[] = "'similar_users' can't be null";
        }
        if ($this->container['top_artists'] === null) {
            $invalidProperties[] = "'top_artists' can't be null";
        }
        if ($this->container['top_genres'] === null) {
            $invalidProperties[] = "'top_genres' can't be null";
        }
        if ($this->container['top_recordings'] === null) {
            $invalidProperties[] = "'top_recordings' can't be null";
        }
        if ($this->container['top_release_groups'] === null) {
            $invalidProperties[] = "'top_release_groups' can't be null";
        }
        if ($this->container['total_artists_count'] === null) {
            $invalidProperties[] = "'total_artists_count' can't be null";
        }
        if ($this->container['total_listen_count'] === null) {
            $invalidProperties[] = "'total_listen_count' can't be null";
        }
        if ($this->container['total_listening_time'] === null) {
            $invalidProperties[] = "'total_listening_time' can't be null";
        }
        if ($this->container['total_new_artists_discovered'] === null) {
            $invalidProperties[] = "'total_new_artists_discovered' can't be null";
        }
        if ($this->container['total_recordings_count'] === null) {
            $invalidProperties[] = "'total_recordings_count' can't be null";
        }
        if ($this->container['total_release_groups_count'] === null) {
            $invalidProperties[] = "'total_release_groups_count' can't be null";
        }
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
     * Gets artist_map
     *
     * @return \OpenAPI\Client\Model\ArtistMapForUserPayloadArtistMapInner[]
     */
    public function getArtistMap()
    {
        return $this->container['artist_map'];
    }

    /**
     * Sets artist_map
     *
     * @param \OpenAPI\Client\Model\ArtistMapForUserPayloadArtistMapInner[] $artist_map artist_map
     *
     * @return self
     */
    public function setArtistMap($artist_map)
    {
        if (is_null($artist_map)) {
            throw new \InvalidArgumentException('non-nullable artist_map cannot be null');
        }
        $this->container['artist_map'] = $artist_map;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string $day_of_week day_of_week
     *
     * @return self
     */
    public function setDayOfWeek($day_of_week)
    {
        if (is_null($day_of_week)) {
            throw new \InvalidArgumentException('non-nullable day_of_week cannot be null');
        }
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets listens_per_day
     *
     * @return \OpenAPI\Client\Model\ListeningActivityForUserPayloadListeningActivityInner[]
     */
    public function getListensPerDay()
    {
        return $this->container['listens_per_day'];
    }

    /**
     * Sets listens_per_day
     *
     * @param \OpenAPI\Client\Model\ListeningActivityForUserPayloadListeningActivityInner[] $listens_per_day listens_per_day
     *
     * @return self
     */
    public function setListensPerDay($listens_per_day)
    {
        if (is_null($listens_per_day)) {
            throw new \InvalidArgumentException('non-nullable listens_per_day cannot be null');
        }
        $this->container['listens_per_day'] = $listens_per_day;

        return $this;
    }

    /**
     * Gets most_listened_year
     *
     * @return array<string,int>
     */
    public function getMostListenedYear()
    {
        return $this->container['most_listened_year'];
    }

    /**
     * Sets most_listened_year
     *
     * @param array<string,int> $most_listened_year most_listened_year
     *
     * @return self
     */
    public function setMostListenedYear($most_listened_year)
    {
        if (is_null($most_listened_year)) {
            throw new \InvalidArgumentException('non-nullable most_listened_year cannot be null');
        }
        $this->container['most_listened_year'] = $most_listened_year;

        return $this;
    }

    /**
     * Gets new_releases_of_top_artists
     *
     * @return \OpenAPI\Client\Model\YearInMusicForUserPayloadDataNewReleasesOfTopArtistsInner[]
     */
    public function getNewReleasesOfTopArtists()
    {
        return $this->container['new_releases_of_top_artists'];
    }

    /**
     * Sets new_releases_of_top_artists
     *
     * @param \OpenAPI\Client\Model\YearInMusicForUserPayloadDataNewReleasesOfTopArtistsInner[] $new_releases_of_top_artists new_releases_of_top_artists
     *
     * @return self
     */
    public function setNewReleasesOfTopArtists($new_releases_of_top_artists)
    {
        if (is_null($new_releases_of_top_artists)) {
            throw new \InvalidArgumentException('non-nullable new_releases_of_top_artists cannot be null');
        }
        $this->container['new_releases_of_top_artists'] = $new_releases_of_top_artists;

        return $this;
    }

    /**
     * Gets playlist_top_discoveries_for_year
     *
     * @return \OpenAPI\Client\Model\Playlist
     */
    public function getPlaylistTopDiscoveriesForYear()
    {
        return $this->container['playlist_top_discoveries_for_year'];
    }

    /**
     * Sets playlist_top_discoveries_for_year
     *
     * @param \OpenAPI\Client\Model\Playlist $playlist_top_discoveries_for_year playlist_top_discoveries_for_year
     *
     * @return self
     */
    public function setPlaylistTopDiscoveriesForYear($playlist_top_discoveries_for_year)
    {
        if (is_null($playlist_top_discoveries_for_year)) {
            throw new \InvalidArgumentException('non-nullable playlist_top_discoveries_for_year cannot be null');
        }
        $this->container['playlist_top_discoveries_for_year'] = $playlist_top_discoveries_for_year;

        return $this;
    }

    /**
     * Gets playlist_top_missed_recordings_for_year
     *
     * @return \OpenAPI\Client\Model\Playlist
     */
    public function getPlaylistTopMissedRecordingsForYear()
    {
        return $this->container['playlist_top_missed_recordings_for_year'];
    }

    /**
     * Sets playlist_top_missed_recordings_for_year
     *
     * @param \OpenAPI\Client\Model\Playlist $playlist_top_missed_recordings_for_year playlist_top_missed_recordings_for_year
     *
     * @return self
     */
    public function setPlaylistTopMissedRecordingsForYear($playlist_top_missed_recordings_for_year)
    {
        if (is_null($playlist_top_missed_recordings_for_year)) {
            throw new \InvalidArgumentException('non-nullable playlist_top_missed_recordings_for_year cannot be null');
        }
        $this->container['playlist_top_missed_recordings_for_year'] = $playlist_top_missed_recordings_for_year;

        return $this;
    }

    /**
     * Gets similar_users
     *
     * @return array<string,int>
     */
    public function getSimilarUsers()
    {
        return $this->container['similar_users'];
    }

    /**
     * Sets similar_users
     *
     * @param array<string,int> $similar_users similar_users
     *
     * @return self
     */
    public function setSimilarUsers($similar_users)
    {
        if (is_null($similar_users)) {
            throw new \InvalidArgumentException('non-nullable similar_users cannot be null');
        }
        $this->container['similar_users'] = $similar_users;

        return $this;
    }

    /**
     * Gets top_artists
     *
     * @return \OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[]
     */
    public function getTopArtists()
    {
        return $this->container['top_artists'];
    }

    /**
     * Sets top_artists
     *
     * @param \OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[] $top_artists top_artists
     *
     * @return self
     */
    public function setTopArtists($top_artists)
    {
        if (is_null($top_artists)) {
            throw new \InvalidArgumentException('non-nullable top_artists cannot be null');
        }
        $this->container['top_artists'] = $top_artists;

        return $this;
    }

    /**
     * Gets top_genres
     *
     * @return \OpenAPI\Client\Model\YearInMusicForUserPayloadDataTopGenresInner[]
     */
    public function getTopGenres()
    {
        return $this->container['top_genres'];
    }

    /**
     * Sets top_genres
     *
     * @param \OpenAPI\Client\Model\YearInMusicForUserPayloadDataTopGenresInner[] $top_genres top_genres
     *
     * @return self
     */
    public function setTopGenres($top_genres)
    {
        if (is_null($top_genres)) {
            throw new \InvalidArgumentException('non-nullable top_genres cannot be null');
        }
        $this->container['top_genres'] = $top_genres;

        return $this;
    }

    /**
     * Gets top_recordings
     *
     * @return \OpenAPI\Client\Model\TopRecordingsForUserPayloadRecordingsInner[]
     */
    public function getTopRecordings()
    {
        return $this->container['top_recordings'];
    }

    /**
     * Sets top_recordings
     *
     * @param \OpenAPI\Client\Model\TopRecordingsForUserPayloadRecordingsInner[] $top_recordings top_recordings
     *
     * @return self
     */
    public function setTopRecordings($top_recordings)
    {
        if (is_null($top_recordings)) {
            throw new \InvalidArgumentException('non-nullable top_recordings cannot be null');
        }
        $this->container['top_recordings'] = $top_recordings;

        return $this;
    }

    /**
     * Gets top_release_groups
     *
     * @return \OpenAPI\Client\Model\ReleaseGroupsInner[]
     */
    public function getTopReleaseGroups()
    {
        return $this->container['top_release_groups'];
    }

    /**
     * Sets top_release_groups
     *
     * @param \OpenAPI\Client\Model\ReleaseGroupsInner[] $top_release_groups top_release_groups
     *
     * @return self
     */
    public function setTopReleaseGroups($top_release_groups)
    {
        if (is_null($top_release_groups)) {
            throw new \InvalidArgumentException('non-nullable top_release_groups cannot be null');
        }
        $this->container['top_release_groups'] = $top_release_groups;

        return $this;
    }

    /**
     * Gets total_artists_count
     *
     * @return int
     */
    public function getTotalArtistsCount()
    {
        return $this->container['total_artists_count'];
    }

    /**
     * Sets total_artists_count
     *
     * @param int $total_artists_count total_artists_count
     *
     * @return self
     */
    public function setTotalArtistsCount($total_artists_count)
    {
        if (is_null($total_artists_count)) {
            throw new \InvalidArgumentException('non-nullable total_artists_count cannot be null');
        }
        $this->container['total_artists_count'] = $total_artists_count;

        return $this;
    }

    /**
     * Gets total_listen_count
     *
     * @return int
     */
    public function getTotalListenCount()
    {
        return $this->container['total_listen_count'];
    }

    /**
     * Sets total_listen_count
     *
     * @param int $total_listen_count total_listen_count
     *
     * @return self
     */
    public function setTotalListenCount($total_listen_count)
    {
        if (is_null($total_listen_count)) {
            throw new \InvalidArgumentException('non-nullable total_listen_count cannot be null');
        }
        $this->container['total_listen_count'] = $total_listen_count;

        return $this;
    }

    /**
     * Gets total_listening_time
     *
     * @return int
     */
    public function getTotalListeningTime()
    {
        return $this->container['total_listening_time'];
    }

    /**
     * Sets total_listening_time
     *
     * @param int $total_listening_time total_listening_time
     *
     * @return self
     */
    public function setTotalListeningTime($total_listening_time)
    {
        if (is_null($total_listening_time)) {
            throw new \InvalidArgumentException('non-nullable total_listening_time cannot be null');
        }
        $this->container['total_listening_time'] = $total_listening_time;

        return $this;
    }

    /**
     * Gets total_new_artists_discovered
     *
     * @return int
     */
    public function getTotalNewArtistsDiscovered()
    {
        return $this->container['total_new_artists_discovered'];
    }

    /**
     * Sets total_new_artists_discovered
     *
     * @param int $total_new_artists_discovered total_new_artists_discovered
     *
     * @return self
     */
    public function setTotalNewArtistsDiscovered($total_new_artists_discovered)
    {
        if (is_null($total_new_artists_discovered)) {
            throw new \InvalidArgumentException('non-nullable total_new_artists_discovered cannot be null');
        }
        $this->container['total_new_artists_discovered'] = $total_new_artists_discovered;

        return $this;
    }

    /**
     * Gets total_recordings_count
     *
     * @return int
     */
    public function getTotalRecordingsCount()
    {
        return $this->container['total_recordings_count'];
    }

    /**
     * Sets total_recordings_count
     *
     * @param int $total_recordings_count total_recordings_count
     *
     * @return self
     */
    public function setTotalRecordingsCount($total_recordings_count)
    {
        if (is_null($total_recordings_count)) {
            throw new \InvalidArgumentException('non-nullable total_recordings_count cannot be null');
        }
        $this->container['total_recordings_count'] = $total_recordings_count;

        return $this;
    }

    /**
     * Gets total_release_groups_count
     *
     * @return int
     */
    public function getTotalReleaseGroupsCount()
    {
        return $this->container['total_release_groups_count'];
    }

    /**
     * Sets total_release_groups_count
     *
     * @param int $total_release_groups_count total_release_groups_count
     *
     * @return self
     */
    public function setTotalReleaseGroupsCount($total_release_groups_count)
    {
        if (is_null($total_release_groups_count)) {
            throw new \InvalidArgumentException('non-nullable total_release_groups_count cannot be null');
        }
        $this->container['total_release_groups_count'] = $total_release_groups_count;

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


