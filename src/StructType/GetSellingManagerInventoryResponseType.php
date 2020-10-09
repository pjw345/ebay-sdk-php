<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a list of the products created by the seller. The list of products is returned as a set of tags, in which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType object contains
 * the information about for one Selling Manager product and any Selling Manager templates the product contains.
 * @subpackage Structs
 */
class GetSellingManagerInventoryResponseType extends AbstractResponseType
{
    /**
     * The InventoryCountLastCalculatedDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date the inventory counts were last calculated.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryCountLastCalculatedDate;
    /**
     * The SellingManagerProduct
     * Meta information extracted from the WSDL
     * - documentation: Container for information about the requested products and templates.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductType[]
     */
    public $SellingManagerProduct;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains the total number of pages (TotalNumberOfPages) and the total number of products entries (TotalNumberOfEntries) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetSellingManagerInventoryResponseType
     * @uses GetSellingManagerInventoryResponseType::setInventoryCountLastCalculatedDate()
     * @uses GetSellingManagerInventoryResponseType::setSellingManagerProduct()
     * @uses GetSellingManagerInventoryResponseType::setPaginationResult()
     * @param string $inventoryCountLastCalculatedDate
     * @param \StructType\SellingManagerProductType[] $sellingManagerProduct
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct($inventoryCountLastCalculatedDate = null, array $sellingManagerProduct = array(), \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setInventoryCountLastCalculatedDate($inventoryCountLastCalculatedDate)
            ->setSellingManagerProduct($sellingManagerProduct)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get InventoryCountLastCalculatedDate value
     * @return string|null
     */
    public function getInventoryCountLastCalculatedDate()
    {
        return $this->InventoryCountLastCalculatedDate;
    }
    /**
     * Set InventoryCountLastCalculatedDate value
     * @param string $inventoryCountLastCalculatedDate
     * @return \StructType\GetSellingManagerInventoryResponseType
     */
    public function setInventoryCountLastCalculatedDate($inventoryCountLastCalculatedDate = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryCountLastCalculatedDate) && !is_string($inventoryCountLastCalculatedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryCountLastCalculatedDate, true), gettype($inventoryCountLastCalculatedDate)), __LINE__);
        }
        $this->InventoryCountLastCalculatedDate = $inventoryCountLastCalculatedDate;
        return $this;
    }
    /**
     * Get SellingManagerProduct value
     * @return \StructType\SellingManagerProductType[]|null
     */
    public function getSellingManagerProduct()
    {
        return $this->SellingManagerProduct;
    }
    /**
     * This method is responsible for validating the values passed to the setSellingManagerProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellingManagerProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellingManagerProductForArrayConstraintsFromSetSellingManagerProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerInventoryResponseTypeSellingManagerProductItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerInventoryResponseTypeSellingManagerProductItem instanceof \StructType\SellingManagerProductType) {
                $invalidValues[] = is_object($getSellingManagerInventoryResponseTypeSellingManagerProductItem) ? get_class($getSellingManagerInventoryResponseTypeSellingManagerProductItem) : sprintf('%s(%s)', gettype($getSellingManagerInventoryResponseTypeSellingManagerProductItem), var_export($getSellingManagerInventoryResponseTypeSellingManagerProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellingManagerProduct property can only contain items of type \StructType\SellingManagerProductType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SellingManagerProduct value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerProductType[] $sellingManagerProduct
     * @return \StructType\GetSellingManagerInventoryResponseType
     */
    public function setSellingManagerProduct(array $sellingManagerProduct = array())
    {
        // validation for constraint: array
        if ('' !== ($sellingManagerProductArrayErrorMessage = self::validateSellingManagerProductForArrayConstraintsFromSetSellingManagerProduct($sellingManagerProduct))) {
            throw new \InvalidArgumentException($sellingManagerProductArrayErrorMessage, __LINE__);
        }
        $this->SellingManagerProduct = $sellingManagerProduct;
        return $this;
    }
    /**
     * Add item to SellingManagerProduct value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerProductType $item
     * @return \StructType\GetSellingManagerInventoryResponseType
     */
    public function addToSellingManagerProduct(\StructType\SellingManagerProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerProductType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerProduct property can only contain items of type \StructType\SellingManagerProductType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellingManagerProduct[] = $item;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \StructType\PaginationResultType $paginationResult
     * @return \StructType\GetSellingManagerInventoryResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
}
