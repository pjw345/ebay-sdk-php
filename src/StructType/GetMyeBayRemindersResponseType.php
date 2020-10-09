<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{
    /**
     * The BuyingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying
     * Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \StructType\RemindersType
     */
    public $BuyingReminders;
    /**
     * The SellingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling
     * Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \StructType\RemindersType
     */
    public $SellingReminders;
    /**
     * Constructor method for GetMyeBayRemindersResponseType
     * @uses GetMyeBayRemindersResponseType::setBuyingReminders()
     * @uses GetMyeBayRemindersResponseType::setSellingReminders()
     * @param \StructType\RemindersType $buyingReminders
     * @param \StructType\RemindersType $sellingReminders
     */
    public function __construct(\StructType\RemindersType $buyingReminders = null, \StructType\RemindersType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \StructType\RemindersType|null
     */
    public function getBuyingReminders()
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \StructType\RemindersType $buyingReminders
     * @return \StructType\GetMyeBayRemindersResponseType
     */
    public function setBuyingReminders(\StructType\RemindersType $buyingReminders = null)
    {
        $this->BuyingReminders = $buyingReminders;
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \StructType\RemindersType|null
     */
    public function getSellingReminders()
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \StructType\RemindersType $sellingReminders
     * @return \StructType\GetMyeBayRemindersResponseType
     */
    public function setSellingReminders(\StructType\RemindersType $sellingReminders = null)
    {
        $this->SellingReminders = $sellingReminders;
        return $this;
    }
}
