<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharityAffiliationsType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CharityIDType[]
     */
    public $CharityID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityAffiliationsType
     * @uses CharityAffiliationsType::setCharityID()
     * @uses CharityAffiliationsType::setAny()
     * @param \StructType\CharityIDType[] $charityID
     * @param \DOMDocument $any
     */
    public function __construct(array $charityID = array(), \DOMDocument $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return \StructType\CharityIDType[]|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityIDForArrayConstraintsFromSetCharityID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityAffiliationsTypeCharityIDItem) {
            // validation for constraint: itemType
            if (!$charityAffiliationsTypeCharityIDItem instanceof \StructType\CharityIDType) {
                $invalidValues[] = is_object($charityAffiliationsTypeCharityIDItem) ? get_class($charityAffiliationsTypeCharityIDItem) : sprintf('%s(%s)', gettype($charityAffiliationsTypeCharityIDItem), var_export($charityAffiliationsTypeCharityIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityID property can only contain items of type \StructType\CharityIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CharityID value
     * @throws \InvalidArgumentException
     * @param \StructType\CharityIDType[] $charityID
     * @return \StructType\CharityAffiliationsType
     */
    public function setCharityID(array $charityID = array())
    {
        // validation for constraint: array
        if ('' !== ($charityIDArrayErrorMessage = self::validateCharityIDForArrayConstraintsFromSetCharityID($charityID))) {
            throw new \InvalidArgumentException($charityIDArrayErrorMessage, __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Add item to CharityID value
     * @throws \InvalidArgumentException
     * @param \StructType\CharityIDType $item
     * @return \StructType\CharityAffiliationsType
     */
    public function addToCharityID(\StructType\CharityIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CharityIDType) {
            throw new \InvalidArgumentException(sprintf('The CharityID property can only contain items of type \StructType\CharityIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharityID[] = $item;
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
     * @return \StructType\CharityAffiliationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
