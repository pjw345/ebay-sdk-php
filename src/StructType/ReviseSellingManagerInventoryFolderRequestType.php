<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is uses to rename and/or move a Selling Manager Inventory folder. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     * - minOccurs: 0
     * @var \StructType\SellingManagerFolderDetailsType
     */
    public $Folder;
    /**
     * Constructor method for ReviseSellingManagerInventoryFolderRequestType
     * @uses ReviseSellingManagerInventoryFolderRequestType::setFolder()
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
     * @return \StructType\ReviseSellingManagerInventoryFolderRequestType
     */
    public function setFolder(\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
}
