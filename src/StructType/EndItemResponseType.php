<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type includes the acknowledgement of the date and time when the eBay listing was ended due to the call to <b>EndItem</b>.
 * @subpackage Structs
 */
class EndItemResponseType extends AbstractResponseType
{
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for EndItemResponseType
     * @uses EndItemResponseType::setEndTime()
     * @param string $endTime
     */
    public function __construct($endTime = null)
    {
        $this
            ->setEndTime($endTime);
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EndItemResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
}
