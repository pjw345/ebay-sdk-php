<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary data for a given user's alerts and messages. This includes the numbers of new alerts and messages, unresolved alerts, flagged messages, and total alerts and messages.
 * @subpackage Structs
 */
class MyMessagesSummaryType extends AbstractStructBase
{
    /**
     * The FolderSummary
     * Meta information extracted from the WSDL
     * - documentation: Folder summary for each folder. Always returned for detail level ReturnSummary.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MyMessagesFolderSummaryType[]
     */
    public $FolderSummary;
    /**
     * The NewAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $NewAlertCount;
    /**
     * The NewMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $NewMessageCount;
    /**
     * The UnresolvedAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $UnresolvedAlertCount;
    /**
     * The FlaggedMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of messages that have been flagged. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $FlaggedMessageCount;
    /**
     * The TotalAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAlertCount;
    /**
     * The TotalMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of messages for a given user. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $TotalMessageCount;
    /**
     * The NewHighPriorityCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of new high priority messages that a given user has.
     * - minOccurs: 0
     * @var int
     */
    public $NewHighPriorityCount;
    /**
     * The TotalHighPriorityCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of high priority messages that a given user has.
     * - minOccurs: 0
     * @var int
     */
    public $TotalHighPriorityCount;
    /**
     * Constructor method for MyMessagesSummaryType
     * @uses MyMessagesSummaryType::setFolderSummary()
     * @uses MyMessagesSummaryType::setNewAlertCount()
     * @uses MyMessagesSummaryType::setNewMessageCount()
     * @uses MyMessagesSummaryType::setUnresolvedAlertCount()
     * @uses MyMessagesSummaryType::setFlaggedMessageCount()
     * @uses MyMessagesSummaryType::setTotalAlertCount()
     * @uses MyMessagesSummaryType::setTotalMessageCount()
     * @uses MyMessagesSummaryType::setNewHighPriorityCount()
     * @uses MyMessagesSummaryType::setTotalHighPriorityCount()
     * @param \StructType\MyMessagesFolderSummaryType[] $folderSummary
     * @param int $newAlertCount
     * @param int $newMessageCount
     * @param int $unresolvedAlertCount
     * @param int $flaggedMessageCount
     * @param int $totalAlertCount
     * @param int $totalMessageCount
     * @param int $newHighPriorityCount
     * @param int $totalHighPriorityCount
     */
    public function __construct(array $folderSummary = array(), $newAlertCount = null, $newMessageCount = null, $unresolvedAlertCount = null, $flaggedMessageCount = null, $totalAlertCount = null, $totalMessageCount = null, $newHighPriorityCount = null, $totalHighPriorityCount = null)
    {
        $this
            ->setFolderSummary($folderSummary)
            ->setNewAlertCount($newAlertCount)
            ->setNewMessageCount($newMessageCount)
            ->setUnresolvedAlertCount($unresolvedAlertCount)
            ->setFlaggedMessageCount($flaggedMessageCount)
            ->setTotalAlertCount($totalAlertCount)
            ->setTotalMessageCount($totalMessageCount)
            ->setNewHighPriorityCount($newHighPriorityCount)
            ->setTotalHighPriorityCount($totalHighPriorityCount);
    }
    /**
     * Get FolderSummary value
     * @return \StructType\MyMessagesFolderSummaryType[]|null
     */
    public function getFolderSummary()
    {
        return $this->FolderSummary;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderSummary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderSummaryForArrayConstraintsFromSetFolderSummary(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesSummaryTypeFolderSummaryItem) {
            // validation for constraint: itemType
            if (!$myMessagesSummaryTypeFolderSummaryItem instanceof \StructType\MyMessagesFolderSummaryType) {
                $invalidValues[] = is_object($myMessagesSummaryTypeFolderSummaryItem) ? get_class($myMessagesSummaryTypeFolderSummaryItem) : sprintf('%s(%s)', gettype($myMessagesSummaryTypeFolderSummaryItem), var_export($myMessagesSummaryTypeFolderSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderSummary property can only contain items of type \StructType\MyMessagesFolderSummaryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FolderSummary value
     * @throws \InvalidArgumentException
     * @param \StructType\MyMessagesFolderSummaryType[] $folderSummary
     * @return \StructType\MyMessagesSummaryType
     */
    public function setFolderSummary(array $folderSummary = array())
    {
        // validation for constraint: array
        if ('' !== ($folderSummaryArrayErrorMessage = self::validateFolderSummaryForArrayConstraintsFromSetFolderSummary($folderSummary))) {
            throw new \InvalidArgumentException($folderSummaryArrayErrorMessage, __LINE__);
        }
        $this->FolderSummary = $folderSummary;
        return $this;
    }
    /**
     * Add item to FolderSummary value
     * @throws \InvalidArgumentException
     * @param \StructType\MyMessagesFolderSummaryType $item
     * @return \StructType\MyMessagesSummaryType
     */
    public function addToFolderSummary(\StructType\MyMessagesFolderSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MyMessagesFolderSummaryType) {
            throw new \InvalidArgumentException(sprintf('The FolderSummary property can only contain items of type \StructType\MyMessagesFolderSummaryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FolderSummary[] = $item;
        return $this;
    }
    /**
     * Get NewAlertCount value
     * @return int|null
     */
    public function getNewAlertCount()
    {
        return $this->NewAlertCount;
    }
    /**
     * Set NewAlertCount value
     * @param int $newAlertCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setNewAlertCount($newAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($newAlertCount) && !(is_int($newAlertCount) || ctype_digit($newAlertCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newAlertCount, true), gettype($newAlertCount)), __LINE__);
        }
        $this->NewAlertCount = $newAlertCount;
        return $this;
    }
    /**
     * Get NewMessageCount value
     * @return int|null
     */
    public function getNewMessageCount()
    {
        return $this->NewMessageCount;
    }
    /**
     * Set NewMessageCount value
     * @param int $newMessageCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setNewMessageCount($newMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($newMessageCount) && !(is_int($newMessageCount) || ctype_digit($newMessageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newMessageCount, true), gettype($newMessageCount)), __LINE__);
        }
        $this->NewMessageCount = $newMessageCount;
        return $this;
    }
    /**
     * Get UnresolvedAlertCount value
     * @return int|null
     */
    public function getUnresolvedAlertCount()
    {
        return $this->UnresolvedAlertCount;
    }
    /**
     * Set UnresolvedAlertCount value
     * @param int $unresolvedAlertCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setUnresolvedAlertCount($unresolvedAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($unresolvedAlertCount) && !(is_int($unresolvedAlertCount) || ctype_digit($unresolvedAlertCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unresolvedAlertCount, true), gettype($unresolvedAlertCount)), __LINE__);
        }
        $this->UnresolvedAlertCount = $unresolvedAlertCount;
        return $this;
    }
    /**
     * Get FlaggedMessageCount value
     * @return int|null
     */
    public function getFlaggedMessageCount()
    {
        return $this->FlaggedMessageCount;
    }
    /**
     * Set FlaggedMessageCount value
     * @param int $flaggedMessageCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setFlaggedMessageCount($flaggedMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($flaggedMessageCount) && !(is_int($flaggedMessageCount) || ctype_digit($flaggedMessageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flaggedMessageCount, true), gettype($flaggedMessageCount)), __LINE__);
        }
        $this->FlaggedMessageCount = $flaggedMessageCount;
        return $this;
    }
    /**
     * Get TotalAlertCount value
     * @return int|null
     */
    public function getTotalAlertCount()
    {
        return $this->TotalAlertCount;
    }
    /**
     * Set TotalAlertCount value
     * @param int $totalAlertCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setTotalAlertCount($totalAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalAlertCount) && !(is_int($totalAlertCount) || ctype_digit($totalAlertCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAlertCount, true), gettype($totalAlertCount)), __LINE__);
        }
        $this->TotalAlertCount = $totalAlertCount;
        return $this;
    }
    /**
     * Get TotalMessageCount value
     * @return int|null
     */
    public function getTotalMessageCount()
    {
        return $this->TotalMessageCount;
    }
    /**
     * Set TotalMessageCount value
     * @param int $totalMessageCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setTotalMessageCount($totalMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalMessageCount) && !(is_int($totalMessageCount) || ctype_digit($totalMessageCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMessageCount, true), gettype($totalMessageCount)), __LINE__);
        }
        $this->TotalMessageCount = $totalMessageCount;
        return $this;
    }
    /**
     * Get NewHighPriorityCount value
     * @return int|null
     */
    public function getNewHighPriorityCount()
    {
        return $this->NewHighPriorityCount;
    }
    /**
     * Set NewHighPriorityCount value
     * @param int $newHighPriorityCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setNewHighPriorityCount($newHighPriorityCount = null)
    {
        // validation for constraint: int
        if (!is_null($newHighPriorityCount) && !(is_int($newHighPriorityCount) || ctype_digit($newHighPriorityCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newHighPriorityCount, true), gettype($newHighPriorityCount)), __LINE__);
        }
        $this->NewHighPriorityCount = $newHighPriorityCount;
        return $this;
    }
    /**
     * Get TotalHighPriorityCount value
     * @return int|null
     */
    public function getTotalHighPriorityCount()
    {
        return $this->TotalHighPriorityCount;
    }
    /**
     * Set TotalHighPriorityCount value
     * @param int $totalHighPriorityCount
     * @return \StructType\MyMessagesSummaryType
     */
    public function setTotalHighPriorityCount($totalHighPriorityCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalHighPriorityCount) && !(is_int($totalHighPriorityCount) || ctype_digit($totalHighPriorityCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalHighPriorityCount, true), gettype($totalHighPriorityCount)), __LINE__);
        }
        $this->TotalHighPriorityCount = $totalHighPriorityCount;
        return $this;
    }
}
