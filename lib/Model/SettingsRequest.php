<?php
/**
 * SettingsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory Kratos
 *
 * Welcome to the ORY Kratos HTTP API documentation!
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Kratos\Client\Model;

use \ArrayAccess;
use \Ory\Kratos\Client\ObjectSerializer;

/**
 * SettingsRequest Class Doc Comment
 *
 * @category Class
 * @description This request is used when an identity wants to update settings (e.g. profile data, passwords, ...) in a selfservice manner.  We recommend reading the [User Settings Documentation](../self-service/flows/user-settings)
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'settingsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'string',
        'expiresAt' => '\DateTime',
        'id' => 'string',
        'identity' => '\Ory\Kratos\Client\Model\Identity',
        'issuedAt' => '\DateTime',
        'methods' => 'map[string,\Ory\Kratos\Client\Model\SettingsRequestMethod]',
        'requestUrl' => 'string',
        'updateSuccessful' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'active' => null,
        'expiresAt' => 'date-time',
        'id' => 'uuid4',
        'identity' => null,
        'issuedAt' => 'date-time',
        'methods' => null,
        'requestUrl' => null,
        'updateSuccessful' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
        'expiresAt' => 'expires_at',
        'id' => 'id',
        'identity' => 'identity',
        'issuedAt' => 'issued_at',
        'methods' => 'methods',
        'requestUrl' => 'request_url',
        'updateSuccessful' => 'update_successful'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'expiresAt' => 'setExpiresAt',
        'id' => 'setId',
        'identity' => 'setIdentity',
        'issuedAt' => 'setIssuedAt',
        'methods' => 'setMethods',
        'requestUrl' => 'setRequestUrl',
        'updateSuccessful' => 'setUpdateSuccessful'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'expiresAt' => 'getExpiresAt',
        'id' => 'getId',
        'identity' => 'getIdentity',
        'issuedAt' => 'getIssuedAt',
        'methods' => 'getMethods',
        'requestUrl' => 'getRequestUrl',
        'updateSuccessful' => 'getUpdateSuccessful'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['requestUrl'] = isset($data['requestUrl']) ? $data['requestUrl'] : null;
        $this->container['updateSuccessful'] = isset($data['updateSuccessful']) ? $data['updateSuccessful'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['identity'] === null) {
            $invalidProperties[] = "'identity' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
        }
        if ($this->container['requestUrl'] === null) {
            $invalidProperties[] = "'requestUrl' can't be null";
        }
        if ($this->container['updateSuccessful'] === null) {
            $invalidProperties[] = "'updateSuccessful' can't be null";
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
     * Gets active
     *
     * @return string|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param string|null $active Active, if set, contains the registration method that is being used. It is initially not set.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt ExpiresAt is the time (UTC) when the request expires. If the user still wishes to update the setting, a new request has to be initiated.
     *
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return \Ory\Kratos\Client\Model\Identity
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \Ory\Kratos\Client\Model\Identity $identity identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets issuedAt
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param \DateTime $issuedAt IssuedAt is the time (UTC) when the request occurred.
     *
     * @return $this
     */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }

    /**
     * Gets methods
     *
     * @return map[string,\Ory\Kratos\Client\Model\SettingsRequestMethod]
     */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
     * Sets methods
     *
     * @param map[string,\Ory\Kratos\Client\Model\SettingsRequestMethod] $methods Methods contains context for all enabled registration methods. If a registration request has been processed, but for example the password is incorrect, this will contain error messages.
     *
     * @return $this
     */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;

        return $this;
    }

    /**
     * Gets requestUrl
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl RequestURL is the initial URL that was requested from ORY Kratos. It can be used to forward information contained in the URL's path or query for example.
     *
     * @return $this
     */
    public function setRequestUrl($requestUrl)
    {
        $this->container['requestUrl'] = $requestUrl;

        return $this;
    }

    /**
     * Gets updateSuccessful
     *
     * @return bool
     */
    public function getUpdateSuccessful()
    {
        return $this->container['updateSuccessful'];
    }

    /**
     * Sets updateSuccessful
     *
     * @param bool $updateSuccessful UpdateSuccessful, if true, indicates that the settings request has been updated successfully with the provided data. Done will stay true when repeatedly checking. If set to true, done will revert back to false only when a request with invalid (e.g. \"please use a valid phone number\") data was sent.
     *
     * @return $this
     */
    public function setUpdateSuccessful($updateSuccessful)
    {
        $this->container['updateSuccessful'] = $updateSuccessful;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


