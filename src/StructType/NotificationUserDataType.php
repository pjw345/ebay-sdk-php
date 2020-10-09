<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationUserDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: User data related to notifications.
 * @subpackage Structs
 */
class NotificationUserDataType extends AbstractStructBase
{
    /**
     * The SMSSubscription
     * Meta information extracted from the WSDL
     * - documentation: User data related to SMS notifications. SMS is currently reserved for future use.
     * - minOccurs: 0
     * @var \StructType\SMSSubscriptionType
     */
    public $SMSSubscription;
    /**
     * The SummarySchedule
     * Meta information extracted from the WSDL
     * - documentation: User account activity summary alert delivery schedule. Returned if PreferenceLevel is set to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for instructions on "Informational Alerts".
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SummaryEventScheduleType[]
     */
    public $SummarySchedule;
    /**
     * The ExternalUserData
     * Meta information extracted from the WSDL
     * - documentation: An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned in the notification payload. The string can contain user-specific information to identify a
     * particular user. Any sensitive information should be passed with due caution and proper encryption.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalUserData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationUserDataType
     * @uses NotificationUserDataType::setSMSSubscription()
     * @uses NotificationUserDataType::setSummarySchedule()
     * @uses NotificationUserDataType::setExternalUserData()
     * @uses NotificationUserDataType::setAny()
     * @param \StructType\SMSSubscriptionType $sMSSubscription
     * @param \StructType\SummaryEventScheduleType[] $summarySchedule
     * @param string $externalUserData
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\SMSSubscriptionType $sMSSubscription = null, array $summarySchedule = array(), $externalUserData = null, \DOMDocument $any = null)
    {
        $this
            ->setSMSSubscription($sMSSubscription)
            ->setSummarySchedule($summarySchedule)
            ->setExternalUserData($externalUserData)
            ->setAny($any);
    }
    /**
     * Get SMSSubscription value
     * @return \StructType\SMSSubscriptionType|null
     */
    public function getSMSSubscription()
    {
        return $this->SMSSubscription;
    }
    /**
     * Set SMSSubscription value
     * @param \StructType\SMSSubscriptionType $sMSSubscription
     * @return \StructType\NotificationUserDataType
     */
    public function setSMSSubscription(\StructType\SMSSubscriptionType $sMSSubscription = null)
    {
        $this->SMSSubscription = $sMSSubscription;
        return $this;
    }
    /**
     * Get SummarySchedule value
     * @return \StructType\SummaryEventScheduleType[]|null
     */
    public function getSummarySchedule()
    {
        return $this->SummarySchedule;
    }
    /**
     * This method is responsible for validating the values passed to the setSummarySchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSummarySchedule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSummaryScheduleForArrayConstraintsFromSetSummarySchedule(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationUserDataTypeSummaryScheduleItem) {
            // validation for constraint: itemType
            if (!$notificationUserDataTypeSummaryScheduleItem instanceof \StructType\SummaryEventScheduleType) {
                $invalidValues[] = is_object($notificationUserDataTypeSummaryScheduleItem) ? get_class($notificationUserDataTypeSummaryScheduleItem) : sprintf('%s(%s)', gettype($notificationUserDataTypeSummaryScheduleItem), var_export($notificationUserDataTypeSummaryScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SummarySchedule property can only contain items of type \StructType\SummaryEventScheduleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SummarySchedule value
     * @throws \InvalidArgumentException
     * @param \StructType\SummaryEventScheduleType[] $summarySchedule
     * @return \StructType\NotificationUserDataType
     */
    public function setSummarySchedule(array $summarySchedule = array())
    {
        // validation for constraint: array
        if ('' !== ($summaryScheduleArrayErrorMessage = self::validateSummaryScheduleForArrayConstraintsFromSetSummarySchedule($summarySchedule))) {
            throw new \InvalidArgumentException($summaryScheduleArrayErrorMessage, __LINE__);
        }
        $this->SummarySchedule = $summarySchedule;
        return $this;
    }
    /**
     * Add item to SummarySchedule value
     * @throws \InvalidArgumentException
     * @param \StructType\SummaryEventScheduleType $item
     * @return \StructType\NotificationUserDataType
     */
    public function addToSummarySchedule(\StructType\SummaryEventScheduleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SummaryEventScheduleType) {
            throw new \InvalidArgumentException(sprintf('The SummarySchedule property can only contain items of type \StructType\SummaryEventScheduleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SummarySchedule[] = $item;
        return $this;
    }
    /**
     * Get ExternalUserData value
     * @return string|null
     */
    public function getExternalUserData()
    {
        return $this->ExternalUserData;
    }
    /**
     * Set ExternalUserData value
     * @param string $externalUserData
     * @return \StructType\NotificationUserDataType
     */
    public function setExternalUserData($externalUserData = null)
    {
        // validation for constraint: string
        if (!is_null($externalUserData) && !is_string($externalUserData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalUserData, true), gettype($externalUserData)), __LINE__);
        }
        $this->ExternalUserData = $externalUserData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\NotificationUserDataType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
