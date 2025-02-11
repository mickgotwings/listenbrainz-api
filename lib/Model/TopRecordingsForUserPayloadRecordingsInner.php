<?php
/**
 * TopRecordingsForUserPayloadRecordingsInner
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
 * TopRecordingsForUserPayloadRecordingsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TopRecordingsForUserPayloadRecordingsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'topRecordingsForUser_payload_recordings_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artist_mbids' => 'string[]',
        'artist_name' => 'string',
        'artists' => '\OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInnerArtistsInner[]',
        'caa_id' => 'int',
        'caa_release_mbid' => 'string',
        'listen_count' => 'int',
        'recording_mbid' => 'string',
        'release_mbid' => 'string',
        'release_name' => 'string',
        'track_name' => 'string'
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
        'artists' => null,
        'caa_id' => null,
        'caa_release_mbid' => 'uuid',
        'listen_count' => null,
        'recording_mbid' => 'uuid',
        'release_mbid' => 'uuid',
        'release_name' => null,
        'track_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artist_mbids' => false,
        'artist_name' => false,
        'artists' => false,
        'caa_id' => false,
        'caa_release_mbid' => false,
        'listen_count' => false,
        'recording_mbid' => false,
        'release_mbid' => false,
        'release_name' => false,
        'track_name' => false
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
        'artists' => 'artists',
        'caa_id' => 'caa_id',
        'caa_release_mbid' => 'caa_release_mbid',
        'listen_count' => 'listen_count',
        'recording_mbid' => 'recording_mbid',
        'release_mbid' => 'release_mbid',
        'release_name' => 'release_name',
        'track_name' => 'track_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist_mbids' => 'setArtistMbids',
        'artist_name' => 'setArtistName',
        'artists' => 'setArtists',
        'caa_id' => 'setCaaId',
        'caa_release_mbid' => 'setCaaReleaseMbid',
        'listen_count' => 'setListenCount',
        'recording_mbid' => 'setRecordingMbid',
        'release_mbid' => 'setReleaseMbid',
        'release_name' => 'setReleaseName',
        'track_name' => 'setTrackName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist_mbids' => 'getArtistMbids',
        'artist_name' => 'getArtistName',
        'artists' => 'getArtists',
        'caa_id' => 'getCaaId',
        'caa_release_mbid' => 'getCaaReleaseMbid',
        'listen_count' => 'getListenCount',
        'recording_mbid' => 'getRecordingMbid',
        'release_mbid' => 'getReleaseMbid',
        'release_name' => 'getReleaseName',
        'track_name' => 'getTrackName'
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
        $this->setIfExists('artists', $data ?? [], null);
        $this->setIfExists('caa_id', $data ?? [], null);
        $this->setIfExists('caa_release_mbid', $data ?? [], null);
        $this->setIfExists('listen_count', $data ?? [], null);
        $this->setIfExists('recording_mbid', $data ?? [], null);
        $this->setIfExists('release_mbid', $data ?? [], null);
        $this->setIfExists('release_name', $data ?? [], null);
        $this->setIfExists('track_name', $data ?? [], null);
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
     * Gets artist_name
     *
     * @return string|null
     */
    public function getArtistName()
    {
        return $this->container['artist_name'];
    }

    /**
     * Sets artist_name
     *
     * @param string|null $artist_name artist_name
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
     * Gets artists
     *
     * @return \OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInnerArtistsInner[]|null
     */
    public function getArtists()
    {
        return $this->container['artists'];
    }

    /**
     * Sets artists
     *
     * @param \OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInnerArtistsInner[]|null $artists artists
     *
     * @return self
     */
    public function setArtists($artists)
    {
        if (is_null($artists)) {
            throw new \InvalidArgumentException('non-nullable artists cannot be null');
        }
        $this->container['artists'] = $artists;

        return $this;
    }

    /**
     * Gets caa_id
     *
     * @return int|null
     */
    public function getCaaId()
    {
        return $this->container['caa_id'];
    }

    /**
     * Sets caa_id
     *
     * @param int|null $caa_id caa_id
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
     * @return string|null
     */
    public function getCaaReleaseMbid()
    {
        return $this->container['caa_release_mbid'];
    }

    /**
     * Sets caa_release_mbid
     *
     * @param string|null $caa_release_mbid caa_release_mbid
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
     * Gets listen_count
     *
     * @return int|null
     */
    public function getListenCount()
    {
        return $this->container['listen_count'];
    }

    /**
     * Sets listen_count
     *
     * @param int|null $listen_count listen_count
     *
     * @return self
     */
    public function setListenCount($listen_count)
    {
        if (is_null($listen_count)) {
            throw new \InvalidArgumentException('non-nullable listen_count cannot be null');
        }
        $this->container['listen_count'] = $listen_count;

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
     * Gets release_name
     *
     * @return string|null
     */
    public function getReleaseName()
    {
        return $this->container['release_name'];
    }

    /**
     * Sets release_name
     *
     * @param string|null $release_name release_name
     *
     * @return self
     */
    public function setReleaseName($release_name)
    {
        if (is_null($release_name)) {
            throw new \InvalidArgumentException('non-nullable release_name cannot be null');
        }
        $this->container['release_name'] = $release_name;

        return $this;
    }

    /**
     * Gets track_name
     *
     * @return string|null
     */
    public function getTrackName()
    {
        return $this->container['track_name'];
    }

    /**
     * Sets track_name
     *
     * @param string|null $track_name track_name
     *
     * @return self
     */
    public function setTrackName($track_name)
    {
        if (is_null($track_name)) {
            throw new \InvalidArgumentException('non-nullable track_name cannot be null');
        }
        $this->container['track_name'] = $track_name;

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


