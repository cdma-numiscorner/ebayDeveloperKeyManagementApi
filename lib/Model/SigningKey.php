<?php
/**
 * SigningKey
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayDevKeyManagementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Key Management API
 *
 * Due to regulatory requirements applicable to our EU/UK sellers, for certain APIs, developers need to add digital signatures to the respective HTTP call. The Key Management API creates keypairs that are required when creating digital signatures for the following APIs:<ul><li>All methods in the <a href=\"/api-docs/sell/finances/resources/methods \" target=\"_blank \">Finances API</a></li><li><a href=\"/api-docs/sell/fulfillment/resources/order/methods/issueRefund \" target=\"_blank \">issueRefund</a> in the Fulfillment API</li><li><a href=\"/Devzone/XML/docs/Reference/eBay/GetAccount.html \" target=\"_blank \">GetAccount</a> in the Trading API</li><li>The following methods in the Post-Order API:<ul><li><a href=\"/Devzone/post-order/post-order_v2_inquiry-inquiryid_issue_refund__post.html \" target=\"_blank \">Issue Inquiry Refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_casemanagement-caseid_issue_refund__post.html \" target=\"_blank \">Issue case refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_return-returnid_issue_refund__post.html \" target=\"_blank \">Issue return refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_return-returnid_decide__post.html \" target=\"_blank \">Process Return Request</a></li><li><a href=\"/devzone/post-order/post-order_v2_cancellation-cancelid_approve__post.html \" target=\"_blank \">Approve Cancellation Request</a></li><li><a href=\"/devzone/post-order/post-order_v2_cancellation__post.html \" target=\"_blank \">Create Cancellation Request</a></li></ul></li></ul><span class=\"tablenote\"><b>Note:</b> For additional information about keypairs and creating Message Signatures, refer to <a href= \"/develop/guides/digital-signatures-for-apis \" target= \"_blank \">Digital Signatures for APIs</a>.</span>
 *
 * The version of the OpenAPI document: v1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayDevKeyManagementClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayDevKeyManagementClient\ObjectSerializer;

/**
 * SigningKey Class Doc Comment
 *
 * @category Class
 * @description This container stores metadata for a signing key.
 * @package  OpenAPI\EbayDevKeyManagementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SigningKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SigningKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creation_time' => 'int',
        'expiration_time' => 'int',
        'jwe' => 'string',
        'private_key' => 'string',
        'public_key' => 'string',
        'signing_key_cipher' => 'string',
        'signing_key_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creation_time' => 'int32',
        'expiration_time' => 'int32',
        'jwe' => null,
        'private_key' => null,
        'public_key' => null,
        'signing_key_cipher' => null,
        'signing_key_id' => null
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
        'creation_time' => 'creationTime',
        'expiration_time' => 'expirationTime',
        'jwe' => 'jwe',
        'private_key' => 'privateKey',
        'public_key' => 'publicKey',
        'signing_key_cipher' => 'signingKeyCipher',
        'signing_key_id' => 'signingKeyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_time' => 'setCreationTime',
        'expiration_time' => 'setExpirationTime',
        'jwe' => 'setJwe',
        'private_key' => 'setPrivateKey',
        'public_key' => 'setPublicKey',
        'signing_key_cipher' => 'setSigningKeyCipher',
        'signing_key_id' => 'setSigningKeyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_time' => 'getCreationTime',
        'expiration_time' => 'getExpirationTime',
        'jwe' => 'getJwe',
        'private_key' => 'getPrivateKey',
        'public_key' => 'getPublicKey',
        'signing_key_cipher' => 'getSigningKeyCipher',
        'signing_key_id' => 'getSigningKeyId'
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
        $this->container['creation_time'] = $data['creation_time'] ?? null;
        $this->container['expiration_time'] = $data['expiration_time'] ?? null;
        $this->container['jwe'] = $data['jwe'] ?? null;
        $this->container['private_key'] = $data['private_key'] ?? null;
        $this->container['public_key'] = $data['public_key'] ?? null;
        $this->container['signing_key_cipher'] = $data['signing_key_cipher'] ?? null;
        $this->container['signing_key_id'] = $data['signing_key_id'] ?? null;
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
     * Gets creation_time
     *
     * @return int|null
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param int|null $creation_time The UNIX timestamp when the <code>SigningKey</code> was created. This time is represented as the number of seconds from \"1970-01-01T00:00:00Z\", as measured in UTC, until the date and time the <code>SigningKey</code> was created.
     *
     * @return self
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets expiration_time
     *
     * @return int|null
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param int|null $expiration_time The UNIX timestamp when the <code>SigningKey</code> expires. This time is represented as the number of seconds from \"1970-01-01T00:00:00Z\", as measured in UTC, until the date and time the <code>SigningKey</code> expires.<br/><span class=\"tablenote\"><b>Note:</b> All keys have an expiration date of three (3) years after their <code>creationTime</code>.</span>
     *
     * @return self
     */
    public function setExpirationTime($expiration_time)
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets jwe
     *
     * @return string|null
     */
    public function getJwe()
    {
        return $this->container['jwe'];
    }

    /**
     * Sets jwe
     *
     * @param string|null $jwe This is the JSON Web Encrypted (JWE) value for the <code>publicKey</code>.
     *
     * @return self
     */
    public function setJwe($jwe)
    {
        $this->container['jwe'] = $jwe;

        return $this;
    }

    /**
     * Gets private_key
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->container['private_key'];
    }

    /**
     * Sets private_key
     *
     * @param string|null $private_key This is the Private Key that has been generated using the specified <code>signingKeyCipher</code>.<br/><span class=\"tablenote\"><b>Note:</b> The <code>privateKey</code> value will <b>only</b> be returned in the response payload of the  <code>createSigningKey</code> method.<br/><br/>It will <i>never</i> be returned by the <code>getSigningKey</code> or <code>getSigningKeys</code> methods.</span>Developers are <b>strongly advised</b> to download their <code>privateKey</code> value as Privacy Enhance Mail (PEM) format and store it locally for future reference. In order to guarantee the security of confidential client information, eBay does not store <code>privateKey</code> values on any system.<br/><span class=\"tablenote\"><b>Note:</b> If a developer loses their <code>privateKey</code> they must generate new keypairs set using the <code>createSigningKey</code> method.</span>
     *
     * @return self
     */
    public function setPrivateKey($private_key)
    {
        $this->container['private_key'] = $private_key;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key This is the Public Key that has been generated using the specified <code>signingKeyCipher</code>.<br/><br/>As a matter of good practice, developers are <b>strongly advised</b> to download this value and store it locally for safe-keeping and future reference.
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets signing_key_cipher
     *
     * @return string|null
     */
    public function getSigningKeyCipher()
    {
        return $this->container['signing_key_cipher'];
    }

    /**
     * Sets signing_key_cipher
     *
     * @param string|null $signing_key_cipher Indicates the cipher used to create the keypairs. Refer to <a href= \"/api-docs/developer/key-management/types/api:SigningKeyCipher\" target= \"_blank\">SigningKeyCiper</a> for the list of supported enum values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/developer/key_management/types/api:SigningKeyCipher'>eBay API documentation</a>
     *
     * @return self
     */
    public function setSigningKeyCipher($signing_key_cipher)
    {
        $this->container['signing_key_cipher'] = $signing_key_cipher;

        return $this;
    }

    /**
     * Gets signing_key_id
     *
     * @return string|null
     */
    public function getSigningKeyId()
    {
        return $this->container['signing_key_id'];
    }

    /**
     * Sets signing_key_id
     *
     * @param string|null $signing_key_id The system-generated eBay ID for the keypairs.
     *
     * @return self
     */
    public function setSigningKeyId($signing_key_id)
    {
        $this->container['signing_key_id'] = $signing_key_id;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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

