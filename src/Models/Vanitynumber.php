<?php
/**
 * Vanitynumber
 *
 * PHP version 5
 *
 * @category Class
 * @package  DialMyCalls
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DialMyCalls API
 *
 * The DialMyCalls API
 *
 * OpenAPI spec version: 2.0
 * Contact: support@dialmycalls.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DialMyCalls\Models;

use \ArrayAccess;

/**
 * Vanitynumber Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vanitynumber implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Vanitynumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'minutesUsed' => 'float',
        'minutesAllowed' => 'float',
        'voicemailsNew' => 'int',
        'voicemailsOld' => 'int',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'phone' => 'phone',
        'status' => 'status',
        'minutesUsed' => 'minutes_used',
        'minutesAllowed' => 'minutes_allowed',
        'voicemailsNew' => 'voicemails_new',
        'voicemailsOld' => 'voicemails_old',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'phone' => 'setPhone',
        'status' => 'setStatus',
        'minutesUsed' => 'setMinutesUsed',
        'minutesAllowed' => 'setMinutesAllowed',
        'voicemailsNew' => 'setVoicemailsNew',
        'voicemailsOld' => 'setVoicemailsOld',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'phone' => 'getPhone',
        'status' => 'getStatus',
        'minutesUsed' => 'getMinutesUsed',
        'minutesAllowed' => 'getMinutesAllowed',
        'voicemailsNew' => 'getVoicemailsNew',
        'voicemailsOld' => 'getVoicemailsOld',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['minutesUsed'] = isset($data['minutesUsed']) ? $data['minutesUsed'] : null;
        $this->container['minutesAllowed'] = isset($data['minutesAllowed']) ? $data['minutesAllowed'] : null;
        $this->container['voicemailsNew'] = isset($data['voicemailsNew']) ? $data['voicemailsNew'] : null;
        $this->container['voicemailsOld'] = isset($data['voicemailsOld']) ? $data['voicemailsOld'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identifier for this group.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone The phone number.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the vanity number. Options: active, onhold, billingdecline, pendingdelete
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets minutesUsed
     * @return float
     */
    public function getMinutesUsed()
    {
        return $this->container['minutesUsed'];
    }

    /**
     * Sets minutesUsed
     * @param float $minutesUsed The amount of minutes used since last billing.
     * @return $this
     */
    public function setMinutesUsed($minutesUsed)
    {
        $this->container['minutesUsed'] = $minutesUsed;

        return $this;
    }

    /**
     * Gets minutesAllowed
     * @return float
     */
    public function getMinutesAllowed()
    {
        return $this->container['minutesAllowed'];
    }

    /**
     * Sets minutesAllowed
     * @param float $minutesAllowed The amount of minutes included with the vanity number before billed additionally.
     * @return $this
     */
    public function setMinutesAllowed($minutesAllowed)
    {
        $this->container['minutesAllowed'] = $minutesAllowed;

        return $this;
    }

    /**
     * Gets voicemailsNew
     * @return int
     */
    public function getVoicemailsNew()
    {
        return $this->container['voicemailsNew'];
    }

    /**
     * Sets voicemailsNew
     * @param int $voicemailsNew The amount of voicemails that have not been downloaded.
     * @return $this
     */
    public function setVoicemailsNew($voicemailsNew)
    {
        $this->container['voicemailsNew'] = $voicemailsNew;

        return $this;
    }

    /**
     * Gets voicemailsOld
     * @return int
     */
    public function getVoicemailsOld()
    {
        return $this->container['voicemailsOld'];
    }

    /**
     * Sets voicemailsOld
     * @param int $voicemailsOld The amount of voicemails that have been downloaded.
     * @return $this
     */
    public function setVoicemailsOld($voicemailsOld)
    {
        $this->container['voicemailsOld'] = $voicemailsOld;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt When the keyword was created.
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     * @param string $updatedAt When the keyword was last updated.
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DialMyCalls\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DialMyCalls\ObjectSerializer::sanitizeForSerialization($this));
    }
}


