<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipFieldType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipFieldType extends AbstractStructBase
{
    /**
     * The ListingTipFieldID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipFieldID;
    /**
     * The FieldTip
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FieldTip;
    /**
     * The CurrentFieldText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CurrentFieldText;
    /**
     * The CurrentFieldValue
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CurrentFieldValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipFieldType
     * @uses ListingTipFieldType::setListingTipFieldID()
     * @uses ListingTipFieldType::setFieldTip()
     * @uses ListingTipFieldType::setCurrentFieldText()
     * @uses ListingTipFieldType::setCurrentFieldValue()
     * @uses ListingTipFieldType::setAny()
     * @param string $listingTipFieldID
     * @param string $fieldTip
     * @param string $currentFieldText
     * @param string $currentFieldValue
     * @param \DOMDocument $any
     */
    public function __construct($listingTipFieldID = null, $fieldTip = null, $currentFieldText = null, $currentFieldValue = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipFieldID($listingTipFieldID)
            ->setFieldTip($fieldTip)
            ->setCurrentFieldText($currentFieldText)
            ->setCurrentFieldValue($currentFieldValue)
            ->setAny($any);
    }
    /**
     * Get ListingTipFieldID value
     * @return string|null
     */
    public function getListingTipFieldID()
    {
        return $this->ListingTipFieldID;
    }
    /**
     * Set ListingTipFieldID value
     * @param string $listingTipFieldID
     * @return \StructType\ListingTipFieldType
     */
    public function setListingTipFieldID($listingTipFieldID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipFieldID) && !is_string($listingTipFieldID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipFieldID, true), gettype($listingTipFieldID)), __LINE__);
        }
        $this->ListingTipFieldID = $listingTipFieldID;
        return $this;
    }
    /**
     * Get FieldTip value
     * @return string|null
     */
    public function getFieldTip()
    {
        return $this->FieldTip;
    }
    /**
     * Set FieldTip value
     * @param string $fieldTip
     * @return \StructType\ListingTipFieldType
     */
    public function setFieldTip($fieldTip = null)
    {
        // validation for constraint: string
        if (!is_null($fieldTip) && !is_string($fieldTip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldTip, true), gettype($fieldTip)), __LINE__);
        }
        $this->FieldTip = $fieldTip;
        return $this;
    }
    /**
     * Get CurrentFieldText value
     * @return string|null
     */
    public function getCurrentFieldText()
    {
        return $this->CurrentFieldText;
    }
    /**
     * Set CurrentFieldText value
     * @param string $currentFieldText
     * @return \StructType\ListingTipFieldType
     */
    public function setCurrentFieldText($currentFieldText = null)
    {
        // validation for constraint: string
        if (!is_null($currentFieldText) && !is_string($currentFieldText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentFieldText, true), gettype($currentFieldText)), __LINE__);
        }
        $this->CurrentFieldText = $currentFieldText;
        return $this;
    }
    /**
     * Get CurrentFieldValue value
     * @return string|null
     */
    public function getCurrentFieldValue()
    {
        return $this->CurrentFieldValue;
    }
    /**
     * Set CurrentFieldValue value
     * @param string $currentFieldValue
     * @return \StructType\ListingTipFieldType
     */
    public function setCurrentFieldValue($currentFieldValue = null)
    {
        // validation for constraint: string
        if (!is_null($currentFieldValue) && !is_string($currentFieldValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentFieldValue, true), gettype($currentFieldValue)), __LINE__);
        }
        $this->CurrentFieldValue = $currentFieldValue;
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
     * @return \StructType\ListingTipFieldType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
