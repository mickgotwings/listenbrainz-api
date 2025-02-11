<?php
/**
 * PinRequest
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
 * PinRequest Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PinRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pin_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recording_msid' => 'string',
        'recording_mbid' => 'string',
        'blurb_content' => 'string',
        'pinned_until' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recording_msid' => 'uuid',
        'recording_mbid' => 'uuid',
        'blurb_content' => null,
        'pinned_until' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'recording_msid' => false,
        'recording_mbid' => false,
        'blurb_content' => false,
        'pinned_until' => false
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
        'recording_msid' => 'recording_msid',
        'recording_mbid' => 'recording_mbid',
        'blurb_content' => 'blurb_content',
        'pinned_until' => 'pinned_until'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recording_msid' => 'setRecordingMsid',
        'recording_mbid' => 'setRecordingMbid',
        'blurb_content' => 'setBlurbContent',
        'pinned_until' => 'setPinnedUntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recording_msid' => 'getRecordingMsid',
        'recording_mbid' => 'getRecordingMbid',
        'blurb_content' => 'getBlurbContent',
        'pinned_until' => 'getPinnedUntil'
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
        $this->setIfExists('recording_msid', $data ?? [], null);
        $this->setIfExists('recording_mbid', $data ?? [], null);
        $this->setIfExists('blurb_content', $data ?? [], null);
        $this->setIfExists('pinned_until', $data ?? [], null);
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
     * Gets blurb_content
     *
     * @return string|null
     */
    public function getBlurbContent()
    {
        return $this->container['blurb_content'];
    }

    /**
     * Sets blurb_content
     *
     * @param string|null $blurb_content blurb_content
     *
     * @return self
     */
    public function setBlurbContent($blurb_content)
    {
        if (is_null($blurb_content)) {
            throw new \InvalidArgumentException('non-nullable blurb_content cannot be null');
        }
        $this->container['blurb_content'] = $blurb_content;

        return $this;
    }

    /**
     * Gets pinned_until
     *
     * @return int|null
     */
    public function getPinnedUntil()
    {
        return $this->container['pinned_until'];
    }

    /**
     * Sets pinned_until
     *
     * @param int|null $pinned_until pinned_until
     *
     * @return self
     */
    public function setPinnedUntil($pinned_until)
    {
        if (is_null($pinned_until)) {
            throw new \InvalidArgumentException('non-nullable pinned_until cannot be null');
        }
        $this->container['pinned_until'] = $pinned_until;

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
