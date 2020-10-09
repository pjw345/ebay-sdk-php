<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NotificationEnableArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>UserDeliveryPreferenceArray</b> container of the <b>SetNotificationPreferences</b> and <b>GetNotificationPreferences</b> calls. The <b>UserDeliveryPreferenceArray</b> container consists of one or more
 * notifications and whether or not each notification is enabled or disabled.
 * @subpackage Arrays
 */
class NotificationEnableArrayType extends AbstractStructArrayBase
{
    /**
     * The NotificationEnable
     * Meta information extracted from the WSDL
     * - documentation: In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable. <br><br> If a <b>UserDeliveryPreferenceArray</b> container is
     * used, at least one <b>NotificationEnable</b> container must be specified. <br><br> In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled
     * or disabled.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NotificationEnableType[]
     */
    public $NotificationEnable;
    /**
     * Constructor method for NotificationEnableArrayType
     * @uses NotificationEnableArrayType::setNotificationEnable()
     * @param \StructType\NotificationEnableType[] $notificationEnable
     */
    public function __construct(array $notificationEnable = array())
    {
        $this
            ->setNotificationEnable($notificationEnable);
    }
    /**
     * Get NotificationEnable value
     * @return \StructType\NotificationEnableType[]|null
     */
    public function getNotificationEnable()
    {
        return $this->NotificationEnable;
    }
    /**
     * This method is responsible for validating the values passed to the setNotificationEnable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationEnable method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationEnableForArrayConstraintsFromSetNotificationEnable(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationEnableArrayTypeNotificationEnableItem) {
            // validation for constraint: itemType
            if (!$notificationEnableArrayTypeNotificationEnableItem instanceof \StructType\NotificationEnableType) {
                $invalidValues[] = is_object($notificationEnableArrayTypeNotificationEnableItem) ? get_class($notificationEnableArrayTypeNotificationEnableItem) : sprintf('%s(%s)', gettype($notificationEnableArrayTypeNotificationEnableItem), var_export($notificationEnableArrayTypeNotificationEnableItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotificationEnable property can only contain items of type \StructType\NotificationEnableType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NotificationEnable value
     * @throws \InvalidArgumentException
     * @param \StructType\NotificationEnableType[] $notificationEnable
     * @return \ArrayType\NotificationEnableArrayType
     */
    public function setNotificationEnable(array $notificationEnable = array())
    {
        // validation for constraint: array
        if ('' !== ($notificationEnableArrayErrorMessage = self::validateNotificationEnableForArrayConstraintsFromSetNotificationEnable($notificationEnable))) {
            throw new \InvalidArgumentException($notificationEnableArrayErrorMessage, __LINE__);
        }
        $this->NotificationEnable = $notificationEnable;
        return $this;
    }
    /**
     * Add item to NotificationEnable value
     * @throws \InvalidArgumentException
     * @param \StructType\NotificationEnableType $item
     * @return \ArrayType\NotificationEnableArrayType
     */
    public function addToNotificationEnable(\StructType\NotificationEnableType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NotificationEnableType) {
            throw new \InvalidArgumentException(sprintf('The NotificationEnable property can only contain items of type \StructType\NotificationEnableType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NotificationEnable[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\NotificationEnableType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\NotificationEnableType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\NotificationEnableType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\NotificationEnableType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\NotificationEnableType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationEnable
     */
    public function getAttributeName()
    {
        return 'NotificationEnable';
    }
}
