<?php
/**
 * GetPinsCurrent200ResponsePinnedRecording
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
 * GetPinsCurrent200ResponsePinnedRecording Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPinsCurrent200ResponsePinnedRecording implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPinsCurrent_200_response_pinned_recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blurb_content' => 'string',
        'created' => 'int',
        'pinned_until' => 'int',
        'recording_mbid' => 'string',
        'recording_msid' => 'string',
        'row_id' => 'int',
        'track_metadata' => '\OpenAPI\Client\Model\TrackMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'blurb_content' => null,
        'created' => null,
        'pinned_until' => null,
        'recording_mbid' => 'uuid',
        'recording_msid' => 'uuid',
        'row_id' => null,
        'track_metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'blurb_content' => false,
        'created' => false,
        'pinned_until' => false,
        'recording_mbid' => false,
        'recording_msid' => false,
        'row_id' => false,
        'track_metadata' => false
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
        'blurb_content' => 'blurb_content',
        'created' => 'created',
        'pinned_until' => 'pinned_until',
        'recording_mbid' => 'recording_mbid',
        'recording_msid' => 'recording_msid',
        'row_id' => 'row_id',
        'track_metadata' => 'track_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blurb_content' => 'setBlurbContent',
        'created' => 'setCreated',
        'pinned_until' => 'setPinnedUntil',
        'recording_mbid' => 'setRecordingMbid',
        'recording_msid' => 'setRecordingMsid',
        'row_id' => 'setRowId',
        'track_metadata' => 'setTrackMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blurb_content' => 'getBlurbContent',
        'created' => 'getCreated',
        'pinned_until' => 'getPinnedUntil',
        'recording_mbid' => 'getRecordingMbid',
        'recording_msid' => 'getRecordingMsid',
        'row_id' => 'getRowId',
        'track_metadata' => 'getTrackMetadata'
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
        $this->setIfExists('blurb_content', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('pinned_until', $data ?? [], null);
        $this->setIfExists('recording_mbid', $data ?? [], null);
        $this->setIfExists('recording_msid', $data ?? [], null);
        $this->setIfExists('row_id', $data ?? [], null);
        $this->setIfExists('track_metadata', $data ?? [], null);
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
     * Gets created
     *
     * @return int|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

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
     * Gets row_id
     *
     * @return int|null
     */
    public function getRowId()
    {
        return $this->container['row_id'];
    }

    /**
     * Sets row_id
     *
     * @param int|null $row_id row_id
     *
     * @return self
     */
    public function setRowId($row_id)
    {
        if (is_null($row_id)) {
            throw new \InvalidArgumentException('non-nullable row_id cannot be null');
        }
        $this->container['row_id'] = $row_id;

        return $this;
    }

    /**
     * Gets track_metadata
     *
     * @return \OpenAPI\Client\Model\TrackMetadata|null
     */
    public function getTrackMetadata()
    {
        return $this->container['track_metadata'];
    }

    /**
     * Sets track_metadata
     *
     * @param \OpenAPI\Client\Model\TrackMetadata|null $track_metadata track_metadata
     *
     * @return self
     */
    public function setTrackMetadata($track_metadata)
    {
        if (is_null($track_metadata)) {
            throw new \InvalidArgumentException('non-nullable track_metadata cannot be null');
        }
        $this->container['track_metadata'] = $track_metadata;

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
