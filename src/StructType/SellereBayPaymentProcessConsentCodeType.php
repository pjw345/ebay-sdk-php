<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellereBayPaymentProcessConsentCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SellereBayPaymentProcessConsentCodeType extends AbstractStructBase
{
    /**
     * The PayoutMethodSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayoutMethodSet;
    /**
     * The PayoutMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PayoutMethod;
    /**
     * The UserAgreementInfo
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UserAgreementInfoType[]
     */
    public $UserAgreementInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellereBayPaymentProcessConsentCodeType
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethodSet()
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethod()
     * @uses SellereBayPaymentProcessConsentCodeType::setUserAgreementInfo()
     * @uses SellereBayPaymentProcessConsentCodeType::setAny()
     * @param bool $payoutMethodSet
     * @param string $payoutMethod
     * @param \StructType\UserAgreementInfoType[] $userAgreementInfo
     * @param \DOMDocument $any
     */
    public function __construct($payoutMethodSet = null, $payoutMethod = null, array $userAgreementInfo = array(), \DOMDocument $any = null)
    {
        $this
            ->setPayoutMethodSet($payoutMethodSet)
            ->setPayoutMethod($payoutMethod)
            ->setUserAgreementInfo($userAgreementInfo)
            ->setAny($any);
    }
    /**
     * Get PayoutMethodSet value
     * @return bool|null
     */
    public function getPayoutMethodSet()
    {
        return $this->PayoutMethodSet;
    }
    /**
     * Set PayoutMethodSet value
     * @param bool $payoutMethodSet
     * @return \StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethodSet($payoutMethodSet = null)
    {
        // validation for constraint: boolean
        if (!is_null($payoutMethodSet) && !is_bool($payoutMethodSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payoutMethodSet, true), gettype($payoutMethodSet)), __LINE__);
        }
        $this->PayoutMethodSet = $payoutMethodSet;
        return $this;
    }
    /**
     * Get PayoutMethod value
     * @return string|null
     */
    public function getPayoutMethod()
    {
        return $this->PayoutMethod;
    }
    /**
     * Set PayoutMethod value
     * @uses \EnumType\PayoutMethodType::valueIsValid()
     * @uses \EnumType\PayoutMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payoutMethod
     * @return \StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethod($payoutMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PayoutMethodType::valueIsValid($payoutMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PayoutMethodType', is_array($payoutMethod) ? implode(', ', $payoutMethod) : var_export($payoutMethod, true), implode(', ', \EnumType\PayoutMethodType::getValidValues())), __LINE__);
        }
        $this->PayoutMethod = $payoutMethod;
        return $this;
    }
    /**
     * Get UserAgreementInfo value
     * @return \StructType\UserAgreementInfoType[]|null
     */
    public function getUserAgreementInfo()
    {
        return $this->UserAgreementInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setUserAgreementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserAgreementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserAgreementInfoForArrayConstraintsFromSetUserAgreementInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) {
            // validation for constraint: itemType
            if (!$sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem instanceof \StructType\UserAgreementInfoType) {
                $invalidValues[] = is_object($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) ? get_class($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) : sprintf('%s(%s)', gettype($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem), var_export($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserAgreementInfo property can only contain items of type \StructType\UserAgreementInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserAgreementInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\UserAgreementInfoType[] $userAgreementInfo
     * @return \StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setUserAgreementInfo(array $userAgreementInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($userAgreementInfoArrayErrorMessage = self::validateUserAgreementInfoForArrayConstraintsFromSetUserAgreementInfo($userAgreementInfo))) {
            throw new \InvalidArgumentException($userAgreementInfoArrayErrorMessage, __LINE__);
        }
        $this->UserAgreementInfo = $userAgreementInfo;
        return $this;
    }
    /**
     * Add item to UserAgreementInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\UserAgreementInfoType $item
     * @return \StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function addToUserAgreementInfo(\StructType\UserAgreementInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UserAgreementInfoType) {
            throw new \InvalidArgumentException(sprintf('The UserAgreementInfo property can only contain items of type \StructType\UserAgreementInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserAgreementInfo[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
