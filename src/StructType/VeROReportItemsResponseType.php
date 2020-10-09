<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a packet ID and status for the items reported by the VeRO Program member.
 * @subpackage Structs
 */
class VeROReportItemsResponseType extends AbstractResponseType
{
    /**
     * The VeROReportPacketID
     * Meta information extracted from the WSDL
     * - documentation: A unique packet identifier for the items reported.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReportPacketID;
    /**
     * The VeROReportPacketStatus
     * Meta information extracted from the WSDL
     * - documentation: The processing status of the packet.
     * - minOccurs: 0
     * @var string
     */
    public $VeROReportPacketStatus;
    /**
     * Constructor method for VeROReportItemsResponseType
     * @uses VeROReportItemsResponseType::setVeROReportPacketID()
     * @uses VeROReportItemsResponseType::setVeROReportPacketStatus()
     * @param int $veROReportPacketID
     * @param string $veROReportPacketStatus
     */
    public function __construct($veROReportPacketID = null, $veROReportPacketStatus = null)
    {
        $this
            ->setVeROReportPacketID($veROReportPacketID)
            ->setVeROReportPacketStatus($veROReportPacketStatus);
    }
    /**
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID()
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketID($veROReportPacketID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !(is_int($veROReportPacketID) || ctype_digit($veROReportPacketID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($veROReportPacketID, true), gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus()
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VeROReportPacketStatusCodeType', is_array($veROReportPacketStatus) ? implode(', ', $veROReportPacketStatus) : var_export($veROReportPacketStatus, true), implode(', ', \EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }
}
