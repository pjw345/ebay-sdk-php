<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerProtectionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>ApplyBuyerProtection</strong> container, which consists of details related to whether or not the item is eligible for buyer protection and which of the buyer protection programs will cover the item.
 * @subpackage Structs
 */
class BuyerProtectionDetailsType extends AbstractStructBase
{
    /**
     * The BuyerProtectionSource
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the type of buyer protection program applicable for the item. This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtectionSource;
    /**
     * The BuyerProtectionStatus
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the item's eligibility for the buyer protection program listed in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field. This field is always returned with the
     * <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtectionStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerProtectionDetailsType
     * @uses BuyerProtectionDetailsType::setBuyerProtectionSource()
     * @uses BuyerProtectionDetailsType::setBuyerProtectionStatus()
     * @uses BuyerProtectionDetailsType::setAny()
     * @param string $buyerProtectionSource
     * @param string $buyerProtectionStatus
     * @param \DOMDocument $any
     */
    public function __construct($buyerProtectionSource = null, $buyerProtectionStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyerProtectionSource($buyerProtectionSource)
            ->setBuyerProtectionStatus($buyerProtectionStatus)
            ->setAny($any);
    }
    /**
     * Get BuyerProtectionSource value
     * @return string|null
     */
    public function getBuyerProtectionSource()
    {
        return $this->BuyerProtectionSource;
    }
    /**
     * Set BuyerProtectionSource value
     * @uses \EnumType\BuyerProtectionSourceCodeType::valueIsValid()
     * @uses \EnumType\BuyerProtectionSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtectionSource
     * @return \StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionSource($buyerProtectionSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerProtectionSourceCodeType::valueIsValid($buyerProtectionSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerProtectionSourceCodeType', is_array($buyerProtectionSource) ? implode(', ', $buyerProtectionSource) : var_export($buyerProtectionSource, true), implode(', ', \EnumType\BuyerProtectionSourceCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionSource = $buyerProtectionSource;
        return $this;
    }
    /**
     * Get BuyerProtectionStatus value
     * @return string|null
     */
    public function getBuyerProtectionStatus()
    {
        return $this->BuyerProtectionStatus;
    }
    /**
     * Set BuyerProtectionStatus value
     * @uses \EnumType\BuyerProtectionCodeType::valueIsValid()
     * @uses \EnumType\BuyerProtectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtectionStatus
     * @return \StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionStatus($buyerProtectionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerProtectionCodeType::valueIsValid($buyerProtectionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerProtectionCodeType', is_array($buyerProtectionStatus) ? implode(', ', $buyerProtectionStatus) : var_export($buyerProtectionStatus, true), implode(', ', \EnumType\BuyerProtectionCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionStatus = $buyerProtectionStatus;
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
     * @return \StructType\BuyerProtectionDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
