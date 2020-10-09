<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
    /**
     * The BuyingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     * - minOccurs: 0
     * @var \StructType\ReminderCustomizationType
     */
    public $BuyingReminders;
    /**
     * The SellingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     * - minOccurs: 0
     * @var \StructType\ReminderCustomizationType
     */
    public $SellingReminders;
    /**
     * Constructor method for GetMyeBayRemindersRequestType
     * @uses GetMyeBayRemindersRequestType::setBuyingReminders()
     * @uses GetMyeBayRemindersRequestType::setSellingReminders()
     * @param \StructType\ReminderCustomizationType $buyingReminders
     * @param \StructType\ReminderCustomizationType $sellingReminders
     */
    public function __construct(\StructType\ReminderCustomizationType $buyingReminders = null, \StructType\ReminderCustomizationType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \StructType\ReminderCustomizationType|null
     */
    public function getBuyingReminders()
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \StructType\ReminderCustomizationType $buyingReminders
     * @return \StructType\GetMyeBayRemindersRequestType
     */
    public function setBuyingReminders(\StructType\ReminderCustomizationType $buyingReminders = null)
    {
        $this->BuyingReminders = $buyingReminders;
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \StructType\ReminderCustomizationType|null
     */
    public function getSellingReminders()
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \StructType\ReminderCustomizationType $sellingReminders
     * @return \StructType\GetMyeBayRemindersRequestType
     */
    public function setSellingReminders(\StructType\ReminderCustomizationType $sellingReminders = null)
    {
        $this->SellingReminders = $sellingReminders;
        return $this;
    }
}
