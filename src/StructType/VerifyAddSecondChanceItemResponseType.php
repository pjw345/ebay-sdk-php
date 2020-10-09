<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddSecondChanceItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>VerifyAddSecondChanceItem</b> call.
 * @subpackage Structs
 */
class VerifyAddSecondChanceItemResponseType extends AbstractResponseType
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time when the the new Second Chance Offer listing became active and the recipient user could purchase the item.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time when the Second Chance Offer listing expires, at which time the listing ends (if the recipient user does not purchase the item first).
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for VerifyAddSecondChanceItemResponseType
     * @uses VerifyAddSecondChanceItemResponseType::setStartTime()
     * @uses VerifyAddSecondChanceItemResponseType::setEndTime()
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($startTime = null, $endTime = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\VerifyAddSecondChanceItemResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
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
     * @return \StructType\VerifyAddSecondChanceItemResponseType
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
