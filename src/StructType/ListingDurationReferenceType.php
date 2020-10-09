<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the type of listing as an attribute on the <b>ListingDuration</b> node.
 * @subpackage Structs
 */
class ListingDurationReferenceType extends AbstractStructBase
{
    /**
     * The _
     * @var int
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The type of listing a set of durations describes.
     * @var string
     */
    public $type;
    /**
     * Constructor method for ListingDurationReferenceType
     * @uses ListingDurationReferenceType::set_()
     * @uses ListingDurationReferenceType::setType()
     * @param int $_
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
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \StructType\ListingDurationReferenceType
     */
    public function set_($_ = null)
    {
        // validation for constraint: int
        if (!is_null($_) && !(is_int($_) || ctype_digit($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_, true), gettype($_)), __LINE__);
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
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\ListingDurationReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
