<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySecondChanceOfferListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of possible My eBay Second Chance Offers.
 * @subpackage Structs
 */
class MyeBaySecondChanceOfferListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of My eBay Second Chance Offers available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: A Second Chance Offer item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemType[]
     */
    public $SecondChanceOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBaySecondChanceOfferListType
     * @uses MyeBaySecondChanceOfferListType::setTotalAvailable()
     * @uses MyeBaySecondChanceOfferListType::setSecondChanceOffer()
     * @uses MyeBaySecondChanceOfferListType::setAny()
     * @param int $totalAvailable
     * @param \StructType\ItemType[] $secondChanceOffer
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $secondChanceOffer = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setSecondChanceOffer($secondChanceOffer)
            ->setAny($any);
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable()
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \StructType\MyeBaySecondChanceOfferListType
     */
    public function setTotalAvailable($totalAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !(is_int($totalAvailable) || ctype_digit($totalAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAvailable, true), gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \StructType\ItemType[]|null
     */
    public function getSecondChanceOffer()
    {
        return $this->SecondChanceOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondChanceOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondChanceOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBaySecondChanceOfferListTypeSecondChanceOfferItem) {
            // validation for constraint: itemType
            if (!$myeBaySecondChanceOfferListTypeSecondChanceOfferItem instanceof \StructType\ItemType) {
                $invalidValues[] = is_object($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) ? get_class($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) : sprintf('%s(%s)', gettype($myeBaySecondChanceOfferListTypeSecondChanceOfferItem), var_export($myeBaySecondChanceOfferListTypeSecondChanceOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecondChanceOffer property can only contain items of type \StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemType[] $secondChanceOffer
     * @return \StructType\MyeBaySecondChanceOfferListType
     */
    public function setSecondChanceOffer(array $secondChanceOffer = array())
    {
        // validation for constraint: array
        if ('' !== ($secondChanceOfferArrayErrorMessage = self::validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer($secondChanceOffer))) {
            throw new \InvalidArgumentException($secondChanceOfferArrayErrorMessage, __LINE__);
        }
        $this->SecondChanceOffer = $secondChanceOffer;
        return $this;
    }
    /**
     * Add item to SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemType $item
     * @return \StructType\MyeBaySecondChanceOfferListType
     */
    public function addToSecondChanceOffer(\StructType\ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemType) {
            throw new \InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of type \StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SecondChanceOffer[] = $item;
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
     * @return \StructType\MyeBaySecondChanceOfferListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
