<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCategoryUpdateStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of a <b>GetStoreCategoryUpdateStatus</b> call. The response includes the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * @subpackage Structs
 */
class GetStoreCategoryUpdateStatusResponseType extends AbstractResponseType
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value indicates the status of an update to the eBay Store Category hierarchy.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for GetStoreCategoryUpdateStatusResponseType
     * @uses GetStoreCategoryUpdateStatusResponseType::setStatus()
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\TaskStatusCodeType::valueIsValid()
     * @uses \EnumType\TaskStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\GetStoreCategoryUpdateStatusResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaskStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TaskStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\TaskStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
