<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerTemplateDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes a Selling Manager Template
 * @subpackage Structs
 */
class SellingManagerTemplateDetailsType extends AbstractStructBase
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: ID of the template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateID;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: Name of the template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The SuccessPercent
     * Meta information extracted from the WSDL
     * - documentation: Success ratio.
     * - minOccurs: 0
     * @var float
     */
    public $SuccessPercent;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that this template belongs to.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The Template
     * Meta information extracted from the WSDL
     * - documentation: ItemType object that contains the data for the specified template.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Template;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerTemplateDetailsType
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateID()
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateName()
     * @uses SellingManagerTemplateDetailsType::setSuccessPercent()
     * @uses SellingManagerTemplateDetailsType::setSellingManagerProductDetails()
     * @uses SellingManagerTemplateDetailsType::setTemplate()
     * @uses SellingManagerTemplateDetailsType::setAny()
     * @param string $saleTemplateID
     * @param string $saleTemplateName
     * @param float $successPercent
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \StructType\ItemType $template
     * @param \DOMDocument $any
     */
    public function __construct($saleTemplateID = null, $saleTemplateName = null, $successPercent = null, \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \StructType\ItemType $template = null, \DOMDocument $any = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setSaleTemplateName($saleTemplateName)
            ->setSuccessPercent($successPercent)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setTemplate($template)
            ->setAny($any);
    }
    /**
     * Get SaleTemplateID value
     * @return string|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param string $saleTemplateID
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateID) && !is_string($saleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName()
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateName($saleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateName, true), gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent()
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setSuccessPercent($successPercent = null)
    {
        // validation for constraint: float
        if (!is_null($successPercent) && !(is_float($successPercent) || is_numeric($successPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($successPercent, true), gettype($successPercent)), __LINE__);
        }
        $this->SuccessPercent = $successPercent;
        return $this;
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get Template value
     * @return \StructType\ItemType|null
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param \StructType\ItemType $template
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setTemplate(\StructType\ItemType $template = null)
    {
        $this->Template = $template;
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
     * @return \StructType\SellingManagerTemplateDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
