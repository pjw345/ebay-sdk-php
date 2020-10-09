<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for DisputeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b> call. The <b>DisputeArray</b> container holds an array of one or more disputes that match the filter criteria in the call
 * request. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Arrays
 */
class DisputeArrayType extends AbstractStructArrayBase
{
    /**
     * The Dispute
     * Meta information extracted from the WSDL
     * - documentation: The information that describes a dispute, including the buyer's name, the transaction ID, the dispute state and status, whether the dispute is resolved, and any messages posted to the dispute.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisputeType[]
     */
    public $Dispute;
    /**
     * Constructor method for DisputeArrayType
     * @uses DisputeArrayType::setDispute()
     * @param \StructType\DisputeType[] $dispute
     */
    public function __construct(array $dispute = array())
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \StructType\DisputeType[]|null
     */
    public function getDispute()
    {
        return $this->Dispute;
    }
    /**
     * This method is responsible for validating the values passed to the setDispute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDispute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeForArrayConstraintsFromSetDispute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disputeArrayTypeDisputeItem) {
            // validation for constraint: itemType
            if (!$disputeArrayTypeDisputeItem instanceof \StructType\DisputeType) {
                $invalidValues[] = is_object($disputeArrayTypeDisputeItem) ? get_class($disputeArrayTypeDisputeItem) : sprintf('%s(%s)', gettype($disputeArrayTypeDisputeItem), var_export($disputeArrayTypeDisputeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dispute property can only contain items of type \StructType\DisputeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Dispute value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeType[] $dispute
     * @return \ArrayType\DisputeArrayType
     */
    public function setDispute(array $dispute = array())
    {
        // validation for constraint: array
        if ('' !== ($disputeArrayErrorMessage = self::validateDisputeForArrayConstraintsFromSetDispute($dispute))) {
            throw new \InvalidArgumentException($disputeArrayErrorMessage, __LINE__);
        }
        $this->Dispute = $dispute;
        return $this;
    }
    /**
     * Add item to Dispute value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeType $item
     * @return \ArrayType\DisputeArrayType
     */
    public function addToDispute(\StructType\DisputeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisputeType) {
            throw new \InvalidArgumentException(sprintf('The Dispute property can only contain items of type \StructType\DisputeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Dispute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DisputeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DisputeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DisputeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DisputeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DisputeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Dispute
     */
    public function getAttributeName()
    {
        return 'Dispute';
    }
}
