<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionRuleType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionRuleType extends AbstractStructBase
{
    /**
     * The PromotedStoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $PromotedStoreCategoryID;
    /**
     * The PromotedeBayCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotedeBayCategoryID;
    /**
     * The PromotedKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotedKeywords;
    /**
     * The ReferringItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ReferringItemID;
    /**
     * The ReferringStoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ReferringStoreCategoryID;
    /**
     * The ReferringeBayCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ReferringeBayCategoryID;
    /**
     * The ReferringKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ReferringKeywords;
    /**
     * The PromotionScheme
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionScheme;
    /**
     * The PromotionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionRuleType
     * @uses PromotionRuleType::setPromotedStoreCategoryID()
     * @uses PromotionRuleType::setPromotedeBayCategoryID()
     * @uses PromotionRuleType::setPromotedKeywords()
     * @uses PromotionRuleType::setReferringItemID()
     * @uses PromotionRuleType::setReferringStoreCategoryID()
     * @uses PromotionRuleType::setReferringeBayCategoryID()
     * @uses PromotionRuleType::setReferringKeywords()
     * @uses PromotionRuleType::setPromotionScheme()
     * @uses PromotionRuleType::setPromotionMethod()
     * @uses PromotionRuleType::setAny()
     * @param int $promotedStoreCategoryID
     * @param string $promotedeBayCategoryID
     * @param string $promotedKeywords
     * @param string $referringItemID
     * @param int $referringStoreCategoryID
     * @param string $referringeBayCategoryID
     * @param string $referringKeywords
     * @param string $promotionScheme
     * @param string $promotionMethod
     * @param \DOMDocument $any
     */
    public function __construct($promotedStoreCategoryID = null, $promotedeBayCategoryID = null, $promotedKeywords = null, $referringItemID = null, $referringStoreCategoryID = null, $referringeBayCategoryID = null, $referringKeywords = null, $promotionScheme = null, $promotionMethod = null, \DOMDocument $any = null)
    {
        $this
            ->setPromotedStoreCategoryID($promotedStoreCategoryID)
            ->setPromotedeBayCategoryID($promotedeBayCategoryID)
            ->setPromotedKeywords($promotedKeywords)
            ->setReferringItemID($referringItemID)
            ->setReferringStoreCategoryID($referringStoreCategoryID)
            ->setReferringeBayCategoryID($referringeBayCategoryID)
            ->setReferringKeywords($referringKeywords)
            ->setPromotionScheme($promotionScheme)
            ->setPromotionMethod($promotionMethod)
            ->setAny($any);
    }
    /**
     * Get PromotedStoreCategoryID value
     * @return int|null
     */
    public function getPromotedStoreCategoryID()
    {
        return $this->PromotedStoreCategoryID;
    }
    /**
     * Set PromotedStoreCategoryID value
     * @param int $promotedStoreCategoryID
     * @return \StructType\PromotionRuleType
     */
    public function setPromotedStoreCategoryID($promotedStoreCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($promotedStoreCategoryID) && !(is_int($promotedStoreCategoryID) || ctype_digit($promotedStoreCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotedStoreCategoryID, true), gettype($promotedStoreCategoryID)), __LINE__);
        }
        $this->PromotedStoreCategoryID = $promotedStoreCategoryID;
        return $this;
    }
    /**
     * Get PromotedeBayCategoryID value
     * @return string|null
     */
    public function getPromotedeBayCategoryID()
    {
        return $this->PromotedeBayCategoryID;
    }
    /**
     * Set PromotedeBayCategoryID value
     * @param string $promotedeBayCategoryID
     * @return \StructType\PromotionRuleType
     */
    public function setPromotedeBayCategoryID($promotedeBayCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($promotedeBayCategoryID) && !is_string($promotedeBayCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotedeBayCategoryID, true), gettype($promotedeBayCategoryID)), __LINE__);
        }
        $this->PromotedeBayCategoryID = $promotedeBayCategoryID;
        return $this;
    }
    /**
     * Get PromotedKeywords value
     * @return string|null
     */
    public function getPromotedKeywords()
    {
        return $this->PromotedKeywords;
    }
    /**
     * Set PromotedKeywords value
     * @param string $promotedKeywords
     * @return \StructType\PromotionRuleType
     */
    public function setPromotedKeywords($promotedKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($promotedKeywords) && !is_string($promotedKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotedKeywords, true), gettype($promotedKeywords)), __LINE__);
        }
        $this->PromotedKeywords = $promotedKeywords;
        return $this;
    }
    /**
     * Get ReferringItemID value
     * @return string|null
     */
    public function getReferringItemID()
    {
        return $this->ReferringItemID;
    }
    /**
     * Set ReferringItemID value
     * @param string $referringItemID
     * @return \StructType\PromotionRuleType
     */
    public function setReferringItemID($referringItemID = null)
    {
        // validation for constraint: string
        if (!is_null($referringItemID) && !is_string($referringItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringItemID, true), gettype($referringItemID)), __LINE__);
        }
        $this->ReferringItemID = $referringItemID;
        return $this;
    }
    /**
     * Get ReferringStoreCategoryID value
     * @return int|null
     */
    public function getReferringStoreCategoryID()
    {
        return $this->ReferringStoreCategoryID;
    }
    /**
     * Set ReferringStoreCategoryID value
     * @param int $referringStoreCategoryID
     * @return \StructType\PromotionRuleType
     */
    public function setReferringStoreCategoryID($referringStoreCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($referringStoreCategoryID) && !(is_int($referringStoreCategoryID) || ctype_digit($referringStoreCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referringStoreCategoryID, true), gettype($referringStoreCategoryID)), __LINE__);
        }
        $this->ReferringStoreCategoryID = $referringStoreCategoryID;
        return $this;
    }
    /**
     * Get ReferringeBayCategoryID value
     * @return string|null
     */
    public function getReferringeBayCategoryID()
    {
        return $this->ReferringeBayCategoryID;
    }
    /**
     * Set ReferringeBayCategoryID value
     * @param string $referringeBayCategoryID
     * @return \StructType\PromotionRuleType
     */
    public function setReferringeBayCategoryID($referringeBayCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($referringeBayCategoryID) && !is_string($referringeBayCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringeBayCategoryID, true), gettype($referringeBayCategoryID)), __LINE__);
        }
        $this->ReferringeBayCategoryID = $referringeBayCategoryID;
        return $this;
    }
    /**
     * Get ReferringKeywords value
     * @return string|null
     */
    public function getReferringKeywords()
    {
        return $this->ReferringKeywords;
    }
    /**
     * Set ReferringKeywords value
     * @param string $referringKeywords
     * @return \StructType\PromotionRuleType
     */
    public function setReferringKeywords($referringKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($referringKeywords) && !is_string($referringKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringKeywords, true), gettype($referringKeywords)), __LINE__);
        }
        $this->ReferringKeywords = $referringKeywords;
        return $this;
    }
    /**
     * Get PromotionScheme value
     * @return string|null
     */
    public function getPromotionScheme()
    {
        return $this->PromotionScheme;
    }
    /**
     * Set PromotionScheme value
     * @uses \EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionScheme
     * @return \StructType\PromotionRuleType
     */
    public function setPromotionScheme($promotionScheme = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionSchemeCodeType::valueIsValid($promotionScheme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionSchemeCodeType', is_array($promotionScheme) ? implode(', ', $promotionScheme) : var_export($promotionScheme, true), implode(', ', \EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionScheme = $promotionScheme;
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod()
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \EnumType\PromotionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionMethod
     * @return \StructType\PromotionRuleType
     */
    public function setPromotionMethod($promotionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionMethodCodeType', is_array($promotionMethod) ? implode(', ', $promotionMethod) : var_export($promotionMethod, true), implode(', ', \EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
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
     * @return \StructType\PromotionRuleType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
