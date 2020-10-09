<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Removes an inventory folder when a user deletes it in My eBay. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder to be deleted.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * Constructor method for DeleteSellingManagerInventoryFolderRequestType
     * @uses DeleteSellingManagerInventoryFolderRequestType::setFolderID()
     * @param int $folderID
     */
    public function __construct($folderID = null)
    {
        $this
            ->setFolderID($folderID);
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \StructType\DeleteSellingManagerInventoryFolderRequestType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        return $this;
    }
}
