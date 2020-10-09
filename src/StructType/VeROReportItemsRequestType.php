<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reports items that allegedly infringe your copyright, trademark, or other intellectual property rights. You can report one or more items at a time with this call. You must be a member of the Verified Rights Owner (VeRO) Program to
 * use this call.
 * @subpackage Structs
 */
class VeROReportItemsRequestType extends AbstractRequestType
{
    /**
     * The RightsOwnerID
     * Meta information extracted from the WSDL
     * - documentation: User ID of the VeRO member reporting the items. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $RightsOwnerID;
    /**
     * The ReportItems
     * Meta information extracted from the WSDL
     * - documentation: Container (packet) for items being reported. You can report the same item more than once in a packet if a different reason code is used each time.
     * - minOccurs: 0
     * @var \StructType\VeROReportItemsType
     */
    public $ReportItems;
    /**
     * Constructor method for VeROReportItemsRequestType
     * @uses VeROReportItemsRequestType::setRightsOwnerID()
     * @uses VeROReportItemsRequestType::setReportItems()
     * @param string $rightsOwnerID
     * @param \StructType\VeROReportItemsType $reportItems
     */
    public function __construct($rightsOwnerID = null, \StructType\VeROReportItemsType $reportItems = null)
    {
        $this
            ->setRightsOwnerID($rightsOwnerID)
            ->setReportItems($reportItems);
    }
    /**
     * Get RightsOwnerID value
     * @return string|null
     */
    public function getRightsOwnerID()
    {
        return $this->RightsOwnerID;
    }
    /**
     * Set RightsOwnerID value
     * @param string $rightsOwnerID
     * @return \StructType\VeROReportItemsRequestType
     */
    public function setRightsOwnerID($rightsOwnerID = null)
    {
        // validation for constraint: string
        if (!is_null($rightsOwnerID) && !is_string($rightsOwnerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightsOwnerID, true), gettype($rightsOwnerID)), __LINE__);
        }
        $this->RightsOwnerID = $rightsOwnerID;
        return $this;
    }
    /**
     * Get ReportItems value
     * @return \StructType\VeROReportItemsType|null
     */
    public function getReportItems()
    {
        return $this->ReportItems;
    }
    /**
     * Set ReportItems value
     * @param \StructType\VeROReportItemsType $reportItems
     * @return \StructType\VeROReportItemsRequestType
     */
    public function setReportItems(\StructType\VeROReportItemsType $reportItems = null)
    {
        $this->ReportItems = $reportItems;
        return $this;
    }
}
