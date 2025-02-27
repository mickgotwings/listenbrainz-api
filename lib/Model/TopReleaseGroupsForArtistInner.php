<?php
/**
 * TopReleaseGroupsForArtistInner
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
 * TopReleaseGroupsForArtistInner Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TopReleaseGroupsForArtistInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'topReleaseGroupsForArtist_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artist' => '\Listenbrainz\Model\TopReleaseGroupsForArtistInnerArtist',
        'release' => '\Listenbrainz\Model\TopReleaseGroupsForArtistInnerRelease',
        'release_color' => '\Listenbrainz\Model\TopRecordingsForArtistInnerReleaseColor',
        'release_group' => '\Listenbrainz\Model\TopReleaseGroupsForArtistInnerReleaseGroup',
        'release_group_mbid' => 'string',
        'tag' => '\Listenbrainz\Model\TopReleaseGroupsForArtistInnerTag',
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
        'artist' => null,
        'release' => null,
        'release_color' => null,
        'release_group' => null,
        'release_group_mbid' => 'uuid',
        'tag' => null,
        'total_listen_count' => null,
        'total_user_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artist' => false,
        'release' => false,
        'release_color' => false,
        'release_group' => false,
        'release_group_mbid' => false,
        'tag' => false,
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
        'artist' => 'artist',
        'release' => 'release',
        'release_color' => 'release_color',
        'release_group' => 'release_group',
        'release_group_mbid' => 'release_group_mbid',
        'tag' => 'tag',
        'total_listen_count' => 'total_listen_count',
        'total_user_count' => 'total_user_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist' => 'setArtist',
        'release' => 'setRelease',
        'release_color' => 'setReleaseColor',
        'release_group' => 'setReleaseGroup',
        'release_group_mbid' => 'setReleaseGroupMbid',
        'tag' => 'setTag',
        'total_listen_count' => 'setTotalListenCount',
        'total_user_count' => 'setTotalUserCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist' => 'getArtist',
        'release' => 'getRelease',
        'release_color' => 'getReleaseColor',
        'release_group' => 'getReleaseGroup',
        'release_group_mbid' => 'getReleaseGroupMbid',
        'tag' => 'getTag',
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
        $this->setIfExists('artist', $data ?? [], null);
        $this->setIfExists('release', $data ?? [], null);
        $this->setIfExists('release_color', $data ?? [], null);
        $this->setIfExists('release_group', $data ?? [], null);
        $this->setIfExists('release_group_mbid', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
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
     * Gets artist
     *
     * @return \Listenbrainz\Model\TopReleaseGroupsForArtistInnerArtist|null
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /**
     * Sets artist
     *
     * @param \Listenbrainz\Model\TopReleaseGroupsForArtistInnerArtist|null $artist artist
     *
     * @return self
     */
    public function setArtist($artist)
    {
        if (is_null($artist)) {
            throw new \InvalidArgumentException('non-nullable artist cannot be null');
        }
        $this->container['artist'] = $artist;

        return $this;
    }

    /**
     * Gets release
     *
     * @return \Listenbrainz\Model\TopReleaseGroupsForArtistInnerRelease|null
     */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
     * Sets release
     *
     * @param \Listenbrainz\Model\TopReleaseGroupsForArtistInnerRelease|null $release release
     *
     * @return self
     */
    public function setRelease($release)
    {
        if (is_null($release)) {
            throw new \InvalidArgumentException('non-nullable release cannot be null');
        }
        $this->container['release'] = $release;

        return $this;
    }

    /**
     * Gets release_color
     *
     * @return \Listenbrainz\Model\TopRecordingsForArtistInnerReleaseColor|null
     */
    public function getReleaseColor()
    {
        return $this->container['release_color'];
    }

    /**
     * Sets release_color
     *
     * @param \Listenbrainz\Model\TopRecordingsForArtistInnerReleaseColor|null $release_color release_color
     *
     * @return self
     */
    public function setReleaseColor($release_color)
    {
        if (is_null($release_color)) {
            throw new \InvalidArgumentException('non-nullable release_color cannot be null');
        }
        $this->container['release_color'] = $release_color;

        return $this;
    }

    /**
     * Gets release_group
     *
     * @return \Listenbrainz\Model\TopReleaseGroupsForArtistInnerReleaseGroup|null
     */
    public function getReleaseGroup()
    {
        return $this->container['release_group'];
    }

    /**
     * Sets release_group
     *
     * @param \Listenbrainz\Model\TopReleaseGroupsForArtistInnerReleaseGroup|null $release_group release_group
     *
     * @return self
     */
    public function setReleaseGroup($release_group)
    {
        if (is_null($release_group)) {
            throw new \InvalidArgumentException('non-nullable release_group cannot be null');
        }
        $this->container['release_group'] = $release_group;

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
     * Gets tag
     *
     * @return \Listenbrainz\Model\TopReleaseGroupsForArtistInnerTag|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \Listenbrainz\Model\TopReleaseGroupsForArtistInnerTag|null $tag tag
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (is_null($tag)) {
            throw new \InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets total_listen_count
     *
     * @return int|null
     */
    public function getTotalListenCount()
    {
        return $this->container['total_listen_count'];
    }

    /**
     * Sets total_listen_count
     *
     * @param int|null $total_listen_count total_listen_count
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
     * @return int|null
     */
    public function getTotalUserCount()
    {
        return $this->container['total_user_count'];
    }

    /**
     * Sets total_user_count
     *
     * @param int|null $total_user_count total_user_count
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
