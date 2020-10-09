<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProductFinderIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ExtendedProductFinderIDType extends AbstractStructBase
{
    /**
     * The ProductFinderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductFinderID;
    /**
     * The ProductFinderBuySide
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ProductFinderBuySide;
    /**
     * Constructor method for ExtendedProductFinderIDType
     * @uses ExtendedProductFinderIDType::setProductFinderID()
     * @uses ExtendedProductFinderIDType::setProductFinderBuySide()
     * @param int $productFinderID
     * @param bool $productFinderBuySide
     */
    public function __construct($productFinderID = null, $productFinderBuySide = null)
    {
        $this
            ->setProductFinderID($productFinderID)
            ->setProductFinderBuySide($productFinderBuySide);
    }
    /**
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID()
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderID($productFinderID = null)
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !(is_int($productFinderID) || ctype_digit($productFinderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productFinderID, true), gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        return $this;
    }
    /**
     * Get ProductFinderBuySide value
     * @return bool|null
     */
    public function getProductFinderBuySide()
    {
        return $this->ProductFinderBuySide;
    }
    /**
     * Set ProductFinderBuySide value
     * @param bool $productFinderBuySide
     * @return \StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderBuySide($productFinderBuySide = null)
    {
        // validation for constraint: boolean
        if (!is_null($productFinderBuySide) && !is_bool($productFinderBuySide)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($productFinderBuySide, true), gettype($productFinderBuySide)), __LINE__);
        }
        $this->ProductFinderBuySide = $productFinderBuySide;
        return $this;
    }
}
