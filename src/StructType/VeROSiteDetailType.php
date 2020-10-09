<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROSiteDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>VeROSiteDetailType</b> container, which is returned in <b>GetVeROReasonCodeDetails</b>. Each <b>VeROSiteDetailType</b> container will contain one or more reasons how an eBay listing could possibly infringe upon
 * the intellectual property rights of a product owner.
 * @subpackage Structs
 */
class VeROSiteDetailType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay site for which reason code details are returned.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The ReasonCodeDetail
     * Meta information extracted from the WSDL
     * - documentation: This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container
     * also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ReasonCodeDetailType[]
     */
    public $ReasonCodeDetail;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VeROSiteDetailType
     * @uses VeROSiteDetailType::setSite()
     * @uses VeROSiteDetailType::setReasonCodeDetail()
     * @uses VeROSiteDetailType::setAny()
     * @param string $site
     * @param \StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @param \DOMDocument $any
     */
    public function __construct($site = null, array $reasonCodeDetail = array(), \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setReasonCodeDetail($reasonCodeDetail)
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
     * @return \StructType\VeROSiteDetailType
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
     * Get ReasonCodeDetail value
     * @return \StructType\ReasonCodeDetailType[]|null
     */
    public function getReasonCodeDetail()
    {
        return $this->ReasonCodeDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setReasonCodeDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReasonCodeDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonCodeDetailForArrayConstraintsFromSetReasonCodeDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROSiteDetailTypeReasonCodeDetailItem) {
            // validation for constraint: itemType
            if (!$veROSiteDetailTypeReasonCodeDetailItem instanceof \StructType\ReasonCodeDetailType) {
                $invalidValues[] = is_object($veROSiteDetailTypeReasonCodeDetailItem) ? get_class($veROSiteDetailTypeReasonCodeDetailItem) : sprintf('%s(%s)', gettype($veROSiteDetailTypeReasonCodeDetailItem), var_export($veROSiteDetailTypeReasonCodeDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReasonCodeDetail property can only contain items of type \StructType\ReasonCodeDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ReasonCodeDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @return \StructType\VeROSiteDetailType
     */
    public function setReasonCodeDetail(array $reasonCodeDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($reasonCodeDetailArrayErrorMessage = self::validateReasonCodeDetailForArrayConstraintsFromSetReasonCodeDetail($reasonCodeDetail))) {
            throw new \InvalidArgumentException($reasonCodeDetailArrayErrorMessage, __LINE__);
        }
        $this->ReasonCodeDetail = $reasonCodeDetail;
        return $this;
    }
    /**
     * Add item to ReasonCodeDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\ReasonCodeDetailType $item
     * @return \StructType\VeROSiteDetailType
     */
    public function addToReasonCodeDetail(\StructType\ReasonCodeDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReasonCodeDetailType) {
            throw new \InvalidArgumentException(sprintf('The ReasonCodeDetail property can only contain items of type \StructType\ReasonCodeDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReasonCodeDetail[] = $item;
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
     * @return \StructType\VeROSiteDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
