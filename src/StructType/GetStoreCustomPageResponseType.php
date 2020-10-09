<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCustomPageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreCustomPage</b> call.
 * @subpackage Structs
 */
class GetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPageArray
     * Meta information extracted from the WSDL
     * - documentation: This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     * - minOccurs: 0
     * @var \ArrayType\StoreCustomPageArrayType
     */
    public $CustomPageArray;
    /**
     * Constructor method for GetStoreCustomPageResponseType
     * @uses GetStoreCustomPageResponseType::setCustomPageArray()
     * @param \ArrayType\StoreCustomPageArrayType $customPageArray
     */
    public function __construct(\ArrayType\StoreCustomPageArrayType $customPageArray = null)
    {
        $this
            ->setCustomPageArray($customPageArray);
    }
    /**
     * Get CustomPageArray value
     * @return \ArrayType\StoreCustomPageArrayType|null
     */
    public function getCustomPageArray()
    {
        return $this->CustomPageArray;
    }
    /**
     * Set CustomPageArray value
     * @param \ArrayType\StoreCustomPageArrayType $customPageArray
     * @return \StructType\GetStoreCustomPageResponseType
     */
    public function setCustomPageArray(\ArrayType\StoreCustomPageArrayType $customPageArray = null)
    {
        $this->CustomPageArray = $customPageArray;
        return $this;
    }
}
