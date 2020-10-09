<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationStatisticsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary information about notifications delivered, failed, errors, queued for a given application ID and time period.
 * @subpackage Structs
 */
class NotificationStatisticsType extends AbstractStructBase
{
    /**
     * The DeliveredCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications delivered successfully during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $DeliveredCount;
    /**
     * The QueuedNewCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of new notifications that were queued during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $QueuedNewCount;
    /**
     * The QueuedPendingCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of pending notifications in the queue during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $QueuedPendingCount;
    /**
     * The ExpiredCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications that permanently failed during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $ExpiredCount;
    /**
     * The ErrorCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications for which there were delivery errors during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $ErrorCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationStatisticsType
     * @uses NotificationStatisticsType::setDeliveredCount()
     * @uses NotificationStatisticsType::setQueuedNewCount()
     * @uses NotificationStatisticsType::setQueuedPendingCount()
     * @uses NotificationStatisticsType::setExpiredCount()
     * @uses NotificationStatisticsType::setErrorCount()
     * @uses NotificationStatisticsType::setAny()
     * @param int $deliveredCount
     * @param int $queuedNewCount
     * @param int $queuedPendingCount
     * @param int $expiredCount
     * @param int $errorCount
     * @param \DOMDocument $any
     */
    public function __construct($deliveredCount = null, $queuedNewCount = null, $queuedPendingCount = null, $expiredCount = null, $errorCount = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveredCount($deliveredCount)
            ->setQueuedNewCount($queuedNewCount)
            ->setQueuedPendingCount($queuedPendingCount)
            ->setExpiredCount($expiredCount)
            ->setErrorCount($errorCount)
            ->setAny($any);
    }
    /**
     * Get DeliveredCount value
     * @return int|null
     */
    public function getDeliveredCount()
    {
        return $this->DeliveredCount;
    }
    /**
     * Set DeliveredCount value
     * @param int $deliveredCount
     * @return \StructType\NotificationStatisticsType
     */
    public function setDeliveredCount($deliveredCount = null)
    {
        // validation for constraint: int
        if (!is_null($deliveredCount) && !(is_int($deliveredCount) || ctype_digit($deliveredCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveredCount, true), gettype($deliveredCount)), __LINE__);
        }
        $this->DeliveredCount = $deliveredCount;
        return $this;
    }
    /**
     * Get QueuedNewCount value
     * @return int|null
     */
    public function getQueuedNewCount()
    {
        return $this->QueuedNewCount;
    }
    /**
     * Set QueuedNewCount value
     * @param int $queuedNewCount
     * @return \StructType\NotificationStatisticsType
     */
    public function setQueuedNewCount($queuedNewCount = null)
    {
        // validation for constraint: int
        if (!is_null($queuedNewCount) && !(is_int($queuedNewCount) || ctype_digit($queuedNewCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queuedNewCount, true), gettype($queuedNewCount)), __LINE__);
        }
        $this->QueuedNewCount = $queuedNewCount;
        return $this;
    }
    /**
     * Get QueuedPendingCount value
     * @return int|null
     */
    public function getQueuedPendingCount()
    {
        return $this->QueuedPendingCount;
    }
    /**
     * Set QueuedPendingCount value
     * @param int $queuedPendingCount
     * @return \StructType\NotificationStatisticsType
     */
    public function setQueuedPendingCount($queuedPendingCount = null)
    {
        // validation for constraint: int
        if (!is_null($queuedPendingCount) && !(is_int($queuedPendingCount) || ctype_digit($queuedPendingCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queuedPendingCount, true), gettype($queuedPendingCount)), __LINE__);
        }
        $this->QueuedPendingCount = $queuedPendingCount;
        return $this;
    }
    /**
     * Get ExpiredCount value
     * @return int|null
     */
    public function getExpiredCount()
    {
        return $this->ExpiredCount;
    }
    /**
     * Set ExpiredCount value
     * @param int $expiredCount
     * @return \StructType\NotificationStatisticsType
     */
    public function setExpiredCount($expiredCount = null)
    {
        // validation for constraint: int
        if (!is_null($expiredCount) && !(is_int($expiredCount) || ctype_digit($expiredCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expiredCount, true), gettype($expiredCount)), __LINE__);
        }
        $this->ExpiredCount = $expiredCount;
        return $this;
    }
    /**
     * Get ErrorCount value
     * @return int|null
     */
    public function getErrorCount()
    {
        return $this->ErrorCount;
    }
    /**
     * Set ErrorCount value
     * @param int $errorCount
     * @return \StructType\NotificationStatisticsType
     */
    public function setErrorCount($errorCount = null)
    {
        // validation for constraint: int
        if (!is_null($errorCount) && !(is_int($errorCount) || ctype_digit($errorCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCount, true), gettype($errorCount)), __LINE__);
        }
        $this->ErrorCount = $errorCount;
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
     * @return \StructType\NotificationStatisticsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
