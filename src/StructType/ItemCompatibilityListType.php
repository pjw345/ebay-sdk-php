<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of compatible applications specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., parts compatibility by application). For example, to specify a part's compatibility with a vehicle, the
 * name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would desribe the specific vehicle, such as a 2006 Honda Accord.
 * @subpackage Structs
 */
class ItemCompatibilityListType extends AbstractStructBase
{
    /**
     * The Compatibility
     * Meta information extracted from the WSDL
     * - documentation: Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility
     * nodes. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For the <b>GetItem</b> call, <strong>Compatibility</strong> includes only parts compatibility details that were specified manually; that is, they do not correspond to an eBay catalog
     * product. To retrieve parts compatibility details that <em>do</em> correspond to eBay catalog products, use the eBay Product API's <b>getProductCompatibilities</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemCompatibilityType[]
     */
    public $Compatibility;
    /**
     * The ReplaceAll
     * Meta information extracted from the WSDL
     * - documentation: Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item
     * compatibilities are specified in the request, they replace the removed compatibilities. <br/><br/> <span class="tablenote"> <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility
     * list if the listing has bids or if the auction ends within 12 hours. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $ReplaceAll;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityListType
     * @uses ItemCompatibilityListType::setCompatibility()
     * @uses ItemCompatibilityListType::setReplaceAll()
     * @uses ItemCompatibilityListType::setAny()
     * @param \StructType\ItemCompatibilityType[] $compatibility
     * @param bool $replaceAll
     * @param \DOMDocument $any
     */
    public function __construct(array $compatibility = array(), $replaceAll = null, \DOMDocument $any = null)
    {
        $this
            ->setCompatibility($compatibility)
            ->setReplaceAll($replaceAll)
            ->setAny($any);
    }
    /**
     * Get Compatibility value
     * @return \StructType\ItemCompatibilityType[]|null
     */
    public function getCompatibility()
    {
        return $this->Compatibility;
    }
    /**
     * This method is responsible for validating the values passed to the setCompatibility method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompatibility method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompatibilityForArrayConstraintsFromSetCompatibility(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemCompatibilityListTypeCompatibilityItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityListTypeCompatibilityItem instanceof \StructType\ItemCompatibilityType) {
                $invalidValues[] = is_object($itemCompatibilityListTypeCompatibilityItem) ? get_class($itemCompatibilityListTypeCompatibilityItem) : sprintf('%s(%s)', gettype($itemCompatibilityListTypeCompatibilityItem), var_export($itemCompatibilityListTypeCompatibilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compatibility property can only contain items of type \StructType\ItemCompatibilityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Compatibility value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemCompatibilityType[] $compatibility
     * @return \StructType\ItemCompatibilityListType
     */
    public function setCompatibility(array $compatibility = array())
    {
        // validation for constraint: array
        if ('' !== ($compatibilityArrayErrorMessage = self::validateCompatibilityForArrayConstraintsFromSetCompatibility($compatibility))) {
            throw new \InvalidArgumentException($compatibilityArrayErrorMessage, __LINE__);
        }
        $this->Compatibility = $compatibility;
        return $this;
    }
    /**
     * Add item to Compatibility value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemCompatibilityType $item
     * @return \StructType\ItemCompatibilityListType
     */
    public function addToCompatibility(\StructType\ItemCompatibilityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemCompatibilityType) {
            throw new \InvalidArgumentException(sprintf('The Compatibility property can only contain items of type \StructType\ItemCompatibilityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compatibility[] = $item;
        return $this;
    }
    /**
     * Get ReplaceAll value
     * @return bool|null
     */
    public function getReplaceAll()
    {
        return $this->ReplaceAll;
    }
    /**
     * Set ReplaceAll value
     * @param bool $replaceAll
     * @return \StructType\ItemCompatibilityListType
     */
    public function setReplaceAll($replaceAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($replaceAll) && !is_bool($replaceAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replaceAll, true), gettype($replaceAll)), __LINE__);
        }
        $this->ReplaceAll = $replaceAll;
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
     * @return \StructType\ItemCompatibilityListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
