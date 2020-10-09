<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedOrderTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of orders.
 * @subpackage Structs
 */
class PaginatedOrderTransactionArrayType extends AbstractStructBase
{
    /**
     * The OrderTransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Contains the list of orders.
     * - minOccurs: 0
     * @var \ArrayType\OrderTransactionArrayType
     */
    public $OrderTransactionArray;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Specifies information about the list, including number of pages and number of entries.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginatedOrderTransactionArrayType
     * @uses PaginatedOrderTransactionArrayType::setOrderTransactionArray()
     * @uses PaginatedOrderTransactionArrayType::setPaginationResult()
     * @uses PaginatedOrderTransactionArrayType::setAny()
     * @param \ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @param \StructType\PaginationResultType $paginationResult
     * @param \DOMDocument $any
     */
    public function __construct(\ArrayType\OrderTransactionArrayType $orderTransactionArray = null, \StructType\PaginationResultType $paginationResult = null, \DOMDocument $any = null)
    {
        $this
            ->setOrderTransactionArray($orderTransactionArray)
            ->setPaginationResult($paginationResult)
            ->setAny($any);
    }
    /**
     * Get OrderTransactionArray value
     * @return \ArrayType\OrderTransactionArrayType|null
     */
    public function getOrderTransactionArray()
    {
        return $this->OrderTransactionArray;
    }
    /**
     * Set OrderTransactionArray value
     * @param \ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @return \StructType\PaginatedOrderTransactionArrayType
     */
    public function setOrderTransactionArray(\ArrayType\OrderTransactionArrayType $orderTransactionArray = null)
    {
        $this->OrderTransactionArray = $orderTransactionArray;
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
     * @return \StructType\PaginatedOrderTransactionArrayType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
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
     * @return \StructType\PaginatedOrderTransactionArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
