<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReasonCodeDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for reason code details for all sites.
 * @subpackage Structs
 */
class VeROReasonCodeDetailsType extends AbstractStructBase
{
    /**
     * The VeROSiteDetail
     * Meta information extracted from the WSDL
     * - documentation: Contains reason code details for a site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VeROSiteDetailType[]
     */
    public $VeROSiteDetail;
    /**
     * Constructor method for VeROReasonCodeDetailsType
     * @uses VeROReasonCodeDetailsType::setVeROSiteDetail()
     * @param \StructType\VeROSiteDetailType[] $veROSiteDetail
     */
    public function __construct(array $veROSiteDetail = array())
    {
        $this
            ->setVeROSiteDetail($veROSiteDetail);
    }
    /**
     * Get VeROSiteDetail value
     * @return \StructType\VeROSiteDetailType[]|null
     */
    public function getVeROSiteDetail()
    {
        return $this->VeROSiteDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setVeROSiteDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVeROSiteDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVeROSiteDetailForArrayConstraintsFromSetVeROSiteDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReasonCodeDetailsTypeVeROSiteDetailItem) {
            // validation for constraint: itemType
            if (!$veROReasonCodeDetailsTypeVeROSiteDetailItem instanceof \StructType\VeROSiteDetailType) {
                $invalidValues[] = is_object($veROReasonCodeDetailsTypeVeROSiteDetailItem) ? get_class($veROReasonCodeDetailsTypeVeROSiteDetailItem) : sprintf('%s(%s)', gettype($veROReasonCodeDetailsTypeVeROSiteDetailItem), var_export($veROReasonCodeDetailsTypeVeROSiteDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VeROSiteDetail property can only contain items of type \StructType\VeROSiteDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VeROSiteDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\VeROSiteDetailType[] $veROSiteDetail
     * @return \StructType\VeROReasonCodeDetailsType
     */
    public function setVeROSiteDetail(array $veROSiteDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($veROSiteDetailArrayErrorMessage = self::validateVeROSiteDetailForArrayConstraintsFromSetVeROSiteDetail($veROSiteDetail))) {
            throw new \InvalidArgumentException($veROSiteDetailArrayErrorMessage, __LINE__);
        }
        $this->VeROSiteDetail = $veROSiteDetail;
        return $this;
    }
    /**
     * Add item to VeROSiteDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\VeROSiteDetailType $item
     * @return \StructType\VeROReasonCodeDetailsType
     */
    public function addToVeROSiteDetail(\StructType\VeROSiteDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VeROSiteDetailType) {
            throw new \InvalidArgumentException(sprintf('The VeROSiteDetail property can only contain items of type \StructType\VeROSiteDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VeROSiteDetail[] = $item;
        return $this;
    }
}
