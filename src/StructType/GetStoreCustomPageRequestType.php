<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCustomPageRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve a specific custom page or all custom pages created for a seller's eBay Store. The eBay seller must have an eBay Store subscription to use this call.
 * @subpackage Structs
 */
class GetStoreCustomPageRequestType extends AbstractRequestType
{
    /**
     * The PageID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to retrieved detailed information on a specific custom page. If no <b>PageID</b> is specified, then all of the seller's custom pages are returned, but without the page content.
     * - minOccurs: 0
     * @var int
     */
    public $PageID;
    /**
     * Constructor method for GetStoreCustomPageRequestType
     * @uses GetStoreCustomPageRequestType::setPageID()
     * @param int $pageID
     */
    public function __construct($pageID = null)
    {
        $this
            ->setPageID($pageID);
    }
    /**
     * Get PageID value
     * @return int|null
     */
    public function getPageID()
    {
        return $this->PageID;
    }
    /**
     * Set PageID value
     * @param int $pageID
     * @return \StructType\GetStoreCustomPageRequestType
     */
    public function setPageID($pageID = null)
    {
        // validation for constraint: int
        if (!is_null($pageID) && !(is_int($pageID) || ctype_digit($pageID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageID, true), gettype($pageID)), __LINE__);
        }
        $this->PageID = $pageID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetStoreCustomPageRequestType
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
