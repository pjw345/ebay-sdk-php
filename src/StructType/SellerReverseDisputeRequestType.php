<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to "reverse" an Unpaid Item dispute that has been closed in case the buyer and seller are able to reach a mutual agreement. If this action is successful, the seller receives a Final Value Fee credit and the buyer's
 * Unpaid Item strike are both reversed, if applicable. The dispute might have resulted in a strike to the buyer and a Final Value Fee credit to the seller. A buyer and seller sometimes come to agreement after a dispute has been closed. In particular,
 * the seller might discover that the buyer actually paid, or the buyer might agree to pay the seller's fees in exchange for having the strike removed. <br><br> A dispute can only be reversed if it was closed with <b>DisputeActivity</b> set to
 * <b>SellerEndCommunication</b>, <b>CameToAgreementNeedFVFCredit</b>, or <b>MutualAgreementOrNoBuyerResponse</b>.
 * @subpackage Structs
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the dispute that was returned when the dispute was created. The dispute must be an Unpaid Item dispute that the seller opened. | The unique identifier of a dispute between a buyer and seller regarding an
     * order. <br/><br/> <span class="tablenote"><strong>Note:</strong> The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee
     * program. The <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The DisputeResolutionReason
     * Meta information extracted from the WSDL
     * - documentation: The reason the dispute is being reversed.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionReason;
    /**
     * Constructor method for SellerReverseDisputeRequestType
     * @uses SellerReverseDisputeRequestType::setDisputeID()
     * @uses SellerReverseDisputeRequestType::setDisputeResolutionReason()
     * @param string $disputeID
     * @param string $disputeResolutionReason
     */
    public function __construct($disputeID = null, $disputeResolutionReason = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeResolutionReason($disputeResolutionReason);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeID, true), gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason()
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeResolutionReason($disputeResolutionReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeResolutionReasonCodeType', is_array($disputeResolutionReason) ? implode(', ', $disputeResolutionReason) : var_export($disputeResolutionReason, true), implode(', ', \EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        return $this;
    }
}
