<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOptionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>PaymentOptionDetails</b> containers that are returned in <b>GeteBayDetails</b> if the <code>PaymentOptionDetails</code> value is used in a <b>DetailName</b> field in the call request. <br><br> <span
 * class="tablenote"><b>Note: </b> Although site-level payment options are still returned in <b>GeteBayDetails</b>, it may be better to use the <b>GetCategoryFeatures</b> call instead, as this call returns the specific payment options that are accepted
 * in specific categories. </span> <br> <span class="tablenote"><b>Note: </b> For sellers opted in to the new eBay Managed Payments program, an accepted payment method is no longer necessary as listing time, so no payment options will be passed in to a
 * <b>PaymentMethods</b> fields in an Add/Revise/Relist call. </span>
 * @subpackage Structs
 */
class PaymentOptionDetailsType extends AbstractStructBase
{
    /**
     * The PaymentOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is the enumeration that the seller would pass in to one of the <b>PaymentMethods</b> fields in an Add/Revise/Relist call (or in to a Payment busines policy).
     * - minOccurs: 0
     * @var string
     */
    public $PaymentOption;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is a text-based/user-friendly description of the payment option.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This string value indicates the version number of the update made to any payment options returned in <b>GeteBayDetails</b>.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time of the last update made to any payment options returned in <b>GeteBayDetails</b>.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentOptionDetailsType
     * @uses PaymentOptionDetailsType::setPaymentOption()
     * @uses PaymentOptionDetailsType::setDescription()
     * @uses PaymentOptionDetailsType::setDetailVersion()
     * @uses PaymentOptionDetailsType::setUpdateTime()
     * @uses PaymentOptionDetailsType::setAny()
     * @param string $paymentOption
     * @param string $description
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($paymentOption = null, $description = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setPaymentOption($paymentOption)
            ->setDescription($description)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get PaymentOption value
     * @return string|null
     */
    public function getPaymentOption()
    {
        return $this->PaymentOption;
    }
    /**
     * Set PaymentOption value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentOption
     * @return \StructType\PaymentOptionDetailsType
     */
    public function setPaymentOption($paymentOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($paymentOption) ? implode(', ', $paymentOption) : var_export($paymentOption, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentOption = $paymentOption;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\PaymentOptionDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\PaymentOptionDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\PaymentOptionDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \StructType\PaymentOptionDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
