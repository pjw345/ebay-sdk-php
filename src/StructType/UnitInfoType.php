<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare
 * prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * @subpackage Structs
 */
class UnitInfoType extends AbstractStructBase
{
    /**
     * The UnitType
     * Meta information extracted from the WSDL
     * - documentation: Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following: <br/> <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre> With <b>GetItem</b>, this field is
     * returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var string
     */
    public $UnitType;
    /**
     * The UnitQuantity
     * Meta information extracted from the WSDL
     * - documentation: Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes. <br/><br/>
     * With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var float
     */
    public $UnitQuantity;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnitInfoType
     * @uses UnitInfoType::setUnitType()
     * @uses UnitInfoType::setUnitQuantity()
     * @uses UnitInfoType::setAny()
     * @param string $unitType
     * @param float $unitQuantity
     * @param \DOMDocument $any
     */
    public function __construct($unitType = null, $unitQuantity = null, \DOMDocument $any = null)
    {
        $this
            ->setUnitType($unitType)
            ->setUnitQuantity($unitQuantity)
            ->setAny($any);
    }
    /**
     * Get UnitType value
     * @return string|null
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }
    /**
     * Set UnitType value
     * @param string $unitType
     * @return \StructType\UnitInfoType
     */
    public function setUnitType($unitType = null)
    {
        // validation for constraint: string
        if (!is_null($unitType) && !is_string($unitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitType, true), gettype($unitType)), __LINE__);
        }
        $this->UnitType = $unitType;
        return $this;
    }
    /**
     * Get UnitQuantity value
     * @return float|null
     */
    public function getUnitQuantity()
    {
        return $this->UnitQuantity;
    }
    /**
     * Set UnitQuantity value
     * @param float $unitQuantity
     * @return \StructType\UnitInfoType
     */
    public function setUnitQuantity($unitQuantity = null)
    {
        // validation for constraint: float
        if (!is_null($unitQuantity) && !(is_float($unitQuantity) || is_numeric($unitQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitQuantity, true), gettype($unitQuantity)), __LINE__);
        }
        $this->UnitQuantity = $unitQuantity;
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
     * @return \StructType\UnitInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
