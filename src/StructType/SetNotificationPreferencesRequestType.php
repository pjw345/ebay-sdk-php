<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetNotificationPreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Manages notification and alert preferences for applications and users.
 * @subpackage Structs
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta information extracted from the WSDL
     * - documentation: Specifies application-level event preferences that have been enabled, including the URL to which notifications should be delivered and whether notifications should be enabled or disabled (although the
     * <b>UserDeliveryPreferenceArray</b> input property specifies specific notification subscriptions).
     * - minOccurs: 0
     * @var \StructType\ApplicationDeliveryPreferencesType
     */
    public $ApplicationDeliveryPreferences;
    /**
     * The UserDeliveryPreferenceArray
     * Meta information extracted from the WSDL
     * - documentation: Specifies events and whether or not they are enabled.
     * - minOccurs: 0
     * @var \ArrayType\NotificationEnableArrayType
     */
    public $UserDeliveryPreferenceArray;
    /**
     * The UserData
     * Meta information extracted from the WSDL
     * - documentation: Specifies user data for notification settings, such as mobile phone number.
     * - minOccurs: 0
     * @var \StructType\NotificationUserDataType
     */
    public $UserData;
    /**
     * The EventProperty
     * Meta information extracted from the WSDL
     * - documentation: Characteristics or details of an event such as type, name and value. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NotificationEventPropertyType[]
     */
    public $EventProperty;
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of
     * ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * Constructor method for SetNotificationPreferencesRequestType
     * @uses SetNotificationPreferencesRequestType::setApplicationDeliveryPreferences()
     * @uses SetNotificationPreferencesRequestType::setUserDeliveryPreferenceArray()
     * @uses SetNotificationPreferencesRequestType::setUserData()
     * @uses SetNotificationPreferencesRequestType::setEventProperty()
     * @uses SetNotificationPreferencesRequestType::setDeliveryURLName()
     * @param \StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @param \ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @param \StructType\NotificationUserDataType $userData
     * @param \StructType\NotificationEventPropertyType[] $eventProperty
     * @param string $deliveryURLName
     */
    public function __construct(\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, \ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, \StructType\NotificationUserDataType $userData = null, array $eventProperty = array(), $deliveryURLName = null)
    {
        $this
            ->setApplicationDeliveryPreferences($applicationDeliveryPreferences)
            ->setUserDeliveryPreferenceArray($userDeliveryPreferenceArray)
            ->setUserData($userData)
            ->setEventProperty($eventProperty)
            ->setDeliveryURLName($deliveryURLName);
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
     * @return \StructType\SetNotificationPreferencesRequestType
     */
    public function setApplicationDeliveryPreferences(\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null)
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
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
     * @return \StructType\SetNotificationPreferencesRequestType
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
     * @return \StructType\SetNotificationPreferencesRequestType
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
        foreach ($values as $setNotificationPreferencesRequestTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$setNotificationPreferencesRequestTypeEventPropertyItem instanceof \StructType\NotificationEventPropertyType) {
                $invalidValues[] = is_object($setNotificationPreferencesRequestTypeEventPropertyItem) ? get_class($setNotificationPreferencesRequestTypeEventPropertyItem) : sprintf('%s(%s)', gettype($setNotificationPreferencesRequestTypeEventPropertyItem), var_export($setNotificationPreferencesRequestTypeEventPropertyItem, true));
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
     * @return \StructType\SetNotificationPreferencesRequestType
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
     * @return \StructType\SetNotificationPreferencesRequestType
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
     * @return \StructType\SetNotificationPreferencesRequestType
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
}
