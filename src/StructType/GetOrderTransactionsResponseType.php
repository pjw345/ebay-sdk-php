<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input
 * criteria in the call request.
 * @subpackage Structs
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
    /**
     * The OrderArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     * - minOccurs: 0
     * @var \ArrayType\OrderArrayType
     */
    public $OrderArray;
    /**
     * Constructor method for GetOrderTransactionsResponseType
     * @uses GetOrderTransactionsResponseType::setOrderArray()
     * @param \ArrayType\OrderArrayType $orderArray
     */
    public function __construct(\ArrayType\OrderArrayType $orderArray = null)
    {
        $this
            ->setOrderArray($orderArray);
    }
    /**
     * Get OrderArray value
     * @return \ArrayType\OrderArrayType|null
     */
    public function getOrderArray()
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \ArrayType\OrderArrayType $orderArray
     * @return \StructType\GetOrderTransactionsResponseType
     */
    public function setOrderArray(\ArrayType\OrderArrayType $orderArray = null)
    {
        $this->OrderArray = $orderArray;
        return $this;
    }
}
