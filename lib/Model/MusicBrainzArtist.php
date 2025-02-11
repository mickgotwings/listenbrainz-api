<?php
/**
 * MusicBrainzArtist
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
 * MusicBrainzArtist Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MusicBrainzArtist implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'musicBrainzArtist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area' => 'string',
        'artist_mbid' => 'string',
        'begin_year' => 'int',
        'end_year' => 'int',
        'gender' => 'string',
        'join_phrase' => 'string',
        'name' => 'string',
        'rels' => '\Listenbrainz\Model\Rels1',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'area' => null,
        'artist_mbid' => 'uuid',
        'begin_year' => null,
        'end_year' => null,
        'gender' => null,
        'join_phrase' => null,
        'name' => null,
        'rels' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
        'artist_mbid' => false,
        'begin_year' => false,
        'end_year' => false,
        'gender' => false,
        'join_phrase' => false,
        'name' => false,
        'rels' => false,
        'type' => false
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
        'area' => 'area',
        'artist_mbid' => 'artist_mbid',
        'begin_year' => 'begin_year',
        'end_year' => 'end_year',
        'gender' => 'gender',
        'join_phrase' => 'join_phrase',
        'name' => 'name',
        'rels' => 'rels',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'artist_mbid' => 'setArtistMbid',
        'begin_year' => 'setBeginYear',
        'end_year' => 'setEndYear',
        'gender' => 'setGender',
        'join_phrase' => 'setJoinPhrase',
        'name' => 'setName',
        'rels' => 'setRels',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'artist_mbid' => 'getArtistMbid',
        'begin_year' => 'getBeginYear',
        'end_year' => 'getEndYear',
        'gender' => 'getGender',
        'join_phrase' => 'getJoinPhrase',
        'name' => 'getName',
        'rels' => 'getRels',
        'type' => 'getType'
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
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('artist_mbid', $data ?? [], null);
        $this->setIfExists('begin_year', $data ?? [], null);
        $this->setIfExists('end_year', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('join_phrase', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('rels', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
     * Gets area
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string|null $area area
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        $this->container['area'] = $area;

        return $this;
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
     * Gets begin_year
     *
     * @return int|null
     */
    public function getBeginYear()
    {
        return $this->container['begin_year'];
    }

    /**
     * Sets begin_year
     *
     * @param int|null $begin_year begin_year
     *
     * @return self
     */
    public function setBeginYear($begin_year)
    {
        if (is_null($begin_year)) {
            throw new \InvalidArgumentException('non-nullable begin_year cannot be null');
        }
        $this->container['begin_year'] = $begin_year;

        return $this;
    }

    /**
     * Gets end_year
     *
     * @return int|null
     */
    public function getEndYear()
    {
        return $this->container['end_year'];
    }

    /**
     * Sets end_year
     *
     * @param int|null $end_year end_year
     *
     * @return self
     */
    public function setEndYear($end_year)
    {
        if (is_null($end_year)) {
            throw new \InvalidArgumentException('non-nullable end_year cannot be null');
        }
        $this->container['end_year'] = $end_year;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rels
     *
     * @return \Listenbrainz\Model\Rels1|null
     */
    public function getRels()
    {
        return $this->container['rels'];
    }

    /**
     * Sets rels
     *
     * @param \Listenbrainz\Model\Rels1|null $rels rels
     *
     * @return self
     */
    public function setRels($rels)
    {
        if (is_null($rels)) {
            throw new \InvalidArgumentException('non-nullable rels cannot be null');
        }
        $this->container['rels'] = $rels;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
