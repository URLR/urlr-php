<?php
/**
 * GetLink200Response
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
 * The version of the OpenAPI document: 1.4
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
 * GetLink200Response Class Doc Comment
 *
 * @package  URLR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetLink200Response implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getLink_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'url' => 'string',
        'teamId' => 'string',
        'folderId' => 'string',
        'domain' => 'string',
        'code' => 'string',
        'label' => 'string',
        'qrcode' => '\URLR\Model\GetLink200ResponseQrcode',
        'utm' => '\URLR\Model\GetLink200ResponseUtm',
        'metatag' => '\URLR\Model\GetLink200ResponseMetatag',
        'geolinks' => '\URLR\Model\GetLink200ResponseGeolinksInner[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'expiredAt' => '\DateTime',
        'expiredUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'url' => null,
        'teamId' => 'uuid',
        'folderId' => 'uuid',
        'domain' => 'hostname',
        'code' => null,
        'label' => null,
        'qrcode' => null,
        'utm' => null,
        'metatag' => null,
        'geolinks' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'expiredAt' => 'date-time',
        'expiredUrl' => 'url'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'url' => false,
        'teamId' => false,
        'folderId' => false,
        'domain' => false,
        'code' => false,
        'label' => false,
        'qrcode' => false,
        'utm' => false,
        'metatag' => false,
        'geolinks' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'expiredAt' => false,
        'expiredUrl' => false
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
        'id' => 'id',
        'url' => 'url',
        'teamId' => 'team_id',
        'folderId' => 'folder_id',
        'domain' => 'domain',
        'code' => 'code',
        'label' => 'label',
        'qrcode' => 'qrcode',
        'utm' => 'utm',
        'metatag' => 'metatag',
        'geolinks' => 'geolinks',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'expiredAt' => 'expired_at',
        'expiredUrl' => 'expired_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'teamId' => 'setTeamId',
        'folderId' => 'setFolderId',
        'domain' => 'setDomain',
        'code' => 'setCode',
        'label' => 'setLabel',
        'qrcode' => 'setQrcode',
        'utm' => 'setUtm',
        'metatag' => 'setMetatag',
        'geolinks' => 'setGeolinks',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'expiredAt' => 'setExpiredAt',
        'expiredUrl' => 'setExpiredUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'teamId' => 'getTeamId',
        'folderId' => 'getFolderId',
        'domain' => 'getDomain',
        'code' => 'getCode',
        'label' => 'getLabel',
        'qrcode' => 'getQrcode',
        'utm' => 'getUtm',
        'metatag' => 'getMetatag',
        'geolinks' => 'getGeolinks',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'expiredAt' => 'getExpiredAt',
        'expiredUrl' => 'getExpiredUrl'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('teamId', $data ?? [], null);
        $this->setIfExists('folderId', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('qrcode', $data ?? [], null);
        $this->setIfExists('utm', $data ?? [], null);
        $this->setIfExists('metatag', $data ?? [], null);
        $this->setIfExists('geolinks', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('expiredAt', $data ?? [], null);
        $this->setIfExists('expiredUrl', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Link API ID
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Original URL
     *
     * @return $this
     */
    public function setUrl(?string $url): static
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
     * @return string|null
     */
    public function getTeamId(): ?string
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     *
     * @param string|null $teamId Team API ID
     *
     * @return $this
     */
    public function setTeamId(?string $teamId): static
    {
        if (is_null($teamId)) {
            throw new InvalidArgumentException('non-nullable teamId cannot be null');
        }
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets folderId
     *
     * @return string|null
     */
    public function getFolderId(): ?string
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     *
     * @param string|null $folderId Folder API ID
     *
     * @return $this
     */
    public function setFolderId(?string $folderId): static
    {
        if (is_null($folderId)) {
            throw new InvalidArgumentException('non-nullable folderId cannot be null');
        }
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Domain
     *
     * @return $this
     */
    public function setDomain(?string $domain): static
    {
        if (is_null($domain)) {
            throw new InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Short code
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Label
     *
     * @return $this
     */
    public function setLabel(?string $label): static
    {
        if (is_null($label)) {
            throw new InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets qrcode
     *
     * @return \URLR\Model\GetLink200ResponseQrcode|null
     */
    public function getQrcode(): ?\URLR\Model\GetLink200ResponseQrcode
    {
        return $this->container['qrcode'];
    }

    /**
     * Sets qrcode
     *
     * @param \URLR\Model\GetLink200ResponseQrcode|null $qrcode qrcode
     *
     * @return $this
     */
    public function setQrcode(?\URLR\Model\GetLink200ResponseQrcode $qrcode): static
    {
        if (is_null($qrcode)) {
            throw new InvalidArgumentException('non-nullable qrcode cannot be null');
        }
        $this->container['qrcode'] = $qrcode;

        return $this;
    }

    /**
     * Gets utm
     *
     * @return \URLR\Model\GetLink200ResponseUtm|null
     */
    public function getUtm(): ?\URLR\Model\GetLink200ResponseUtm
    {
        return $this->container['utm'];
    }

    /**
     * Sets utm
     *
     * @param \URLR\Model\GetLink200ResponseUtm|null $utm utm
     *
     * @return $this
     */
    public function setUtm(?\URLR\Model\GetLink200ResponseUtm $utm): static
    {
        if (is_null($utm)) {
            throw new InvalidArgumentException('non-nullable utm cannot be null');
        }
        $this->container['utm'] = $utm;

        return $this;
    }

    /**
     * Gets metatag
     *
     * @return \URLR\Model\GetLink200ResponseMetatag|null
     */
    public function getMetatag(): ?\URLR\Model\GetLink200ResponseMetatag
    {
        return $this->container['metatag'];
    }

    /**
     * Sets metatag
     *
     * @param \URLR\Model\GetLink200ResponseMetatag|null $metatag metatag
     *
     * @return $this
     */
    public function setMetatag(?\URLR\Model\GetLink200ResponseMetatag $metatag): static
    {
        if (is_null($metatag)) {
            throw new InvalidArgumentException('non-nullable metatag cannot be null');
        }
        $this->container['metatag'] = $metatag;

        return $this;
    }

    /**
     * Gets geolinks
     *
     * @return \URLR\Model\GetLink200ResponseGeolinksInner[]|null
     */
    public function getGeolinks(): ?array
    {
        return $this->container['geolinks'];
    }

    /**
     * Sets geolinks
     *
     * @param \URLR\Model\GetLink200ResponseGeolinksInner[]|null $geolinks Geographical targeting links
     *
     * @return $this
     */
    public function setGeolinks(?array $geolinks): static
    {
        if (is_null($geolinks)) {
            throw new InvalidArgumentException('non-nullable geolinks cannot be null');
        }
        $this->container['geolinks'] = $geolinks;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt Creation date
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt Modification date
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        if (is_null($updatedAt)) {
            throw new InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets expiredAt
     *
     * @return \DateTime|null
     */
    public function getExpiredAt(): ?\DateTime
    {
        return $this->container['expiredAt'];
    }

    /**
     * Sets expiredAt
     *
     * @param \DateTime|null $expiredAt Expiration date
     *
     * @return $this
     */
    public function setExpiredAt(?\DateTime $expiredAt): static
    {
        if (is_null($expiredAt)) {
            throw new InvalidArgumentException('non-nullable expiredAt cannot be null');
        }
        $this->container['expiredAt'] = $expiredAt;

        return $this;
    }

    /**
     * Gets expiredUrl
     *
     * @return string|null
     */
    public function getExpiredUrl(): ?string
    {
        return $this->container['expiredUrl'];
    }

    /**
     * Sets expiredUrl
     *
     * @param string|null $expiredUrl Expiration URL
     *
     * @return $this
     */
    public function setExpiredUrl(?string $expiredUrl): static
    {
        if (is_null($expiredUrl)) {
            throw new InvalidArgumentException('non-nullable expiredUrl cannot be null');
        }
        $this->container['expiredUrl'] = $expiredUrl;

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


