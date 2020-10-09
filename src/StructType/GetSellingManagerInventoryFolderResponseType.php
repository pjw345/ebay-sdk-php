<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryFolderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the folder structure of the specified Selling Manager Inventory folder.
 * @subpackage Structs
 */
class GetSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on the Selling Manager Inventory folder that matches the input criteria, as well as detailed information about any child folders if <b>FullRecursion</b> was set to <code>true</code> or
     * if the <b>MaxDepth</b> field is set to an integer value greater than <code>0</code>.
     * - minOccurs: 0
     * @var \StructType\SellingManagerFolderDetailsType
     */
    public $Folder;
    /**
     * Constructor method for GetSellingManagerInventoryFolderResponseType
     * @uses GetSellingManagerInventoryFolderResponseType::setFolder()
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
     * @return \StructType\GetSellingManagerInventoryFolderResponseType
     */
    public function setFolder(\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
}
