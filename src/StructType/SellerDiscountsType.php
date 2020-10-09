<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDiscountsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerDiscounts</b> container, which consists of one or more <b>SellerDiscount</b> nodes, as well as the original purchase price and shipping cost of the order line item.
 * @subpackage Structs
 */
class SellerDiscountsType extends AbstractStructBase
{
    /**
     * The OriginalItemPrice
     * Meta information extracted from the WSDL
     * - documentation: The original purchase price of the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $OriginalItemPrice;
    /**
     * The OriginalItemShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The original shipping cost for the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $OriginalItemShippingCost;
    /**
     * The OriginalShippingService
     * Meta information extracted from the WSDL
     * - documentation: The original shipping service offered by the seller to ship an item to a buyer.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalShippingService;
    /**
     * The SellerDiscount
     * Meta information extracted from the WSDL
     * - documentation: A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellerDiscountType[]
     */
    public $SellerDiscount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerDiscountsType
     * @uses SellerDiscountsType::setOriginalItemPrice()
     * @uses SellerDiscountsType::setOriginalItemShippingCost()
     * @uses SellerDiscountsType::setOriginalShippingService()
     * @uses SellerDiscountsType::setSellerDiscount()
     * @uses SellerDiscountsType::setAny()
     * @param \StructType\AmountType $originalItemPrice
     * @param \StructType\AmountType $originalItemShippingCost
     * @param string $originalShippingService
     * @param \StructType\SellerDiscountType[] $sellerDiscount
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $originalItemPrice = null, \StructType\AmountType $originalItemShippingCost = null, $originalShippingService = null, array $sellerDiscount = array(), \DOMDocument $any = null)
    {
        $this
            ->setOriginalItemPrice($originalItemPrice)
            ->setOriginalItemShippingCost($originalItemShippingCost)
            ->setOriginalShippingService($originalShippingService)
            ->setSellerDiscount($sellerDiscount)
            ->setAny($any);
    }
    /**
     * Get OriginalItemPrice value
     * @return \StructType\AmountType|null
     */
    public function getOriginalItemPrice()
    {
        return $this->OriginalItemPrice;
    }
    /**
     * Set OriginalItemPrice value
     * @param \StructType\AmountType $originalItemPrice
     * @return \StructType\SellerDiscountsType
     */
    public function setOriginalItemPrice(\StructType\AmountType $originalItemPrice = null)
    {
        $this->OriginalItemPrice = $originalItemPrice;
        return $this;
    }
    /**
     * Get OriginalItemShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getOriginalItemShippingCost()
    {
        return $this->OriginalItemShippingCost;
    }
    /**
     * Set OriginalItemShippingCost value
     * @param \StructType\AmountType $originalItemShippingCost
     * @return \StructType\SellerDiscountsType
     */
    public function setOriginalItemShippingCost(\StructType\AmountType $originalItemShippingCost = null)
    {
        $this->OriginalItemShippingCost = $originalItemShippingCost;
        return $this;
    }
    /**
     * Get OriginalShippingService value
     * @return string|null
     */
    public function getOriginalShippingService()
    {
        return $this->OriginalShippingService;
    }
    /**
     * Set OriginalShippingService value
     * @param string $originalShippingService
     * @return \StructType\SellerDiscountsType
     */
    public function setOriginalShippingService($originalShippingService = null)
    {
        // validation for constraint: string
        if (!is_null($originalShippingService) && !is_string($originalShippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalShippingService, true), gettype($originalShippingService)), __LINE__);
        }
        $this->OriginalShippingService = $originalShippingService;
        return $this;
    }
    /**
     * Get SellerDiscount value
     * @return \StructType\SellerDiscountType[]|null
     */
    public function getSellerDiscount()
    {
        return $this->SellerDiscount;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerDiscount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerDiscountForArrayConstraintsFromSetSellerDiscount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerDiscountsTypeSellerDiscountItem) {
            // validation for constraint: itemType
            if (!$sellerDiscountsTypeSellerDiscountItem instanceof \StructType\SellerDiscountType) {
                $invalidValues[] = is_object($sellerDiscountsTypeSellerDiscountItem) ? get_class($sellerDiscountsTypeSellerDiscountItem) : sprintf('%s(%s)', gettype($sellerDiscountsTypeSellerDiscountItem), var_export($sellerDiscountsTypeSellerDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerDiscount property can only contain items of type \StructType\SellerDiscountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SellerDiscount value
     * @throws \InvalidArgumentException
     * @param \StructType\SellerDiscountType[] $sellerDiscount
     * @return \StructType\SellerDiscountsType
     */
    public function setSellerDiscount(array $sellerDiscount = array())
    {
        // validation for constraint: array
        if ('' !== ($sellerDiscountArrayErrorMessage = self::validateSellerDiscountForArrayConstraintsFromSetSellerDiscount($sellerDiscount))) {
            throw new \InvalidArgumentException($sellerDiscountArrayErrorMessage, __LINE__);
        }
        $this->SellerDiscount = $sellerDiscount;
        return $this;
    }
    /**
     * Add item to SellerDiscount value
     * @throws \InvalidArgumentException
     * @param \StructType\SellerDiscountType $item
     * @return \StructType\SellerDiscountsType
     */
    public function addToSellerDiscount(\StructType\SellerDiscountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellerDiscountType) {
            throw new \InvalidArgumentException(sprintf('The SellerDiscount property can only contain items of type \StructType\SellerDiscountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellerDiscount[] = $item;
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
     * @return \StructType\SellerDiscountsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
