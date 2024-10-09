<?php
/**
 * CreateQrCodeRequest
 *
 * PHP version 8.1
 *
 * @package  URLR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * URLR API Reference
 *
 * API powering the features of URLR.<br><br>Note that in order to facilitate integration, we provide SDKs for various languages at https://github.com/URLR.<br><br>Key API principles:<br>         <ul><li>All dates follow **ISO-8601** format</li><li>Most errors follow **RFC 9457** standard</li><li>All responses are delivered in English</li></ul>
 *
 * The version of the OpenAPI document: 1.3
 * Contact: contact@urlr.me
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace URLR\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use URLR\ObjectSerializer;

/**
 * CreateQrCodeRequest Class Doc Comment
 *
 * @package  URLR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateQrCodeRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createQrCode_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'size' => 'int',
        'format' => 'string',
        'margin' => 'int',
        'backgroundColor' => 'string',
        'foregroundColor' => 'string',
        'url' => 'string',
        'teamId' => 'string',
        'linkId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'size' => null,
        'format' => null,
        'margin' => null,
        'backgroundColor' => null,
        'foregroundColor' => null,
        'url' => 'url',
        'teamId' => 'uuid',
        'linkId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'size' => false,
        'format' => false,
        'margin' => false,
        'backgroundColor' => false,
        'foregroundColor' => false,
        'url' => false,
        'teamId' => false,
        'linkId' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'size' => 'size',
        'format' => 'format',
        'margin' => 'margin',
        'backgroundColor' => 'background_color',
        'foregroundColor' => 'foreground_color',
        'url' => 'url',
        'teamId' => 'team_id',
        'linkId' => 'link_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'size' => 'setSize',
        'format' => 'setFormat',
        'margin' => 'setMargin',
        'backgroundColor' => 'setBackgroundColor',
        'foregroundColor' => 'setForegroundColor',
        'url' => 'setUrl',
        'teamId' => 'setTeamId',
        'linkId' => 'setLinkId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'size' => 'getSize',
        'format' => 'getFormat',
        'margin' => 'getMargin',
        'backgroundColor' => 'getBackgroundColor',
        'foregroundColor' => 'getForegroundColor',
        'url' => 'getUrl',
        'teamId' => 'getTeamId',
        'linkId' => 'getLinkId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const FORMAT_PNG = 'png';
    public const FORMAT_WEBP = 'webp';
    public const FORMAT_SVG = 'svg';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_PNG,
            self::FORMAT_WEBP,
            self::FORMAT_SVG,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('size', $data ?? [], 600);
        $this->setIfExists('format', $data ?? [], 'png');
        $this->setIfExists('margin', $data ?? [], 0);
        $this->setIfExists('backgroundColor', $data ?? [], '#ffffff');
        $this->setIfExists('foregroundColor', $data ?? [], '#000000');
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('teamId', $data ?? [], null);
        $this->setIfExists('linkId', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['size']) && ($this->container['size'] > 1000)) {
            $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['size']) && ($this->container['size'] < 100)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 100.";
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['teamId'] === null) {
            $invalidProperties[] = "'teamId' can't be null";
        }
        if ($this->container['linkId'] === null) {
            $invalidProperties[] = "'linkId' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size The size of the QR code (px)
     *
     * @return $this
     */
    public function setSize(?int $size): static
    {
        if (is_null($size)) {
            throw new InvalidArgumentException('non-nullable size cannot be null');
        }

        if (($size > 1000)) {
            throw new InvalidArgumentException('invalid value for $size when calling CreateQrCodeRequest., must be smaller than or equal to 1000.');
        }
        if (($size < 100)) {
            throw new InvalidArgumentException('invalid value for $size when calling CreateQrCodeRequest., must be bigger than or equal to 100.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format The format of the QR code
     *
     * @return $this
     */
    public function setFormat(?string $format): static
    {
        if (is_null($format)) {
            throw new InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return int|null
     */
    public function getMargin(): ?int
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param int|null $margin The margin around the QR code (px)
     *
     * @return $this
     */
    public function setMargin(?int $margin): static
    {
        if (is_null($margin)) {
            throw new InvalidArgumentException('non-nullable margin cannot be null');
        }
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets backgroundColor
     *
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        return $this->container['backgroundColor'];
    }

    /**
     * Sets backgroundColor
     *
     * @param string|null $backgroundColor The background color of the QR code (hexadecimal)
     *
     * @return $this
     */
    public function setBackgroundColor(?string $backgroundColor): static
    {
        if (is_null($backgroundColor)) {
            throw new InvalidArgumentException('non-nullable backgroundColor cannot be null');
        }
        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * Gets foregroundColor
     *
     * @return string|null
     */
    public function getForegroundColor(): ?string
    {
        return $this->container['foregroundColor'];
    }

    /**
     * Sets foregroundColor
     *
     * @param string|null $foregroundColor The foreground color of the QR code (hexadecimal)
     *
     * @return $this
     */
    public function setForegroundColor(?string $foregroundColor): static
    {
        if (is_null($foregroundColor)) {
            throw new InvalidArgumentException('non-nullable foregroundColor cannot be null');
        }
        $this->container['foregroundColor'] = $foregroundColor;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL of the QR Code
     *
     * @return $this
     */
    public function setUrl(string $url): static
    {
        if (is_null($url)) {
            throw new InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets teamId
     *
     * @return string
     */
    public function getTeamId(): string
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     *
     * @param string $teamId Team API ID
     *
     * @return $this
     */
    public function setTeamId(string $teamId): static
    {
        if (is_null($teamId)) {
            throw new InvalidArgumentException('non-nullable teamId cannot be null');
        }
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets linkId
     *
     * @return string
     */
    public function getLinkId(): string
    {
        return $this->container['linkId'];
    }

    /**
     * Sets linkId
     *
     * @param string $linkId Link API ID of the QR Code
     *
     * @return $this
     */
    public function setLinkId(string $linkId): static
    {
        if (is_null($linkId)) {
            throw new InvalidArgumentException('non-nullable linkId cannot be null');
        }
        $this->container['linkId'] = $linkId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


