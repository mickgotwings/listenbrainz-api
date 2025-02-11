<?php
/**
 * SitewideTopArtistsPayload
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
 * SitewideTopArtistsPayload Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SitewideTopArtistsPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sitewideTopArtists_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'artists' => '\OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[]',
        'count' => 'int',
        'from_ts' => 'int',
        'last_updated' => 'int',
        'offset' => 'int',
        'range' => 'string',
        'to_ts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'artists' => null,
        'count' => null,
        'from_ts' => null,
        'last_updated' => null,
        'offset' => null,
        'range' => null,
        'to_ts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'artists' => false,
        'count' => false,
        'from_ts' => false,
        'last_updated' => false,
        'offset' => false,
        'range' => false,
        'to_ts' => false
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
        'artists' => 'artists',
        'count' => 'count',
        'from_ts' => 'from_ts',
        'last_updated' => 'last_updated',
        'offset' => 'offset',
        'range' => 'range',
        'to_ts' => 'to_ts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artists' => 'setArtists',
        'count' => 'setCount',
        'from_ts' => 'setFromTs',
        'last_updated' => 'setLastUpdated',
        'offset' => 'setOffset',
        'range' => 'setRange',
        'to_ts' => 'setToTs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artists' => 'getArtists',
        'count' => 'getCount',
        'from_ts' => 'getFromTs',
        'last_updated' => 'getLastUpdated',
        'offset' => 'getOffset',
        'range' => 'getRange',
        'to_ts' => 'getToTs'
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
        $this->setIfExists('artists', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('from_ts', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('range', $data ?? [], null);
        $this->setIfExists('to_ts', $data ?? [], null);
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

        if ($this->container['artists'] === null) {
            $invalidProperties[] = "'artists' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['from_ts'] === null) {
            $invalidProperties[] = "'from_ts' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        if ($this->container['to_ts'] === null) {
            $invalidProperties[] = "'to_ts' can't be null";
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
     * Gets artists
     *
     * @return \OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[]
     */
    public function getArtists()
    {
        return $this->container['artists'];
    }

    /**
     * Sets artists
     *
     * @param \OpenAPI\Client\Model\TopArtistsForUserPayloadArtistsInner[] $artists artists
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

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
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param string $range range
     *
     * @return self
     */
    public function setRange($range)
    {
        if (is_null($range)) {
            throw new \InvalidArgumentException('non-nullable range cannot be null');
        }
        $this->container['range'] = $range;

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


