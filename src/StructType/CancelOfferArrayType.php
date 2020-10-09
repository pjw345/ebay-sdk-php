<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferArrayType extends AbstractStructBase
{
    /**
     * The CancelOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CancelOfferType[]
     */
    public $CancelOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CancelOfferArrayType
     * @uses CancelOfferArrayType::setCancelOffer()
     * @uses CancelOfferArrayType::setAny()
     * @param \StructType\CancelOfferType[] $cancelOffer
     * @param \DOMDocument $any
     */
    public function __construct(array $cancelOffer = array(), \DOMDocument $any = null)
    {
        $this
            ->setCancelOffer($cancelOffer)
            ->setAny($any);
    }
    /**
     * Get CancelOffer value
     * @return \StructType\CancelOfferType[]|null
     */
    public function getCancelOffer()
    {
        return $this->CancelOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelOfferForArrayConstraintsFromSetCancelOffer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cancelOfferArrayTypeCancelOfferItem) {
            // validation for constraint: itemType
            if (!$cancelOfferArrayTypeCancelOfferItem instanceof \StructType\CancelOfferType) {
                $invalidValues[] = is_object($cancelOfferArrayTypeCancelOfferItem) ? get_class($cancelOfferArrayTypeCancelOfferItem) : sprintf('%s(%s)', gettype($cancelOfferArrayTypeCancelOfferItem), var_export($cancelOfferArrayTypeCancelOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancelOffer property can only contain items of type \StructType\CancelOfferType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CancelOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelOfferType[] $cancelOffer
     * @return \StructType\CancelOfferArrayType
     */
    public function setCancelOffer(array $cancelOffer = array())
    {
        // validation for constraint: array
        if ('' !== ($cancelOfferArrayErrorMessage = self::validateCancelOfferForArrayConstraintsFromSetCancelOffer($cancelOffer))) {
            throw new \InvalidArgumentException($cancelOfferArrayErrorMessage, __LINE__);
        }
        $this->CancelOffer = $cancelOffer;
        return $this;
    }
    /**
     * Add item to CancelOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelOfferType $item
     * @return \StructType\CancelOfferArrayType
     */
    public function addToCancelOffer(\StructType\CancelOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CancelOfferType) {
            throw new \InvalidArgumentException(sprintf('The CancelOffer property can only contain items of type \StructType\CancelOfferType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CancelOffer[] = $item;
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
     * @return \StructType\CancelOfferArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
