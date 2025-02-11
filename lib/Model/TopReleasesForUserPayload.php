<?php
/**
 * TopReleasesForUserPayload
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
 * TopReleasesForUserPayload Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TopReleasesForUserPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'topReleasesForUser_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'int',
        'from_ts' => 'int',
        'last_updated' => 'int',
        'offset' => 'int',
        'range' => 'string',
        'releases' => '\OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInner[]',
        'to_ts' => 'int',
        'total_release_count' => 'int',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => null,
        'from_ts' => null,
        'last_updated' => null,
        'offset' => null,
        'range' => null,
        'releases' => null,
        'to_ts' => null,
        'total_release_count' => null,
        'user_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => false,
        'from_ts' => false,
        'last_updated' => false,
        'offset' => false,
        'range' => false,
        'releases' => false,
        'to_ts' => false,
        'total_release_count' => false,
        'user_id' => false
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
        'count' => 'count',
        'from_ts' => 'from_ts',
        'last_updated' => 'last_updated',
        'offset' => 'offset',
        'range' => 'range',
        'releases' => 'releases',
        'to_ts' => 'to_ts',
        'total_release_count' => 'total_release_count',
        'user_id' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'from_ts' => 'setFromTs',
        'last_updated' => 'setLastUpdated',
        'offset' => 'setOffset',
        'range' => 'setRange',
        'releases' => 'setReleases',
        'to_ts' => 'setToTs',
        'total_release_count' => 'setTotalReleaseCount',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'from_ts' => 'getFromTs',
        'last_updated' => 'getLastUpdated',
        'offset' => 'getOffset',
        'range' => 'getRange',
        'releases' => 'getReleases',
        'to_ts' => 'getToTs',
        'total_release_count' => 'getTotalReleaseCount',
        'user_id' => 'getUserId'
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
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('from_ts', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('range', $data ?? [], null);
        $this->setIfExists('releases', $data ?? [], null);
        $this->setIfExists('to_ts', $data ?? [], null);
        $this->setIfExists('total_release_count', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
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
        if ($this->container['releases'] === null) {
            $invalidProperties[] = "'releases' can't be null";
        }
        if ($this->container['to_ts'] === null) {
            $invalidProperties[] = "'to_ts' can't be null";
        }
        if ($this->container['total_release_count'] === null) {
            $invalidProperties[] = "'total_release_count' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * Gets releases
     *
     * @return \OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInner[]
     */
    public function getReleases()
    {
        return $this->container['releases'];
    }

    /**
     * Sets releases
     *
     * @param \OpenAPI\Client\Model\TopReleasesForUserPayloadReleasesInner[] $releases releases
     *
     * @return self
     */
    public function setReleases($releases)
    {
        if (is_null($releases)) {
            throw new \InvalidArgumentException('non-nullable releases cannot be null');
        }
        $this->container['releases'] = $releases;

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
     * Gets total_release_count
     *
     * @return int
     */
    public function getTotalReleaseCount()
    {
        return $this->container['total_release_count'];
    }

    /**
     * Sets total_release_count
     *
     * @param int $total_release_count total_release_count
     *
     * @return self
     */
    public function setTotalReleaseCount($total_release_count)
    {
        if (is_null($total_release_count)) {
            throw new \InvalidArgumentException('non-nullable total_release_count cannot be null');
        }
        $this->container['total_release_count'] = $total_release_count;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

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


