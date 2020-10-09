<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetadataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>Metadata</b> container to provide price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items.
 * @subpackage Structs
 */
class MetadataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the price guidance parameter is returned in this field. Any of the following price guidance parameters may be returned in a <b>Metadata</b> container: <ul> <li><b>AppliesTo</b>: this parameter indicates the type of
     * listing that the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values pertain to. The corresponding <b>value</b> values that can be returned with the <b>AppliesTo</b> parameter is 'Auction' and 'FixedPrice'. </li> <li><b>Currency</b>:
     * this parameter indicates the type of currency being used for the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values. The currency values (returned in corresponding <b>value</b> field) are based on the currency codes defined in the <a
     * href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard. </li> <li><b>MaxRecommendedValue</b>: this parameter indicates the upper end of the recommended price range for the item. Based on the recent sales
     * of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li> <li><b>MinRecommendedValue</b>: this parameter
     * indicates the lower end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is
     * returned in the corresponding <b>value</b> field. </li> <li><b>SimilarItems</b>: this parameter and its corresponding <b>value</b> values indicates which eBay item listings were used to determine the <b>MinRecommendedValue</b> and
     * <b>MaxRecommendedValue</b> values. The values returned in the <b>value</b> fields are Item IDs.</li> </ul>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the
     * <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b>
     * and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MetadataType
     * @uses MetadataType::setName()
     * @uses MetadataType::setValue()
     * @uses MetadataType::setAny()
     * @param string $name
     * @param string[] $value
     * @param \DOMDocument $any
     */
    public function __construct($name = null, array $value = array(), \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\MetadataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Value value
     * @return string[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $metadataTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($metadataTypeValueItem)) {
                $invalidValues[] = is_object($metadataTypeValueItem) ? get_class($metadataTypeValueItem) : sprintf('%s(%s)', gettype($metadataTypeValueItem), var_export($metadataTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \StructType\MetadataType
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\MetadataType
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
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
     * @return \StructType\MetadataType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
