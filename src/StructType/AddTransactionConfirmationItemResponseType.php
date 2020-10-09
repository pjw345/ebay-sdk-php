<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTransactionConfirmationItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>AddTransactionConfirmationItem</b> call.
 * @subpackage Structs
 */
class AddTransactionConfirmationItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field contains the Item ID associated with the Transaction Confirmation Item that was just created with the <b>AddTransactionConfirmationItem</b> call. This field is not returned if the request was only used to verify that a new
     * TCR could be created. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Transaction Confirmation Item became available to the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Transaction Confirmation Item will no longer be available for purchase.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for AddTransactionConfirmationItemResponseType
     * @uses AddTransactionConfirmationItemResponseType::setItemID()
     * @uses AddTransactionConfirmationItemResponseType::setStartTime()
     * @uses AddTransactionConfirmationItemResponseType::setEndTime()
     * @param string $itemID
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($itemID = null, $startTime = null, $endTime = null)
    {
        $this
            ->setItemID($itemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\AddTransactionConfirmationItemResponseType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\AddTransactionConfirmationItemResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\AddTransactionConfirmationItemResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
}
