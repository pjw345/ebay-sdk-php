<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationPreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the requesting application's notification preferences. <b>GetNotificationPreferences</b> retrieves preferences that you have deliberately set. For example, if you enable the <b>EndOfAuction</b> event and then later disable
 * it, the response shows the <b>EndOfAuction</b> event preference as <b>Disabled</b>. But if you have never set a preference for the <b>EndOfAuction</b> event, no <b>EndOfAuction</b> preference is returned at all.
 * @subpackage Structs
 */
class GetNotificationPreferencesResponseType extends AbstractResponseType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta information extracted from the WSDL
     * - documentation: Specifies application-based event preferences that have been enabled.
     * - minOccurs: 0
     * @var \StructType\ApplicationDeliveryPreferencesType
     */
    public $ApplicationDeliveryPreferences;
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: Specifies application delivery URL Name associated with this user.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * The UserDeliveryPreferenceArray
     * Meta information extracted from the WSDL
     * - documentation: Specifies user-based event preferences that have been enabled or disabled.
     * - minOccurs: 0
     * @var \ArrayType\NotificationEnableArrayType
     */
    public $UserDeliveryPreferenceArray;
    /**
     * The UserData
     * Meta information extracted from the WSDL
     * - documentation: Returns user data for notification settings, such as set mobile phone.
     * - minOccurs: 0
     * @var \StructType\NotificationUserDataType
     */
    public $UserData;
    /**
     * The EventProperty
     * Meta information extracted from the WSDL
     * - documentation: Contains names and values assigned to a notification event. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NotificationEventPropertyType[]
     */
    public $EventProperty;
    /**
     * Constructor method for GetNotificationPreferencesResponseType
     * @uses GetNotificationPreferencesResponseType::setApplicationDeliveryPreferences()
     * @uses GetNotificationPreferencesResponseType::setDeliveryURLName()
     * @uses GetNotificationPreferencesResponseType::setUserDeliveryPreferenceArray()
     * @uses GetNotificationPreferencesResponseType::setUserData()
     * @uses GetNotificationPreferencesResponseType::setEventProperty()
     * @param \StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @param string $deliveryURLName
     * @param \ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @param \StructType\NotificationUserDataType $userData
     * @param \StructType\NotificationEventPropertyType[] $eventProperty
     */
    public function __construct(\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, $deliveryURLName = null, \ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, \StructType\NotificationUserDataType $userData = null, array $eventProperty = array())
    {
        $this
            ->setApplicationDeliveryPreferences($applicationDeliveryPreferences)
            ->setDeliveryURLName($deliveryURLName)
            ->setUserDeliveryPreferenceArray($userDeliveryPreferenceArray)
            ->setUserData($userData)
            ->setEventProperty($eventProperty);
    }
    /**
     * Get ApplicationDeliveryPreferences value
     * @return \StructType\ApplicationDeliveryPreferencesType|null
     */
    public function getApplicationDeliveryPreferences()
    {
        return $this->ApplicationDeliveryPreferences;
    }
    /**
     * Set ApplicationDeliveryPreferences value
     * @param \StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function setApplicationDeliveryPreferences(\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null)
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
        return $this;
    }
    /**
     * Get DeliveryURLName value
     * @return string|null
     */
    public function getDeliveryURLName()
    {
        return $this->DeliveryURLName;
    }
    /**
     * Set DeliveryURLName value
     * @param string $deliveryURLName
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function setDeliveryURLName($deliveryURLName = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryURLName) && !is_string($deliveryURLName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURLName, true), gettype($deliveryURLName)), __LINE__);
        }
        $this->DeliveryURLName = $deliveryURLName;
        return $this;
    }
    /**
     * Get UserDeliveryPreferenceArray value
     * @return \ArrayType\NotificationEnableArrayType|null
     */
    public function getUserDeliveryPreferenceArray()
    {
        return $this->UserDeliveryPreferenceArray;
    }
    /**
     * Set UserDeliveryPreferenceArray value
     * @param \ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function setUserDeliveryPreferenceArray(\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null)
    {
        $this->UserDeliveryPreferenceArray = $userDeliveryPreferenceArray;
        return $this;
    }
    /**
     * Get UserData value
     * @return \StructType\NotificationUserDataType|null
     */
    public function getUserData()
    {
        return $this->UserData;
    }
    /**
     * Set UserData value
     * @param \StructType\NotificationUserDataType $userData
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function setUserData(\StructType\NotificationUserDataType $userData = null)
    {
        $this->UserData = $userData;
        return $this;
    }
    /**
     * Get EventProperty value
     * @return \StructType\NotificationEventPropertyType[]|null
     */
    public function getEventProperty()
    {
        return $this->EventProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setEventProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventPropertyForArrayConstraintsFromSetEventProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getNotificationPreferencesResponseTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$getNotificationPreferencesResponseTypeEventPropertyItem instanceof \StructType\NotificationEventPropertyType) {
                $invalidValues[] = is_object($getNotificationPreferencesResponseTypeEventPropertyItem) ? get_class($getNotificationPreferencesResponseTypeEventPropertyItem) : sprintf('%s(%s)', gettype($getNotificationPreferencesResponseTypeEventPropertyItem), var_export($getNotificationPreferencesResponseTypeEventPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EventProperty property can only contain items of type \StructType\NotificationEventPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EventProperty value
     * @throws \InvalidArgumentException
     * @param \StructType\NotificationEventPropertyType[] $eventProperty
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function setEventProperty(array $eventProperty = array())
    {
        // validation for constraint: array
        if ('' !== ($eventPropertyArrayErrorMessage = self::validateEventPropertyForArrayConstraintsFromSetEventProperty($eventProperty))) {
            throw new \InvalidArgumentException($eventPropertyArrayErrorMessage, __LINE__);
        }
        $this->EventProperty = $eventProperty;
        return $this;
    }
    /**
     * Add item to EventProperty value
     * @throws \InvalidArgumentException
     * @param \StructType\NotificationEventPropertyType $item
     * @return \StructType\GetNotificationPreferencesResponseType
     */
    public function addToEventProperty(\StructType\NotificationEventPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NotificationEventPropertyType) {
            throw new \InvalidArgumentException(sprintf('The EventProperty property can only contain items of type \StructType\NotificationEventPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EventProperty[] = $item;
        return $this;
    }
}
