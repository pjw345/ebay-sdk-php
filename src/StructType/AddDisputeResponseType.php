<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the response of the <b>AddDispute</b> call. Upon a successful call, the response contains a newly created <b>DisputeID</b> value, which confirms that an Unpaid Item case was created, or that a single line item order was
 * successfully cancelled.
 * @subpackage Structs
 */
class AddDisputeResponseType extends AbstractResponseType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: This field will show the unique identifier of an Unpaid Item case that was created, or the unique identifier of the order cancellation. | The unique identifier of a dispute between a buyer and seller regarding an order. <br/><br/>
     * <span class="tablenote"><strong>Note:</strong> The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
     * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * Constructor method for AddDisputeResponseType
     * @uses AddDisputeResponseType::setDisputeID()
     * @param string $disputeID
     */
    public function __construct($disputeID = null)
    {
        $this
            ->setDisputeID($disputeID);
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
     * @return \StructType\AddDisputeResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddDisputeResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
