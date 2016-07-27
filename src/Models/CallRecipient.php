<?php
/**
 * CallRecipient
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
 * CallRecipient Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CallRecipient implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Call-recipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'firstname' => 'string',
        'lastname' => 'string',
        'miscellaneous' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'extension' => 'string',
        'status' => 'string',
        'duration' => 'int',
        'addOn' => 'string',
        'attempts' => 'string',
        'successful' => 'bool',
        'calledAt' => 'string'
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'miscellaneous' => 'miscellaneous',
        'email' => 'email',
        'phone' => 'phone',
        'extension' => 'extension',
        'status' => 'status',
        'duration' => 'duration',
        'addOn' => 'add_on',
        'attempts' => 'attempts',
        'successful' => 'successful',
        'calledAt' => 'called_at'
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
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'miscellaneous' => 'setMiscellaneous',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'extension' => 'setExtension',
        'status' => 'setStatus',
        'duration' => 'setDuration',
        'addOn' => 'setAddOn',
        'attempts' => 'setAttempts',
        'successful' => 'setSuccessful',
        'calledAt' => 'setCalledAt'
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
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'miscellaneous' => 'getMiscellaneous',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'extension' => 'getExtension',
        'status' => 'getStatus',
        'duration' => 'getDuration',
        'addOn' => 'getAddOn',
        'attempts' => 'getAttempts',
        'successful' => 'getSuccessful',
        'calledAt' => 'getCalledAt'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['miscellaneous'] = isset($data['miscellaneous']) ? $data['miscellaneous'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['addOn'] = isset($data['addOn']) ? $data['addOn'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['calledAt'] = isset($data['calledAt']) ? $data['calledAt'] : null;
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
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname The recipient's first name.
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname The recipient's last name.
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets miscellaneous
     * @return string
     */
    public function getMiscellaneous()
    {
        return $this->container['miscellaneous'];
    }

    /**
     * Sets miscellaneous
     * @param string $miscellaneous Miscellaneous information.
     * @return $this
     */
    public function setMiscellaneous($miscellaneous)
    {
        $this->container['miscellaneous'] = $miscellaneous;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email The recipient's email address.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $phone The recipient's phone number.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param string $extension The recipient's phone extension.
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

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
     * @param string $status Status of the call. Options: live_answer, vm, busy, no_answer, dialing, not_connected, queued
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Duration of the call in seconds.
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets addOn
     * @return string
     */
    public function getAddOn()
    {
        return $this->container['addOn'];
    }

    /**
     * Sets addOn
     * @param string $addOn Result from add-on feature.
     * @return $this
     */
    public function setAddOn($addOn)
    {
        $this->container['addOn'] = $addOn;

        return $this;
    }

    /**
     * Gets attempts
     * @return string
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     * @param string $attempts Number of attempts to call was made.
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets successful
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     * @param bool $successful Whether the call was successful or not.
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets calledAt
     * @return string
     */
    public function getCalledAt()
    {
        return $this->container['calledAt'];
    }

    /**
     * Sets calledAt
     * @param string $calledAt When the recipient was contacted.
     * @return $this
     */
    public function setCalledAt($calledAt)
    {
        $this->container['calledAt'] = $calledAt;

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


