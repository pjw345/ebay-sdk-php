<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the template ID and the estimated fees for the revised listing.
 * @subpackage Structs
 */
class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: This sale template ID uniquely identifies the template that was revised in the request. This sale template ID should match the template ID specified in the request. specified for the call.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: Child elements contain the estimated listing fees for the revised item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. Revising an item does not itself incur a fee.
     * However, certain item properties are fee-based and result in the return of fees in the call's response.
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay. If the primary category
     * has not changed or it has expired with no replacement, CategoryID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay. If the secondary
     * category has not changed or it has expired with no replacement, Category2ID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The VerifyOnly
     * Meta information extracted from the WSDL
     * - documentation: Instead of revising, only verifies the template.
     * - minOccurs: 0
     * @var bool
     */
    public $VerifyOnly;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the sale template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that this template belongs to.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * Constructor method for ReviseSellingManagerTemplateResponseType
     * @uses ReviseSellingManagerTemplateResponseType::setSaleTemplateID()
     * @uses ReviseSellingManagerTemplateResponseType::setFees()
     * @uses ReviseSellingManagerTemplateResponseType::setCategoryID()
     * @uses ReviseSellingManagerTemplateResponseType::setCategory2ID()
     * @uses ReviseSellingManagerTemplateResponseType::setVerifyOnly()
     * @uses ReviseSellingManagerTemplateResponseType::setSaleTemplateName()
     * @uses ReviseSellingManagerTemplateResponseType::setSellingManagerProductDetails()
     * @param int $saleTemplateID
     * @param \StructType\FeesType $fees
     * @param string $categoryID
     * @param string $category2ID
     * @param bool $verifyOnly
     * @param string $saleTemplateName
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    public function __construct($saleTemplateID = null, \StructType\FeesType $fees = null, $categoryID = null, $category2ID = null, $verifyOnly = null, $saleTemplateName = null, \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setFees($fees)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setVerifyOnly($verifyOnly)
            ->setSaleTemplateName($saleTemplateName)
            ->setSellingManagerProductDetails($sellingManagerProductDetails);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get VerifyOnly value
     * @return bool|null
     */
    public function getVerifyOnly()
    {
        return $this->VerifyOnly;
    }
    /**
     * Set VerifyOnly value
     * @param bool $verifyOnly
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setVerifyOnly($verifyOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifyOnly) && !is_bool($verifyOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifyOnly, true), gettype($verifyOnly)), __LINE__);
        }
        $this->VerifyOnly = $verifyOnly;
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
     * @return \StructType\ReviseSellingManagerTemplateResponseType
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
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReviseSellingManagerTemplateResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
