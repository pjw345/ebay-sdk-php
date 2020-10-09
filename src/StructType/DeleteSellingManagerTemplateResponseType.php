<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager template.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The DeletedSaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template.
     * - minOccurs: 0
     * @var string
     */
    public $DeletedSaleTemplateID;
    /**
     * The DeletedSaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the Selling Manager template.
     * - minOccurs: 0
     * @var string
     */
    public $DeletedSaleTemplateName;
    /**
     * Constructor method for DeleteSellingManagerTemplateResponseType
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateID()
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateName()
     * @param string $deletedSaleTemplateID
     * @param string $deletedSaleTemplateName
     */
    public function __construct($deletedSaleTemplateID = null, $deletedSaleTemplateName = null)
    {
        $this
            ->setDeletedSaleTemplateID($deletedSaleTemplateID)
            ->setDeletedSaleTemplateName($deletedSaleTemplateName);
    }
    /**
     * Get DeletedSaleTemplateID value
     * @return string|null
     */
    public function getDeletedSaleTemplateID()
    {
        return $this->DeletedSaleTemplateID;
    }
    /**
     * Set DeletedSaleTemplateID value
     * @param string $deletedSaleTemplateID
     * @return \StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateID($deletedSaleTemplateID = null)
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateID) && !is_string($deletedSaleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedSaleTemplateID, true), gettype($deletedSaleTemplateID)), __LINE__);
        }
        $this->DeletedSaleTemplateID = $deletedSaleTemplateID;
        return $this;
    }
    /**
     * Get DeletedSaleTemplateName value
     * @return string|null
     */
    public function getDeletedSaleTemplateName()
    {
        return $this->DeletedSaleTemplateName;
    }
    /**
     * Set DeletedSaleTemplateName value
     * @param string $deletedSaleTemplateName
     * @return \StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateName($deletedSaleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateName) && !is_string($deletedSaleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedSaleTemplateName, true), gettype($deletedSaleTemplateName)), __LINE__);
        }
        $this->DeletedSaleTemplateName = $deletedSaleTemplateName;
        return $this;
    }
}
