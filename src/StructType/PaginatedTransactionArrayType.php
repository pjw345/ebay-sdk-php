<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of order line items.
 * @subpackage Structs
 */
class PaginatedTransactionArrayType extends AbstractStructBase
{
    /**
     * The TransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Contains a list of Transaction objects. Returned as an empty tag if no applicable order line items exist.
     * - minOccurs: 0
     * @var \ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Provides information about the list of order line items, including number of pages and number of entries.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for PaginatedTransactionArrayType
     * @uses PaginatedTransactionArrayType::setTransactionArray()
     * @uses PaginatedTransactionArrayType::setPaginationResult()
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct(\ArrayType\TransactionArrayType $transactionArray = null, \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setTransactionArray($transactionArray)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get TransactionArray value
     * @return \ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray()
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @return \StructType\PaginatedTransactionArrayType
     */
    public function setTransactionArray(\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
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
     * @return \StructType\PaginatedTransactionArrayType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaginatedTransactionArrayType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
