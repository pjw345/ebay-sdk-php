<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerPackageEnclosureType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerPackageEnclosure</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment
 * instructions in the shipping package. A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * @subpackage Structs
 */
class BuyerPackageEnclosureType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates the type of payment instructions included in the shipping package.
     * @var string
     */
    public $type;
    /**
     * Constructor method for BuyerPackageEnclosureType
     * @uses BuyerPackageEnclosureType::set_()
     * @uses BuyerPackageEnclosureType::setType()
     * @param string $_
     * @param string $type
     */
    public function __construct($_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\BuyerPackageEnclosureType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\PaymentInstructionCodeType::valueIsValid()
     * @uses \EnumType\PaymentInstructionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\BuyerPackageEnclosureType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentInstructionCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentInstructionCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\PaymentInstructionCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
