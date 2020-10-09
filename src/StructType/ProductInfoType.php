<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductInfoType extends AbstractStructBase
{
    /**
     * The AverageStartPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AverageStartPrice;
    /**
     * The AverageSoldPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AverageSoldPrice;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The productInfoID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $productInfoID;
    /**
     * Constructor method for ProductInfoType
     * @uses ProductInfoType::setAverageStartPrice()
     * @uses ProductInfoType::setAverageSoldPrice()
     * @uses ProductInfoType::setTitle()
     * @uses ProductInfoType::setProductState()
     * @uses ProductInfoType::setProductInfoID()
     * @param \StructType\AmountType $averageStartPrice
     * @param \StructType\AmountType $averageSoldPrice
     * @param string $title
     * @param string $productState
     * @param string $productInfoID
     */
    public function __construct(\StructType\AmountType $averageStartPrice = null, \StructType\AmountType $averageSoldPrice = null, $title = null, $productState = null, $productInfoID = null)
    {
        $this
            ->setAverageStartPrice($averageStartPrice)
            ->setAverageSoldPrice($averageSoldPrice)
            ->setTitle($title)
            ->setProductState($productState)
            ->setProductInfoID($productInfoID);
    }
    /**
     * Get AverageStartPrice value
     * @return \StructType\AmountType|null
     */
    public function getAverageStartPrice()
    {
        return $this->AverageStartPrice;
    }
    /**
     * Set AverageStartPrice value
     * @param \StructType\AmountType $averageStartPrice
     * @return \StructType\ProductInfoType
     */
    public function setAverageStartPrice(\StructType\AmountType $averageStartPrice = null)
    {
        $this->AverageStartPrice = $averageStartPrice;
        return $this;
    }
    /**
     * Get AverageSoldPrice value
     * @return \StructType\AmountType|null
     */
    public function getAverageSoldPrice()
    {
        return $this->AverageSoldPrice;
    }
    /**
     * Set AverageSoldPrice value
     * @param \StructType\AmountType $averageSoldPrice
     * @return \StructType\ProductInfoType
     */
    public function setAverageSoldPrice(\StructType\AmountType $averageSoldPrice = null)
    {
        $this->AverageSoldPrice = $averageSoldPrice;
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
     * @return \StructType\ProductInfoType
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
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \EnumType\ProductStateCodeType::valueIsValid()
     * @uses \EnumType\ProductStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \StructType\ProductInfoType
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductStateCodeType', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get productInfoID value
     * @return string|null
     */
    public function getProductInfoID()
    {
        return $this->productInfoID;
    }
    /**
     * Set productInfoID value
     * @param string $productInfoID
     * @return \StructType\ProductInfoType
     */
    public function setProductInfoID($productInfoID = null)
    {
        // validation for constraint: string
        if (!is_null($productInfoID) && !is_string($productInfoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productInfoID, true), gettype($productInfoID)), __LINE__);
        }
        $this->productInfoID = $productInfoID;
        return $this;
    }
}
