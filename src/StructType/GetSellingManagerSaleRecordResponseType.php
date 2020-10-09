<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSaleRecordResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response to a <b>GetSellingManagerSaleRecord</b> call.
 * @subpackage Structs
 */
class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerSoldOrder
     * Meta information extracted from the WSDL
     * - documentation: Contains the data in a Selling Manager Sale Record.
     * - minOccurs: 0
     * @var \StructType\SellingManagerSoldOrderType
     */
    public $SellingManagerSoldOrder;
    /**
     * Constructor method for GetSellingManagerSaleRecordResponseType
     * @uses GetSellingManagerSaleRecordResponseType::setSellingManagerSoldOrder()
     * @param \StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     */
    public function __construct(\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this
            ->setSellingManagerSoldOrder($sellingManagerSoldOrder);
    }
    /**
     * Get SellingManagerSoldOrder value
     * @return \StructType\SellingManagerSoldOrderType|null
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->SellingManagerSoldOrder;
    }
    /**
     * Set SellingManagerSoldOrder value
     * @param \StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return \StructType\GetSellingManagerSaleRecordResponseType
     */
    public function setSellingManagerSoldOrder(\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this->SellingManagerSoldOrder = $sellingManagerSoldOrder;
        return $this;
    }
}
