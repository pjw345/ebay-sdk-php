<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesFolderSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary details for a specified My Messages folder.
 * @subpackage Structs
 */
class MyMessagesFolderSummaryType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies a My Messages folder. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: The name of a specified My Messages folder. For GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1) are not returned.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The NewAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
     * - minOccurs: 0
     * @var int
     */
    public $NewAlertCount;
    /**
     * The NewMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new messages in a given folder. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $NewMessageCount;
    /**
     * The TotalAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAlertCount;
    /**
     * The TotalMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of messages in a given folder. Always returned for detail level ReturnSummary.
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
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesFolderSummaryType
     * @uses MyMessagesFolderSummaryType::setFolderID()
     * @uses MyMessagesFolderSummaryType::setFolderName()
     * @uses MyMessagesFolderSummaryType::setNewAlertCount()
     * @uses MyMessagesFolderSummaryType::setNewMessageCount()
     * @uses MyMessagesFolderSummaryType::setTotalAlertCount()
     * @uses MyMessagesFolderSummaryType::setTotalMessageCount()
     * @uses MyMessagesFolderSummaryType::setNewHighPriorityCount()
     * @uses MyMessagesFolderSummaryType::setTotalHighPriorityCount()
     * @uses MyMessagesFolderSummaryType::setAny()
     * @param int $folderID
     * @param string $folderName
     * @param int $newAlertCount
     * @param int $newMessageCount
     * @param int $totalAlertCount
     * @param int $totalMessageCount
     * @param int $newHighPriorityCount
     * @param int $totalHighPriorityCount
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $folderName = null, $newAlertCount = null, $newMessageCount = null, $totalAlertCount = null, $totalMessageCount = null, $newHighPriorityCount = null, $totalHighPriorityCount = null, \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setFolderName($folderName)
            ->setNewAlertCount($newAlertCount)
            ->setNewMessageCount($newMessageCount)
            ->setTotalAlertCount($totalAlertCount)
            ->setTotalMessageCount($totalMessageCount)
            ->setNewHighPriorityCount($newHighPriorityCount)
            ->setTotalHighPriorityCount($totalHighPriorityCount)
            ->setAny($any);
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
     * @return \StructType\MyMessagesFolderSummaryType
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
    /**
     * Get FolderName value
     * @return string|null
     */
    public function getFolderName()
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @param string $folderName
     * @return \StructType\MyMessagesFolderSummaryType
     */
    public function setFolderName($folderName = null)
    {
        // validation for constraint: string
        if (!is_null($folderName) && !is_string($folderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderName, true), gettype($folderName)), __LINE__);
        }
        $this->FolderName = $folderName;
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
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
     * @return \StructType\MyMessagesFolderSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
