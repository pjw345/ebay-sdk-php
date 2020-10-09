<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupType extends AbstractStructBase
{
    /**
     * The BidGroupItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BidGroupItemType[]
     */
    public $BidGroupItem;
    /**
     * The BidGroupID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidGroupID;
    /**
     * The BidGroupName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupName;
    /**
     * The BidGroupStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidGroupType
     * @uses BidGroupType::setBidGroupItem()
     * @uses BidGroupType::setBidGroupID()
     * @uses BidGroupType::setBidGroupName()
     * @uses BidGroupType::setBidGroupStatus()
     * @uses BidGroupType::setAny()
     * @param \StructType\BidGroupItemType[] $bidGroupItem
     * @param int $bidGroupID
     * @param string $bidGroupName
     * @param string $bidGroupStatus
     * @param \DOMDocument $any
     */
    public function __construct(array $bidGroupItem = array(), $bidGroupID = null, $bidGroupName = null, $bidGroupStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setBidGroupItem($bidGroupItem)
            ->setBidGroupID($bidGroupID)
            ->setBidGroupName($bidGroupName)
            ->setBidGroupStatus($bidGroupStatus)
            ->setAny($any);
    }
    /**
     * Get BidGroupItem value
     * @return \StructType\BidGroupItemType[]|null
     */
    public function getBidGroupItem()
    {
        return $this->BidGroupItem;
    }
    /**
     * This method is responsible for validating the values passed to the setBidGroupItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidGroupItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidGroupItemForArrayConstraintsFromSetBidGroupItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidGroupTypeBidGroupItemItem) {
            // validation for constraint: itemType
            if (!$bidGroupTypeBidGroupItemItem instanceof \StructType\BidGroupItemType) {
                $invalidValues[] = is_object($bidGroupTypeBidGroupItemItem) ? get_class($bidGroupTypeBidGroupItemItem) : sprintf('%s(%s)', gettype($bidGroupTypeBidGroupItemItem), var_export($bidGroupTypeBidGroupItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidGroupItem property can only contain items of type \StructType\BidGroupItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BidGroupItem value
     * @throws \InvalidArgumentException
     * @param \StructType\BidGroupItemType[] $bidGroupItem
     * @return \StructType\BidGroupType
     */
    public function setBidGroupItem(array $bidGroupItem = array())
    {
        // validation for constraint: array
        if ('' !== ($bidGroupItemArrayErrorMessage = self::validateBidGroupItemForArrayConstraintsFromSetBidGroupItem($bidGroupItem))) {
            throw new \InvalidArgumentException($bidGroupItemArrayErrorMessage, __LINE__);
        }
        $this->BidGroupItem = $bidGroupItem;
        return $this;
    }
    /**
     * Add item to BidGroupItem value
     * @throws \InvalidArgumentException
     * @param \StructType\BidGroupItemType $item
     * @return \StructType\BidGroupType
     */
    public function addToBidGroupItem(\StructType\BidGroupItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BidGroupItemType) {
            throw new \InvalidArgumentException(sprintf('The BidGroupItem property can only contain items of type \StructType\BidGroupItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidGroupItem[] = $item;
        return $this;
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID()
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \StructType\BidGroupType
     */
    public function setBidGroupID($bidGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !(is_int($bidGroupID) || ctype_digit($bidGroupID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidGroupID, true), gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        return $this;
    }
    /**
     * Get BidGroupName value
     * @return string|null
     */
    public function getBidGroupName()
    {
        return $this->BidGroupName;
    }
    /**
     * Set BidGroupName value
     * @param string $bidGroupName
     * @return \StructType\BidGroupType
     */
    public function setBidGroupName($bidGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($bidGroupName) && !is_string($bidGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bidGroupName, true), gettype($bidGroupName)), __LINE__);
        }
        $this->BidGroupName = $bidGroupName;
        return $this;
    }
    /**
     * Get BidGroupStatus value
     * @return string|null
     */
    public function getBidGroupStatus()
    {
        return $this->BidGroupStatus;
    }
    /**
     * Set BidGroupStatus value
     * @uses \EnumType\BidGroupStatusCodeType::valueIsValid()
     * @uses \EnumType\BidGroupStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bidGroupStatus
     * @return \StructType\BidGroupType
     */
    public function setBidGroupStatus($bidGroupStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BidGroupStatusCodeType::valueIsValid($bidGroupStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BidGroupStatusCodeType', is_array($bidGroupStatus) ? implode(', ', $bidGroupStatus) : var_export($bidGroupStatus, true), implode(', ', \EnumType\BidGroupStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupStatus = $bidGroupStatus;
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
     * @return \StructType\BidGroupType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
