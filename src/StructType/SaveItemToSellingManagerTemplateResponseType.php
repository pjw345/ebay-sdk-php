<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveItemToSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>SaveItemToSellingManagerTemplate</b> call. A successful call will return a <b>TemplateID</b> value for the newly-created Selling Manager template.
 * @subpackage Structs
 */
class SaveItemToSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The TemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the newly-created Selling Manager template. As long as the call was successful, this field is always returned.
     * - minOccurs: 0
     * @var int
     */
    public $TemplateID;
    /**
     * Constructor method for SaveItemToSellingManagerTemplateResponseType
     * @uses SaveItemToSellingManagerTemplateResponseType::setTemplateID()
     * @param int $templateID
     */
    public function __construct($templateID = null)
    {
        $this
            ->setTemplateID($templateID);
    }
    /**
     * Get TemplateID value
     * @return int|null
     */
    public function getTemplateID()
    {
        return $this->TemplateID;
    }
    /**
     * Set TemplateID value
     * @param int $templateID
     * @return \StructType\SaveItemToSellingManagerTemplateResponseType
     */
    public function setTemplateID($templateID = null)
    {
        // validation for constraint: int
        if (!is_null($templateID) && !(is_int($templateID) || ctype_digit($templateID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateID, true), gettype($templateID)), __LINE__);
        }
        $this->TemplateID = $templateID;
        return $this;
    }
}
