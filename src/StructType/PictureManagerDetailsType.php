<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerDetailsType StructType
 * @subpackage Structs
 */
class PictureManagerDetailsType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: This type is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The StorageUsed
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $StorageUsed;
    /**
     * The TotalStorageAvailable
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $TotalStorageAvailable;
    /**
     * The KeepOriginal
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $KeepOriginal;
    /**
     * The WatermarkEPS
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $WatermarkEPS;
    /**
     * The WatermarkUserID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $WatermarkUserID;
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PictureManagerFolderType[]
     */
    public $Folder;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerDetailsType
     * @uses PictureManagerDetailsType::setSubscriptionLevel()
     * @uses PictureManagerDetailsType::setStorageUsed()
     * @uses PictureManagerDetailsType::setTotalStorageAvailable()
     * @uses PictureManagerDetailsType::setKeepOriginal()
     * @uses PictureManagerDetailsType::setWatermarkEPS()
     * @uses PictureManagerDetailsType::setWatermarkUserID()
     * @uses PictureManagerDetailsType::setFolder()
     * @uses PictureManagerDetailsType::setAny()
     * @param string $subscriptionLevel
     * @param int $storageUsed
     * @param int $totalStorageAvailable
     * @param bool $keepOriginal
     * @param bool $watermarkEPS
     * @param bool $watermarkUserID
     * @param \StructType\PictureManagerFolderType[] $folder
     * @param \DOMDocument $any
     */
    public function __construct($subscriptionLevel = null, $storageUsed = null, $totalStorageAvailable = null, $keepOriginal = null, $watermarkEPS = null, $watermarkUserID = null, array $folder = array(), \DOMDocument $any = null)
    {
        $this
            ->setSubscriptionLevel($subscriptionLevel)
            ->setStorageUsed($storageUsed)
            ->setTotalStorageAvailable($totalStorageAvailable)
            ->setKeepOriginal($keepOriginal)
            ->setWatermarkEPS($watermarkEPS)
            ->setWatermarkUserID($watermarkUserID)
            ->setFolder($folder)
            ->setAny($any);
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \StructType\PictureManagerDetailsType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureManagerSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * Get StorageUsed value
     * @return int|null
     */
    public function getStorageUsed()
    {
        return $this->StorageUsed;
    }
    /**
     * Set StorageUsed value
     * @param int $storageUsed
     * @return \StructType\PictureManagerDetailsType
     */
    public function setStorageUsed($storageUsed = null)
    {
        // validation for constraint: int
        if (!is_null($storageUsed) && !(is_int($storageUsed) || ctype_digit($storageUsed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageUsed, true), gettype($storageUsed)), __LINE__);
        }
        $this->StorageUsed = $storageUsed;
        return $this;
    }
    /**
     * Get TotalStorageAvailable value
     * @return int|null
     */
    public function getTotalStorageAvailable()
    {
        return $this->TotalStorageAvailable;
    }
    /**
     * Set TotalStorageAvailable value
     * @param int $totalStorageAvailable
     * @return \StructType\PictureManagerDetailsType
     */
    public function setTotalStorageAvailable($totalStorageAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalStorageAvailable) && !(is_int($totalStorageAvailable) || ctype_digit($totalStorageAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalStorageAvailable, true), gettype($totalStorageAvailable)), __LINE__);
        }
        $this->TotalStorageAvailable = $totalStorageAvailable;
        return $this;
    }
    /**
     * Get KeepOriginal value
     * @return bool|null
     */
    public function getKeepOriginal()
    {
        return $this->KeepOriginal;
    }
    /**
     * Set KeepOriginal value
     * @param bool $keepOriginal
     * @return \StructType\PictureManagerDetailsType
     */
    public function setKeepOriginal($keepOriginal = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepOriginal) && !is_bool($keepOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepOriginal, true), gettype($keepOriginal)), __LINE__);
        }
        $this->KeepOriginal = $keepOriginal;
        return $this;
    }
    /**
     * Get WatermarkEPS value
     * @return bool|null
     */
    public function getWatermarkEPS()
    {
        return $this->WatermarkEPS;
    }
    /**
     * Set WatermarkEPS value
     * @param bool $watermarkEPS
     * @return \StructType\PictureManagerDetailsType
     */
    public function setWatermarkEPS($watermarkEPS = null)
    {
        // validation for constraint: boolean
        if (!is_null($watermarkEPS) && !is_bool($watermarkEPS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($watermarkEPS, true), gettype($watermarkEPS)), __LINE__);
        }
        $this->WatermarkEPS = $watermarkEPS;
        return $this;
    }
    /**
     * Get WatermarkUserID value
     * @return bool|null
     */
    public function getWatermarkUserID()
    {
        return $this->WatermarkUserID;
    }
    /**
     * Set WatermarkUserID value
     * @param bool $watermarkUserID
     * @return \StructType\PictureManagerDetailsType
     */
    public function setWatermarkUserID($watermarkUserID = null)
    {
        // validation for constraint: boolean
        if (!is_null($watermarkUserID) && !is_bool($watermarkUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($watermarkUserID, true), gettype($watermarkUserID)), __LINE__);
        }
        $this->WatermarkUserID = $watermarkUserID;
        return $this;
    }
    /**
     * Get Folder value
     * @return \StructType\PictureManagerFolderType[]|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * This method is responsible for validating the values passed to the setFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderForArrayConstraintsFromSetFolder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerDetailsTypeFolderItem) {
            // validation for constraint: itemType
            if (!$pictureManagerDetailsTypeFolderItem instanceof \StructType\PictureManagerFolderType) {
                $invalidValues[] = is_object($pictureManagerDetailsTypeFolderItem) ? get_class($pictureManagerDetailsTypeFolderItem) : sprintf('%s(%s)', gettype($pictureManagerDetailsTypeFolderItem), var_export($pictureManagerDetailsTypeFolderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Folder property can only contain items of type \StructType\PictureManagerFolderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Folder value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerFolderType[] $folder
     * @return \StructType\PictureManagerDetailsType
     */
    public function setFolder(array $folder = array())
    {
        // validation for constraint: array
        if ('' !== ($folderArrayErrorMessage = self::validateFolderForArrayConstraintsFromSetFolder($folder))) {
            throw new \InvalidArgumentException($folderArrayErrorMessage, __LINE__);
        }
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Add item to Folder value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerFolderType $item
     * @return \StructType\PictureManagerDetailsType
     */
    public function addToFolder(\StructType\PictureManagerFolderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PictureManagerFolderType) {
            throw new \InvalidArgumentException(sprintf('The Folder property can only contain items of type \StructType\PictureManagerFolderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Folder[] = $item;
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
     * @return \StructType\PictureManagerDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
