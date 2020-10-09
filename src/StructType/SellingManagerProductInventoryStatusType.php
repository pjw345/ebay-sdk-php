<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductInventoryStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes the inventory status of a specific Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductInventoryStatusType extends AbstractStructBase
{
    /**
     * The QuantityScheduled
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products scheduled to be listed.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityScheduled;
    /**
     * The QuantityActive
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products actively listed.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityActive;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products sold.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The QuantityUnsold
     * Meta information extracted from the WSDL
     * - documentation: Quantity of product unsold.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityUnsold;
    /**
     * The SuccessPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of ended listings that sold.
     * - minOccurs: 0
     * @var float
     */
    public $SuccessPercent;
    /**
     * The AverageSellingPrice
     * Meta information extracted from the WSDL
     * - documentation: Average selling price for the product.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AverageSellingPrice;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductInventoryStatusType
     * @uses SellingManagerProductInventoryStatusType::setQuantityScheduled()
     * @uses SellingManagerProductInventoryStatusType::setQuantityActive()
     * @uses SellingManagerProductInventoryStatusType::setQuantitySold()
     * @uses SellingManagerProductInventoryStatusType::setQuantityUnsold()
     * @uses SellingManagerProductInventoryStatusType::setSuccessPercent()
     * @uses SellingManagerProductInventoryStatusType::setAverageSellingPrice()
     * @uses SellingManagerProductInventoryStatusType::setAny()
     * @param int $quantityScheduled
     * @param int $quantityActive
     * @param int $quantitySold
     * @param int $quantityUnsold
     * @param float $successPercent
     * @param \StructType\AmountType $averageSellingPrice
     * @param \DOMDocument $any
     */
    public function __construct($quantityScheduled = null, $quantityActive = null, $quantitySold = null, $quantityUnsold = null, $successPercent = null, \StructType\AmountType $averageSellingPrice = null, \DOMDocument $any = null)
    {
        $this
            ->setQuantityScheduled($quantityScheduled)
            ->setQuantityActive($quantityActive)
            ->setQuantitySold($quantitySold)
            ->setQuantityUnsold($quantityUnsold)
            ->setSuccessPercent($successPercent)
            ->setAverageSellingPrice($averageSellingPrice)
            ->setAny($any);
    }
    /**
     * Get QuantityScheduled value
     * @return int|null
     */
    public function getQuantityScheduled()
    {
        return $this->QuantityScheduled;
    }
    /**
     * Set QuantityScheduled value
     * @param int $quantityScheduled
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityScheduled($quantityScheduled = null)
    {
        // validation for constraint: int
        if (!is_null($quantityScheduled) && !(is_int($quantityScheduled) || ctype_digit($quantityScheduled))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityScheduled, true), gettype($quantityScheduled)), __LINE__);
        }
        $this->QuantityScheduled = $quantityScheduled;
        return $this;
    }
    /**
     * Get QuantityActive value
     * @return int|null
     */
    public function getQuantityActive()
    {
        return $this->QuantityActive;
    }
    /**
     * Set QuantityActive value
     * @param int $quantityActive
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityActive($quantityActive = null)
    {
        // validation for constraint: int
        if (!is_null($quantityActive) && !(is_int($quantityActive) || ctype_digit($quantityActive))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityActive, true), gettype($quantityActive)), __LINE__);
        }
        $this->QuantityActive = $quantityActive;
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get QuantityUnsold value
     * @return int|null
     */
    public function getQuantityUnsold()
    {
        return $this->QuantityUnsold;
    }
    /**
     * Set QuantityUnsold value
     * @param int $quantityUnsold
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityUnsold($quantityUnsold = null)
    {
        // validation for constraint: int
        if (!is_null($quantityUnsold) && !(is_int($quantityUnsold) || ctype_digit($quantityUnsold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityUnsold, true), gettype($quantityUnsold)), __LINE__);
        }
        $this->QuantityUnsold = $quantityUnsold;
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent()
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setSuccessPercent($successPercent = null)
    {
        // validation for constraint: float
        if (!is_null($successPercent) && !(is_float($successPercent) || is_numeric($successPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($successPercent, true), gettype($successPercent)), __LINE__);
        }
        $this->SuccessPercent = $successPercent;
        return $this;
    }
    /**
     * Get AverageSellingPrice value
     * @return \StructType\AmountType|null
     */
    public function getAverageSellingPrice()
    {
        return $this->AverageSellingPrice;
    }
    /**
     * Set AverageSellingPrice value
     * @param \StructType\AmountType $averageSellingPrice
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setAverageSellingPrice(\StructType\AmountType $averageSellingPrice = null)
    {
        $this->AverageSellingPrice = $averageSellingPrice;
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
     * @return \StructType\SellingManagerProductInventoryStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
