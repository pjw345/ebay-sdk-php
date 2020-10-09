<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotedItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Position;
    /**
     * The SelectionType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SelectionType;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The PromotionDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PromotionDetailsType[]
     */
    public $PromotionDetails;
    /**
     * The TimeLeft
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $TimeLeft;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotedItemType
     * @uses PromotedItemType::setItemID()
     * @uses PromotedItemType::setPictureURL()
     * @uses PromotedItemType::setPosition()
     * @uses PromotedItemType::setSelectionType()
     * @uses PromotedItemType::setTitle()
     * @uses PromotedItemType::setListingType()
     * @uses PromotedItemType::setPromotionDetails()
     * @uses PromotedItemType::setTimeLeft()
     * @uses PromotedItemType::setAny()
     * @param string $itemID
     * @param string $pictureURL
     * @param int $position
     * @param string $selectionType
     * @param string $title
     * @param string $listingType
     * @param \StructType\PromotionDetailsType[] $promotionDetails
     * @param string $timeLeft
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $pictureURL = null, $position = null, $selectionType = null, $title = null, $listingType = null, array $promotionDetails = array(), $timeLeft = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setPictureURL($pictureURL)
            ->setPosition($position)
            ->setSelectionType($selectionType)
            ->setTitle($title)
            ->setListingType($listingType)
            ->setPromotionDetails($promotionDetails)
            ->setTimeLeft($timeLeft)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\PromotedItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \StructType\PromotedItemType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureURL, true), gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Get Position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\PromotedItemType
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Get SelectionType value
     * @return string|null
     */
    public function getSelectionType()
    {
        return $this->SelectionType;
    }
    /**
     * Set SelectionType value
     * @uses \EnumType\PromotionItemSelectionCodeType::valueIsValid()
     * @uses \EnumType\PromotionItemSelectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectionType
     * @return \StructType\PromotedItemType
     */
    public function setSelectionType($selectionType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionItemSelectionCodeType::valueIsValid($selectionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionItemSelectionCodeType', is_array($selectionType) ? implode(', ', $selectionType) : var_export($selectionType, true), implode(', ', \EnumType\PromotionItemSelectionCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionType = $selectionType;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\PromotedItemType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \StructType\PromotedItemType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get PromotionDetails value
     * @return \StructType\PromotionDetailsType[]|null
     */
    public function getPromotionDetails()
    {
        return $this->PromotionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionDetailsForArrayConstraintsFromSetPromotionDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $promotedItemTypePromotionDetailsItem) {
            // validation for constraint: itemType
            if (!$promotedItemTypePromotionDetailsItem instanceof \StructType\PromotionDetailsType) {
                $invalidValues[] = is_object($promotedItemTypePromotionDetailsItem) ? get_class($promotedItemTypePromotionDetailsItem) : sprintf('%s(%s)', gettype($promotedItemTypePromotionDetailsItem), var_export($promotedItemTypePromotionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionDetails property can only contain items of type \StructType\PromotionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PromotionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotionDetailsType[] $promotionDetails
     * @return \StructType\PromotedItemType
     */
    public function setPromotionDetails(array $promotionDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($promotionDetailsArrayErrorMessage = self::validatePromotionDetailsForArrayConstraintsFromSetPromotionDetails($promotionDetails))) {
            throw new \InvalidArgumentException($promotionDetailsArrayErrorMessage, __LINE__);
        }
        $this->PromotionDetails = $promotionDetails;
        return $this;
    }
    /**
     * Add item to PromotionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotionDetailsType $item
     * @return \StructType\PromotedItemType
     */
    public function addToPromotionDetails(\StructType\PromotionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PromotionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PromotionDetails property can only contain items of type \StructType\PromotionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotionDetails[] = $item;
        return $this;
    }
    /**
     * Get TimeLeft value
     * @return string|null
     */
    public function getTimeLeft()
    {
        return $this->TimeLeft;
    }
    /**
     * Set TimeLeft value
     * @param string $timeLeft
     * @return \StructType\PromotedItemType
     */
    public function setTimeLeft($timeLeft = null)
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeLeft, true), gettype($timeLeft)), __LINE__);
        }
        $this->TimeLeft = $timeLeft;
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
     * @return \StructType\PromotedItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
