<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAgreementInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UserAgreementInfoType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The SellereBayPaymentProcessStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellereBayPaymentProcessStatus;
    /**
     * The AcceptedTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AcceptedTime;
    /**
     * The SellereBayPaymentProcessEnableTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellereBayPaymentProcessEnableTime;
    /**
     * The UserAgreementURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UserAgreementURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserAgreementInfoType
     * @uses UserAgreementInfoType::setSite()
     * @uses UserAgreementInfoType::setSellereBayPaymentProcessStatus()
     * @uses UserAgreementInfoType::setAcceptedTime()
     * @uses UserAgreementInfoType::setSellereBayPaymentProcessEnableTime()
     * @uses UserAgreementInfoType::setUserAgreementURL()
     * @uses UserAgreementInfoType::setAny()
     * @param string $site
     * @param string $sellereBayPaymentProcessStatus
     * @param string $acceptedTime
     * @param string $sellereBayPaymentProcessEnableTime
     * @param string $userAgreementURL
     * @param \DOMDocument $any
     */
    public function __construct($site = null, $sellereBayPaymentProcessStatus = null, $acceptedTime = null, $sellereBayPaymentProcessEnableTime = null, $userAgreementURL = null, \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus)
            ->setAcceptedTime($acceptedTime)
            ->setSellereBayPaymentProcessEnableTime($sellereBayPaymentProcessEnableTime)
            ->setUserAgreementURL($userAgreementURL)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \StructType\UserAgreementInfoType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessStatus value
     * @return string|null
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->SellereBayPaymentProcessStatus;
    }
    /**
     * Set SellereBayPaymentProcessStatus value
     * @uses \EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid()
     * @uses \EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellereBayPaymentProcessStatus
     * @return \StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid($sellereBayPaymentProcessStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellereBayPaymentProcessStatusCodeType', is_array($sellereBayPaymentProcessStatus) ? implode(', ', $sellereBayPaymentProcessStatus) : var_export($sellereBayPaymentProcessStatus, true), implode(', ', \EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        return $this;
    }
    /**
     * Get AcceptedTime value
     * @return string|null
     */
    public function getAcceptedTime()
    {
        return $this->AcceptedTime;
    }
    /**
     * Set AcceptedTime value
     * @param string $acceptedTime
     * @return \StructType\UserAgreementInfoType
     */
    public function setAcceptedTime($acceptedTime = null)
    {
        // validation for constraint: string
        if (!is_null($acceptedTime) && !is_string($acceptedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptedTime, true), gettype($acceptedTime)), __LINE__);
        }
        $this->AcceptedTime = $acceptedTime;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessEnableTime value
     * @return string|null
     */
    public function getSellereBayPaymentProcessEnableTime()
    {
        return $this->SellereBayPaymentProcessEnableTime;
    }
    /**
     * Set SellereBayPaymentProcessEnableTime value
     * @param string $sellereBayPaymentProcessEnableTime
     * @return \StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessEnableTime($sellereBayPaymentProcessEnableTime = null)
    {
        // validation for constraint: string
        if (!is_null($sellereBayPaymentProcessEnableTime) && !is_string($sellereBayPaymentProcessEnableTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellereBayPaymentProcessEnableTime, true), gettype($sellereBayPaymentProcessEnableTime)), __LINE__);
        }
        $this->SellereBayPaymentProcessEnableTime = $sellereBayPaymentProcessEnableTime;
        return $this;
    }
    /**
     * Get UserAgreementURL value
     * @return string|null
     */
    public function getUserAgreementURL()
    {
        return $this->UserAgreementURL;
    }
    /**
     * Set UserAgreementURL value
     * @param string $userAgreementURL
     * @return \StructType\UserAgreementInfoType
     */
    public function setUserAgreementURL($userAgreementURL = null)
    {
        // validation for constraint: string
        if (!is_null($userAgreementURL) && !is_string($userAgreementURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userAgreementURL, true), gettype($userAgreementURL)), __LINE__);
        }
        $this->UserAgreementURL = $userAgreementURL;
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
     * @return \StructType\UserAgreementInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
