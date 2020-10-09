<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplatesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetSellingManagerTemplates</b> call. A <b>SellingManagerTemplateDetails</b> container is returned for each Selling Manager Template that matches the input criteria.
 * @subpackage Structs
 */
class GetSellingManagerTemplatesResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerTemplateDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of Selling Manager Templates that match the input criteria.
     * - minOccurs: 0
     * @var \ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public $SellingManagerTemplateDetailsArray;
    /**
     * Constructor method for GetSellingManagerTemplatesResponseType
     * @uses GetSellingManagerTemplatesResponseType::setSellingManagerTemplateDetailsArray()
     * @param \ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     */
    public function __construct(\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null)
    {
        $this
            ->setSellingManagerTemplateDetailsArray($sellingManagerTemplateDetailsArray);
    }
    /**
     * Get SellingManagerTemplateDetailsArray value
     * @return \ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->SellingManagerTemplateDetailsArray;
    }
    /**
     * Set SellingManagerTemplateDetailsArray value
     * @param \ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @return \StructType\GetSellingManagerTemplatesResponseType
     */
    public function setSellingManagerTemplateDetailsArray(\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null)
    {
        $this->SellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        return $this;
    }
}
