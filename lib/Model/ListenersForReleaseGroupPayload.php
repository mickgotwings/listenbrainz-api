<?php
/**
 * ListenersForReleaseGroupPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Listenbrainz
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
use \Listenbrainz\ObjectSerializer;

/**
 * ListenersForReleaseGroupPayload Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListenersForReleaseGroupPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'listenersForReleaseGroup_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artist_mbids' => 'string[]',
        'artist_name' => 'string',
        'caa_id' => 'int',
        'caa_release_mbid' => 'string',
        'from_ts' => 'int',
        'last_updated' => 'int',
        'listeners' => '\Listenbrainz\Model\ListenersForArtistPayloadListenersInner[]',
        'release_group_mbid' => 'string',
        'release_group_name' => 'string',
        'stats_range' => 'string',
        'to_ts' => 'int',
        'total_listen_count' => 'int',
        'total_user_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'artist_mbids' => 'uuid',
        'artist_name' => null,
        'caa_id' => null,
        'caa_release_mbid' => 'uuid',
        'from_ts' => null,
        'last_updated' => null,
        'listeners' => null,
        'release_group_mbid' => 'uuid',
        'release_group_name' => null,
        'stats_range' => null,
        'to_ts' => null,
        'total_listen_count' => null,
        'total_user_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artist_mbids' => false,
        'artist_name' => false,
        'caa_id' => false,
        'caa_release_mbid' => false,
        'from_ts' => false,
        'last_updated' => false,
        'listeners' => false,
        'release_group_mbid' => false,
        'release_group_name' => false,
        'stats_range' => false,
        'to_ts' => false,
        'total_listen_count' => false,
        'total_user_count' => false
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
        'artist_mbids' => 'artist_mbids',
        'artist_name' => 'artist_name',
        'caa_id' => 'caa_id',
        'caa_release_mbid' => 'caa_release_mbid',
        'from_ts' => 'from_ts',
        'last_updated' => 'last_updated',
        'listeners' => 'listeners',
        'release_group_mbid' => 'release_group_mbid',
        'release_group_name' => 'release_group_name',
        'stats_range' => 'stats_range',
        'to_ts' => 'to_ts',
        'total_listen_count' => 'total_listen_count',
        'total_user_count' => 'total_user_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist_mbids' => 'setArtistMbids',
        'artist_name' => 'setArtistName',
        'caa_id' => 'setCaaId',
        'caa_release_mbid' => 'setCaaReleaseMbid',
        'from_ts' => 'setFromTs',
        'last_updated' => 'setLastUpdated',
        'listeners' => 'setListeners',
        'release_group_mbid' => 'setReleaseGroupMbid',
        'release_group_name' => 'setReleaseGroupName',
        'stats_range' => 'setStatsRange',
        'to_ts' => 'setToTs',
        'total_listen_count' => 'setTotalListenCount',
        'total_user_count' => 'setTotalUserCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist_mbids' => 'getArtistMbids',
        'artist_name' => 'getArtistName',
        'caa_id' => 'getCaaId',
        'caa_release_mbid' => 'getCaaReleaseMbid',
        'from_ts' => 'getFromTs',
        'last_updated' => 'getLastUpdated',
        'listeners' => 'getListeners',
        'release_group_mbid' => 'getReleaseGroupMbid',
        'release_group_name' => 'getReleaseGroupName',
        'stats_range' => 'getStatsRange',
        'to_ts' => 'getToTs',
        'total_listen_count' => 'getTotalListenCount',
        'total_user_count' => 'getTotalUserCount'
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
        $this->setIfExists('artist_mbids', $data ?? [], null);
        $this->setIfExists('artist_name', $data ?? [], null);
        $this->setIfExists('caa_id', $data ?? [], null);
        $this->setIfExists('caa_release_mbid', $data ?? [], null);
        $this->setIfExists('from_ts', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('listeners', $data ?? [], null);
        $this->setIfExists('release_group_mbid', $data ?? [], null);
        $this->setIfExists('release_group_name', $data ?? [], null);
        $this->setIfExists('stats_range', $data ?? [], null);
        $this->setIfExists('to_ts', $data ?? [], null);
        $this->setIfExists('total_listen_count', $data ?? [], null);
        $this->setIfExists('total_user_count', $data ?? [], null);
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

        if ($this->container['artist_mbids'] === null) {
            $invalidProperties[] = "'artist_mbids' can't be null";
        }
        if ($this->container['artist_name'] === null) {
            $invalidProperties[] = "'artist_name' can't be null";
        }
        if ($this->container['caa_id'] === null) {
            $invalidProperties[] = "'caa_id' can't be null";
        }
        if ($this->container['caa_release_mbid'] === null) {
            $invalidProperties[] = "'caa_release_mbid' can't be null";
        }
        if ($this->container['from_ts'] === null) {
            $invalidProperties[] = "'from_ts' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['release_group_mbid'] === null) {
            $invalidProperties[] = "'release_group_mbid' can't be null";
        }
        if ($this->container['release_group_name'] === null) {
            $invalidProperties[] = "'release_group_name' can't be null";
        }
        if ($this->container['stats_range'] === null) {
            $invalidProperties[] = "'stats_range' can't be null";
        }
        if ($this->container['to_ts'] === null) {
            $invalidProperties[] = "'to_ts' can't be null";
        }
        if ($this->container['total_listen_count'] === null) {
            $invalidProperties[] = "'total_listen_count' can't be null";
        }
        if ($this->container['total_user_count'] === null) {
            $invalidProperties[] = "'total_user_count' can't be null";
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
     * Gets artist_mbids
     *
     * @return string[]
     */
    public function getArtistMbids()
    {
        return $this->container['artist_mbids'];
    }

    /**
     * Sets artist_mbids
     *
     * @param string[] $artist_mbids artist_mbids
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
     * Gets artist_name
     *
     * @return string
     */
    public function getArtistName()
    {
        return $this->container['artist_name'];
    }

    /**
     * Sets artist_name
     *
     * @param string $artist_name artist_name
     *
     * @return self
     */
    public function setArtistName($artist_name)
    {
        if (is_null($artist_name)) {
            throw new \InvalidArgumentException('non-nullable artist_name cannot be null');
        }
        $this->container['artist_name'] = $artist_name;

        return $this;
    }

    /**
     * Gets caa_id
     *
     * @return int
     */
    public function getCaaId()
    {
        return $this->container['caa_id'];
    }

    /**
     * Sets caa_id
     *
     * @param int $caa_id caa_id
     *
     * @return self
     */
    public function setCaaId($caa_id)
    {
        if (is_null($caa_id)) {
            throw new \InvalidArgumentException('non-nullable caa_id cannot be null');
        }
        $this->container['caa_id'] = $caa_id;

        return $this;
    }

    /**
     * Gets caa_release_mbid
     *
     * @return string
     */
    public function getCaaReleaseMbid()
    {
        return $this->container['caa_release_mbid'];
    }

    /**
     * Sets caa_release_mbid
     *
     * @param string $caa_release_mbid caa_release_mbid
     *
     * @return self
     */
    public function setCaaReleaseMbid($caa_release_mbid)
    {
        if (is_null($caa_release_mbid)) {
            throw new \InvalidArgumentException('non-nullable caa_release_mbid cannot be null');
        }
        $this->container['caa_release_mbid'] = $caa_release_mbid;

        return $this;
    }

    /**
     * Gets from_ts
     *
     * @return int
     */
    public function getFromTs()
    {
        return $this->container['from_ts'];
    }

    /**
     * Sets from_ts
     *
     * @param int $from_ts from_ts
     *
     * @return self
     */
    public function setFromTs($from_ts)
    {
        if (is_null($from_ts)) {
            throw new \InvalidArgumentException('non-nullable from_ts cannot be null');
        }
        $this->container['from_ts'] = $from_ts;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return int
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param int $last_updated last_updated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            throw new \InvalidArgumentException('non-nullable last_updated cannot be null');
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets listeners
     *
     * @return \Listenbrainz\Model\ListenersForArtistPayloadListenersInner[]
     */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
     * Sets listeners
     *
     * @param \Listenbrainz\Model\ListenersForArtistPayloadListenersInner[] $listeners listeners
     *
     * @return self
     */
    public function setListeners($listeners)
    {
        if (is_null($listeners)) {
            throw new \InvalidArgumentException('non-nullable listeners cannot be null');
        }
        $this->container['listeners'] = $listeners;

        return $this;
    }

    /**
     * Gets release_group_mbid
     *
     * @return string
     */
    public function getReleaseGroupMbid()
    {
        return $this->container['release_group_mbid'];
    }

    /**
     * Sets release_group_mbid
     *
     * @param string $release_group_mbid release_group_mbid
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
     * Gets release_group_name
     *
     * @return string
     */
    public function getReleaseGroupName()
    {
        return $this->container['release_group_name'];
    }

    /**
     * Sets release_group_name
     *
     * @param string $release_group_name release_group_name
     *
     * @return self
     */
    public function setReleaseGroupName($release_group_name)
    {
        if (is_null($release_group_name)) {
            throw new \InvalidArgumentException('non-nullable release_group_name cannot be null');
        }
        $this->container['release_group_name'] = $release_group_name;

        return $this;
    }

    /**
     * Gets stats_range
     *
     * @return string
     */
    public function getStatsRange()
    {
        return $this->container['stats_range'];
    }

    /**
     * Sets stats_range
     *
     * @param string $stats_range stats_range
     *
     * @return self
     */
    public function setStatsRange($stats_range)
    {
        if (is_null($stats_range)) {
            throw new \InvalidArgumentException('non-nullable stats_range cannot be null');
        }
        $this->container['stats_range'] = $stats_range;

        return $this;
    }

    /**
     * Gets to_ts
     *
     * @return int
     */
    public function getToTs()
    {
        return $this->container['to_ts'];
    }

    /**
     * Sets to_ts
     *
     * @param int $to_ts to_ts
     *
     * @return self
     */
    public function setToTs($to_ts)
    {
        if (is_null($to_ts)) {
            throw new \InvalidArgumentException('non-nullable to_ts cannot be null');
        }
        $this->container['to_ts'] = $to_ts;

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
     * Gets total_user_count
     *
     * @return int
     */
    public function getTotalUserCount()
    {
        return $this->container['total_user_count'];
    }

    /**
     * Sets total_user_count
     *
     * @param int $total_user_count total_user_count
     *
     * @return self
     */
    public function setTotalUserCount($total_user_count)
    {
        if (is_null($total_user_count)) {
            throw new \InvalidArgumentException('non-nullable total_user_count cannot be null');
        }
        $this->container['total_user_count'] = $total_user_count;

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
