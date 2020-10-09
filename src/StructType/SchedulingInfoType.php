<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SchedulingInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information for scheduling limits for the user.
 * @subpackage Structs
 */
class SchedulingInfoType extends AbstractStructBase
{
    /**
     * The MaxScheduledMinutes
     * Meta information extracted from the WSDL
     * - documentation: Maximum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledMinutes;
    /**
     * The MinScheduledMinutes
     * Meta information extracted from the WSDL
     * - documentation: Minimum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int
     */
    public $MinScheduledMinutes;
    /**
     * The MaxScheduledItems
     * Meta information extracted from the WSDL
     * - documentation: Maximum number of Items that a user may schedule.
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledItems;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SchedulingInfoType
     * @uses SchedulingInfoType::setMaxScheduledMinutes()
     * @uses SchedulingInfoType::setMinScheduledMinutes()
     * @uses SchedulingInfoType::setMaxScheduledItems()
     * @uses SchedulingInfoType::setAny()
     * @param int $maxScheduledMinutes
     * @param int $minScheduledMinutes
     * @param int $maxScheduledItems
     * @param \DOMDocument $any
     */
    public function __construct($maxScheduledMinutes = null, $minScheduledMinutes = null, $maxScheduledItems = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxScheduledMinutes($maxScheduledMinutes)
            ->setMinScheduledMinutes($minScheduledMinutes)
            ->setMaxScheduledItems($maxScheduledItems)
            ->setAny($any);
    }
    /**
     * Get MaxScheduledMinutes value
     * @return int|null
     */
    public function getMaxScheduledMinutes()
    {
        return $this->MaxScheduledMinutes;
    }
    /**
     * Set MaxScheduledMinutes value
     * @param int $maxScheduledMinutes
     * @return \StructType\SchedulingInfoType
     */
    public function setMaxScheduledMinutes($maxScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledMinutes) && !(is_int($maxScheduledMinutes) || ctype_digit($maxScheduledMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledMinutes, true), gettype($maxScheduledMinutes)), __LINE__);
        }
        $this->MaxScheduledMinutes = $maxScheduledMinutes;
        return $this;
    }
    /**
     * Get MinScheduledMinutes value
     * @return int|null
     */
    public function getMinScheduledMinutes()
    {
        return $this->MinScheduledMinutes;
    }
    /**
     * Set MinScheduledMinutes value
     * @param int $minScheduledMinutes
     * @return \StructType\SchedulingInfoType
     */
    public function setMinScheduledMinutes($minScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($minScheduledMinutes) && !(is_int($minScheduledMinutes) || ctype_digit($minScheduledMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minScheduledMinutes, true), gettype($minScheduledMinutes)), __LINE__);
        }
        $this->MinScheduledMinutes = $minScheduledMinutes;
        return $this;
    }
    /**
     * Get MaxScheduledItems value
     * @return int|null
     */
    public function getMaxScheduledItems()
    {
        return $this->MaxScheduledItems;
    }
    /**
     * Set MaxScheduledItems value
     * @param int $maxScheduledItems
     * @return \StructType\SchedulingInfoType
     */
    public function setMaxScheduledItems($maxScheduledItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledItems) && !(is_int($maxScheduledItems) || ctype_digit($maxScheduledItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledItems, true), gettype($maxScheduledItems)), __LINE__);
        }
        $this->MaxScheduledItems = $maxScheduledItems;
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
     * @return \StructType\SchedulingInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
