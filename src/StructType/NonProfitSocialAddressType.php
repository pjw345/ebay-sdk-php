<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonProfitSocialAddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>NonProfitSocialAddress</b> container, which identifies the nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the
 * charity organization is associated with.
 * @subpackage Structs
 */
class NonProfitSocialAddressType extends AbstractStructBase
{
    /**
     * The SocialAddressType
     * Meta information extracted from the WSDL
     * - documentation: Enumeration value that indicates the social networking site that the nonprofit charity organization is associated with. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $SocialAddressType;
    /**
     * The SocialAddressId
     * Meta information extracted from the WSDL
     * - documentation: The account ID/handle associated with the nonprofit charity organization's social networking site. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $SocialAddressId;
    /**
     * Constructor method for NonProfitSocialAddressType
     * @uses NonProfitSocialAddressType::setSocialAddressType()
     * @uses NonProfitSocialAddressType::setSocialAddressId()
     * @param string $socialAddressType
     * @param string $socialAddressId
     */
    public function __construct($socialAddressType = null, $socialAddressId = null)
    {
        $this
            ->setSocialAddressType($socialAddressType)
            ->setSocialAddressId($socialAddressId);
    }
    /**
     * Get SocialAddressType value
     * @return string|null
     */
    public function getSocialAddressType()
    {
        return $this->SocialAddressType;
    }
    /**
     * Set SocialAddressType value
     * @uses \EnumType\SocialAddressTypeCodeType::valueIsValid()
     * @uses \EnumType\SocialAddressTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $socialAddressType
     * @return \StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressType($socialAddressType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SocialAddressTypeCodeType::valueIsValid($socialAddressType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SocialAddressTypeCodeType', is_array($socialAddressType) ? implode(', ', $socialAddressType) : var_export($socialAddressType, true), implode(', ', \EnumType\SocialAddressTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SocialAddressType = $socialAddressType;
        return $this;
    }
    /**
     * Get SocialAddressId value
     * @return string|null
     */
    public function getSocialAddressId()
    {
        return $this->SocialAddressId;
    }
    /**
     * Set SocialAddressId value
     * @param string $socialAddressId
     * @return \StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressId($socialAddressId = null)
    {
        // validation for constraint: string
        if (!is_null($socialAddressId) && !is_string($socialAddressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socialAddressId, true), gettype($socialAddressId)), __LINE__);
        }
        $this->SocialAddressId = $socialAddressId;
        return $this;
    }
}
