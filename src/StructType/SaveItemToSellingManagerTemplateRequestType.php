<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveItemToSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates a Selling Manager template based on an existing eBay listing. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use
 * this call.
 * @subpackage Structs
 */
class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing which should be used as a model to create the Selling Manager template and save it to Selling Manager inventory. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: Associates the new template with a product.
     * - minOccurs: 0
     * @var int
     */
    public $ProductID;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - documentation: Name associated with the template. If no name is submitted, the template will be named automatically.
     * - minOccurs: 0
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for SaveItemToSellingManagerTemplateRequestType
     * @uses SaveItemToSellingManagerTemplateRequestType::setItemID()
     * @uses SaveItemToSellingManagerTemplateRequestType::setProductID()
     * @uses SaveItemToSellingManagerTemplateRequestType::setTemplateName()
     * @param string $itemID
     * @param int $productID
     * @param string $templateName
     */
    public function __construct($itemID = null, $productID = null, $templateName = null)
    {
        $this
            ->setItemID($itemID)
            ->setProductID($productID)
            ->setTemplateName($templateName);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        return $this;
    }
}
