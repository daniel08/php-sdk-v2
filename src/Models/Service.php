<?php
/**
 * Service
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
 * OpenAPI spec version: 2.0.1
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
 * Service Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'accessaccountId' => 'string',
        'name' => 'string',
        'pendingCancel' => 'bool',
        'creditCost' => 'float',
        'totalRecipients' => 'float',
        'sendAt' => 'string',
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
        'accessaccountId' => 'accessaccount_id',
        'name' => 'name',
        'pendingCancel' => 'pending_cancel',
        'creditCost' => 'credit_cost',
        'totalRecipients' => 'total_recipients',
        'sendAt' => 'send_at',
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
        'accessaccountId' => 'setAccessaccountId',
        'name' => 'setName',
        'pendingCancel' => 'setPendingCancel',
        'creditCost' => 'setCreditCost',
        'totalRecipients' => 'setTotalRecipients',
        'sendAt' => 'setSendAt',
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
        'accessaccountId' => 'getAccessaccountId',
        'name' => 'getName',
        'pendingCancel' => 'getPendingCancel',
        'creditCost' => 'getCreditCost',
        'totalRecipients' => 'getTotalRecipients',
        'sendAt' => 'getSendAt',
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
        $this->container['accessaccountId'] = isset($data['accessaccountId']) ? $data['accessaccountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pendingCancel'] = isset($data['pendingCancel']) ? $data['pendingCancel'] : null;
        $this->container['creditCost'] = isset($data['creditCost']) ? $data['creditCost'] : null;
        $this->container['totalRecipients'] = isset($data['totalRecipients']) ? $data['totalRecipients'] : null;
        $this->container['sendAt'] = isset($data['sendAt']) ? $data['sendAt'] : null;
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
     * @param string $id Unique identifier for this service.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets accessaccountId
     * @return string
     */
    public function getAccessaccountId()
    {
        return $this->container['accessaccountId'];
    }

    /**
     * Sets accessaccountId
     * @param string $accessaccountId Unique identifier for the access account which initiated this if available.
     * @return $this
     */
    public function setAccessaccountId($accessaccountId)
    {
        $this->container['accessaccountId'] = $accessaccountId;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the service.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pendingCancel
     * @return bool
     */
    public function getPendingCancel()
    {
        return $this->container['pendingCancel'];
    }

    /**
     * Sets pendingCancel
     * @param bool $pendingCancel Whether the service has been flagged to be cancelled.
     * @return $this
     */
    public function setPendingCancel($pendingCancel)
    {
        $this->container['pendingCancel'] = $pendingCancel;

        return $this;
    }

    /**
     * Gets creditCost
     * @return float
     */
    public function getCreditCost()
    {
        return $this->container['creditCost'];
    }

    /**
     * Sets creditCost
     * @param float $creditCost The amount of credits required to schedule this service.
     * @return $this
     */
    public function setCreditCost($creditCost)
    {
        $this->container['creditCost'] = $creditCost;

        return $this;
    }

    /**
     * Gets totalRecipients
     * @return float
     */
    public function getTotalRecipients()
    {
        return $this->container['totalRecipients'];
    }

    /**
     * Sets totalRecipients
     * @param float $totalRecipients The amount of recipients for this service.
     * @return $this
     */
    public function setTotalRecipients($totalRecipients)
    {
        $this->container['totalRecipients'] = $totalRecipients;

        return $this;
    }

    /**
     * Gets sendAt
     * @return string
     */
    public function getSendAt()
    {
        return $this->container['sendAt'];
    }

    /**
     * Sets sendAt
     * @param string $sendAt When the service will be sent.
     * @return $this
     */
    public function setSendAt($sendAt)
    {
        $this->container['sendAt'] = $sendAt;

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
     * @param string $createdAt When the service was created.
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
     * @param string $updatedAt When the service was last updated.
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


