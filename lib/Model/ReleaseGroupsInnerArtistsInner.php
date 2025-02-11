<?php
/**
 * ReleaseGroupsInnerArtistsInner
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
 * ReleaseGroupsInnerArtistsInner Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReleaseGroupsInnerArtistsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'releaseGroups_inner_artists_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artist_mbid' => 'string',
        'artist_name' => 'string',
        'artist_credit_name' => 'string',
        'listen_count' => 'int',
        'join_phrase' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'artist_mbid' => 'uuid',
        'artist_name' => null,
        'artist_credit_name' => null,
        'listen_count' => null,
        'join_phrase' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artist_mbid' => false,
        'artist_name' => false,
        'artist_credit_name' => false,
        'listen_count' => false,
        'join_phrase' => false
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
        'artist_mbid' => 'artist_mbid',
        'artist_name' => 'artist_name',
        'artist_credit_name' => 'artist_credit_name',
        'listen_count' => 'listen_count',
        'join_phrase' => 'join_phrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist_mbid' => 'setArtistMbid',
        'artist_name' => 'setArtistName',
        'artist_credit_name' => 'setArtistCreditName',
        'listen_count' => 'setListenCount',
        'join_phrase' => 'setJoinPhrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist_mbid' => 'getArtistMbid',
        'artist_name' => 'getArtistName',
        'artist_credit_name' => 'getArtistCreditName',
        'listen_count' => 'getListenCount',
        'join_phrase' => 'getJoinPhrase'
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
        $this->setIfExists('artist_mbid', $data ?? [], null);
        $this->setIfExists('artist_name', $data ?? [], null);
        $this->setIfExists('artist_credit_name', $data ?? [], null);
        $this->setIfExists('listen_count', $data ?? [], null);
        $this->setIfExists('join_phrase', $data ?? [], null);
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
     * Gets artist_mbid
     *
     * @return string|null
     */
    public function getArtistMbid()
    {
        return $this->container['artist_mbid'];
    }

    /**
     * Sets artist_mbid
     *
     * @param string|null $artist_mbid artist_mbid
     *
     * @return self
     */
    public function setArtistMbid($artist_mbid)
    {
        if (is_null($artist_mbid)) {
            throw new \InvalidArgumentException('non-nullable artist_mbid cannot be null');
        }
        $this->container['artist_mbid'] = $artist_mbid;

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
     * Gets artist_credit_name
     *
     * @return string|null
     */
    public function getArtistCreditName()
    {
        return $this->container['artist_credit_name'];
    }

    /**
     * Sets artist_credit_name
     *
     * @param string|null $artist_credit_name artist_credit_name
     *
     * @return self
     */
    public function setArtistCreditName($artist_credit_name)
    {
        if (is_null($artist_credit_name)) {
            throw new \InvalidArgumentException('non-nullable artist_credit_name cannot be null');
        }
        $this->container['artist_credit_name'] = $artist_credit_name;

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
     * Gets join_phrase
     *
     * @return string|null
     */
    public function getJoinPhrase()
    {
        return $this->container['join_phrase'];
    }

    /**
     * Sets join_phrase
     *
     * @param string|null $join_phrase join_phrase
     *
     * @return self
     */
    public function setJoinPhrase($join_phrase)
    {
        if (is_null($join_phrase)) {
            throw new \InvalidArgumentException('non-nullable join_phrase cannot be null');
        }
        $this->container['join_phrase'] = $join_phrase;

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
