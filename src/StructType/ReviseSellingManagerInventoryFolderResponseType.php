<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerInventoryFolderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the status of a revise folder operation.
 * @subpackage Structs
 */
class ReviseSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This container will show the results of the action made on the Selling Manager Inventory folder.
     * - minOccurs: 0
     * @var \StructType\SellingManagerFolderDetailsType
     */
    public $Folder;
    /**
     * Constructor method for ReviseSellingManagerInventoryFolderResponseType
     * @uses ReviseSellingManagerInventoryFolderResponseType::setFolder()
     * @param \StructType\SellingManagerFolderDetailsType $folder
     */
    public function __construct(\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this
            ->setFolder($folder);
    }
    /**
     * Get Folder value
     * @return \StructType\SellingManagerFolderDetailsType|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \StructType\SellingManagerFolderDetailsType $folder
     * @return \StructType\ReviseSellingManagerInventoryFolderResponseType
     */
    public function setFolder(\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReviseSellingManagerInventoryFolderResponseType
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
