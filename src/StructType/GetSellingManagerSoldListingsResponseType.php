<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. Response can be filtered by date, search values, and stores.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{
    /**
     * The SaleRecord
     * Meta information extracted from the WSDL
     * - documentation: A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerSoldOrderType[]
     */
    public $SaleRecord;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetSellingManagerSoldListingsResponseType
     * @uses GetSellingManagerSoldListingsResponseType::setSaleRecord()
     * @uses GetSellingManagerSoldListingsResponseType::setPaginationResult()
     * @param \StructType\SellingManagerSoldOrderType[] $saleRecord
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct(array $saleRecord = array(), \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setSaleRecord($saleRecord)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get SaleRecord value
     * @return \StructType\SellingManagerSoldOrderType[]|null
     */
    public function getSaleRecord()
    {
        return $this->SaleRecord;
    }
    /**
     * This method is responsible for validating the values passed to the setSaleRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaleRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSaleRecordForArrayConstraintsFromSetSaleRecord(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerSoldListingsResponseTypeSaleRecordItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerSoldListingsResponseTypeSaleRecordItem instanceof \StructType\SellingManagerSoldOrderType) {
                $invalidValues[] = is_object($getSellingManagerSoldListingsResponseTypeSaleRecordItem) ? get_class($getSellingManagerSoldListingsResponseTypeSaleRecordItem) : sprintf('%s(%s)', gettype($getSellingManagerSoldListingsResponseTypeSaleRecordItem), var_export($getSellingManagerSoldListingsResponseTypeSaleRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SaleRecord property can only contain items of type \StructType\SellingManagerSoldOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SaleRecord value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerSoldOrderType[] $saleRecord
     * @return \StructType\GetSellingManagerSoldListingsResponseType
     */
    public function setSaleRecord(array $saleRecord = array())
    {
        // validation for constraint: array
        if ('' !== ($saleRecordArrayErrorMessage = self::validateSaleRecordForArrayConstraintsFromSetSaleRecord($saleRecord))) {
            throw new \InvalidArgumentException($saleRecordArrayErrorMessage, __LINE__);
        }
        $this->SaleRecord = $saleRecord;
        return $this;
    }
    /**
     * Add item to SaleRecord value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerSoldOrderType $item
     * @return \StructType\GetSellingManagerSoldListingsResponseType
     */
    public function addToSaleRecord(\StructType\SellingManagerSoldOrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerSoldOrderType) {
            throw new \InvalidArgumentException(sprintf('The SaleRecord property can only contain items of type \StructType\SellingManagerSoldOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SaleRecord[] = $item;
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
     * @return \StructType\GetSellingManagerSoldListingsResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
}
