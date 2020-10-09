<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerPackageEnclosuresType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment
 * instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * @subpackage Structs
 */
class BuyerPackageEnclosuresType extends AbstractStructBase
{
    /**
     * The BuyerPackageEnclosure
     * Meta information extracted from the WSDL
     * - documentation: A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BuyerPackageEnclosureType[]
     */
    public $BuyerPackageEnclosure;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerPackageEnclosuresType
     * @uses BuyerPackageEnclosuresType::setBuyerPackageEnclosure()
     * @uses BuyerPackageEnclosuresType::setAny()
     * @param \StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @param \DOMDocument $any
     */
    public function __construct(array $buyerPackageEnclosure = array(), \DOMDocument $any = null)
    {
        $this
            ->setBuyerPackageEnclosure($buyerPackageEnclosure)
            ->setAny($any);
    }
    /**
     * Get BuyerPackageEnclosure value
     * @return \StructType\BuyerPackageEnclosureType[]|null
     */
    public function getBuyerPackageEnclosure()
    {
        return $this->BuyerPackageEnclosure;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerPackageEnclosure method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerPackageEnclosure method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerPackageEnclosureForArrayConstraintsFromSetBuyerPackageEnclosure(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) {
            // validation for constraint: itemType
            if (!$buyerPackageEnclosuresTypeBuyerPackageEnclosureItem instanceof \StructType\BuyerPackageEnclosureType) {
                $invalidValues[] = is_object($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) ? get_class($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) : sprintf('%s(%s)', gettype($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem), var_export($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerPackageEnclosure property can only contain items of type \StructType\BuyerPackageEnclosureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BuyerPackageEnclosure value
     * @throws \InvalidArgumentException
     * @param \StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @return \StructType\BuyerPackageEnclosuresType
     */
    public function setBuyerPackageEnclosure(array $buyerPackageEnclosure = array())
    {
        // validation for constraint: array
        if ('' !== ($buyerPackageEnclosureArrayErrorMessage = self::validateBuyerPackageEnclosureForArrayConstraintsFromSetBuyerPackageEnclosure($buyerPackageEnclosure))) {
            throw new \InvalidArgumentException($buyerPackageEnclosureArrayErrorMessage, __LINE__);
        }
        $this->BuyerPackageEnclosure = $buyerPackageEnclosure;
        return $this;
    }
    /**
     * Add item to BuyerPackageEnclosure value
     * @throws \InvalidArgumentException
     * @param \StructType\BuyerPackageEnclosureType $item
     * @return \StructType\BuyerPackageEnclosuresType
     */
    public function addToBuyerPackageEnclosure(\StructType\BuyerPackageEnclosureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BuyerPackageEnclosureType) {
            throw new \InvalidArgumentException(sprintf('The BuyerPackageEnclosure property can only contain items of type \StructType\BuyerPackageEnclosureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerPackageEnclosure[] = $item;
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
     * @return \StructType\BuyerPackageEnclosuresType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
