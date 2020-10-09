<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBiddersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetAllBidders</b> call, which is used to retrieve bidders from an active or recently-ended auction listing.
 * @subpackage Structs
 */
class GetAllBiddersRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b>
     * enumeration value that can be used is <code>ViewAll</code>. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The CallMode
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve
     * bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $CallMode;
    /**
     * The IncludeBiddingSummary
     * Meta information extracted from the WSDL
     * - documentation: The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding
     * information on each bidder.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeBiddingSummary;
    /**
     * Constructor method for GetAllBiddersRequestType
     * @uses GetAllBiddersRequestType::setItemID()
     * @uses GetAllBiddersRequestType::setCallMode()
     * @uses GetAllBiddersRequestType::setIncludeBiddingSummary()
     * @param string $itemID
     * @param string $callMode
     * @param bool $includeBiddingSummary
     */
    public function __construct($itemID = null, $callMode = null, $includeBiddingSummary = null)
    {
        $this
            ->setItemID($itemID)
            ->setCallMode($callMode)
            ->setIncludeBiddingSummary($includeBiddingSummary);
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
     * @return \StructType\GetAllBiddersRequestType
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
     * Get CallMode value
     * @return string|null
     */
    public function getCallMode()
    {
        return $this->CallMode;
    }
    /**
     * Set CallMode value
     * @uses \EnumType\GetAllBiddersModeCodeType::valueIsValid()
     * @uses \EnumType\GetAllBiddersModeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $callMode
     * @return \StructType\GetAllBiddersRequestType
     */
    public function setCallMode($callMode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GetAllBiddersModeCodeType::valueIsValid($callMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GetAllBiddersModeCodeType', is_array($callMode) ? implode(', ', $callMode) : var_export($callMode, true), implode(', ', \EnumType\GetAllBiddersModeCodeType::getValidValues())), __LINE__);
        }
        $this->CallMode = $callMode;
        return $this;
    }
    /**
     * Get IncludeBiddingSummary value
     * @return bool|null
     */
    public function getIncludeBiddingSummary()
    {
        return $this->IncludeBiddingSummary;
    }
    /**
     * Set IncludeBiddingSummary value
     * @param bool $includeBiddingSummary
     * @return \StructType\GetAllBiddersRequestType
     */
    public function setIncludeBiddingSummary($includeBiddingSummary = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeBiddingSummary) && !is_bool($includeBiddingSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeBiddingSummary, true), gettype($includeBiddingSummary)), __LINE__);
        }
        $this->IncludeBiddingSummary = $includeBiddingSummary;
        return $this;
    }
}
