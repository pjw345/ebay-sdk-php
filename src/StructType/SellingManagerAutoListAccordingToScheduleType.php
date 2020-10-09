<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListAccordingToScheduleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the options available for an Automated Listing Rule that keeps a fixed number of items on the site
 * @subpackage Structs
 */
class SellingManagerAutoListAccordingToScheduleType extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta information extracted from the WSDL
     * - documentation: The day of the week on which items should be listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DayOfWeek;
    /**
     * The ListingPeriodInWeeks
     * Meta information extracted from the WSDL
     * - documentation: The number of weeks between rule executions.
     * - minOccurs: 0
     * @var int
     */
    public $ListingPeriodInWeeks;
    /**
     * The ListAtSpecificTimeOfDay
     * Meta information extracted from the WSDL
     * - documentation: The time at which items should be listed.
     * - minOccurs: 0
     * @var string
     */
    public $ListAtSpecificTimeOfDay;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: The date from which the rule is active.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: The date after which the rule is disabled.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The MaxActiveItemCount
     * Meta information extracted from the WSDL
     * - documentation: The number of current, listed items required for the rule to no longer be run.
     * - minOccurs: 0
     * @var int
     */
    public $MaxActiveItemCount;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Sets a minimum inventory level for listings of associated products to occur.
     * - minOccurs: 0
     * @var int
     */
    public $ListingHoldInventoryLevel;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoListAccordingToScheduleType
     * @uses SellingManagerAutoListAccordingToScheduleType::setDayOfWeek()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListingPeriodInWeeks()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListAtSpecificTimeOfDay()
     * @uses SellingManagerAutoListAccordingToScheduleType::setStartTime()
     * @uses SellingManagerAutoListAccordingToScheduleType::setEndTime()
     * @uses SellingManagerAutoListAccordingToScheduleType::setMaxActiveItemCount()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoListAccordingToScheduleType::setAny()
     * @param string[] $dayOfWeek
     * @param int $listingPeriodInWeeks
     * @param string $listAtSpecificTimeOfDay
     * @param string $startTime
     * @param string $endTime
     * @param int $maxActiveItemCount
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct(array $dayOfWeek = array(), $listingPeriodInWeeks = null, $listAtSpecificTimeOfDay = null, $startTime = null, $endTime = null, $maxActiveItemCount = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setListingPeriodInWeeks($listingPeriodInWeeks)
            ->setListAtSpecificTimeOfDay($listAtSpecificTimeOfDay)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setMaxActiveItemCount($maxActiveItemCount)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get DayOfWeek value
     * @return string[]|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * This method is responsible for validating the values passed to the setDayOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDayOfWeek method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDayOfWeekForArrayConstraintsFromSetDayOfWeek(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem) {
            // validation for constraint: enumeration
            if (!\EnumType\DayOfWeekCodeType::valueIsValid($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem)) {
                $invalidValues[] = is_object($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem) ? get_class($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem) : sprintf('%s(%s)', gettype($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem), var_export($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DayOfWeekCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\DayOfWeekCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DayOfWeek value
     * @uses \EnumType\DayOfWeekCodeType::valueIsValid()
     * @uses \EnumType\DayOfWeekCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $dayOfWeek
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setDayOfWeek(array $dayOfWeek = array())
    {
        // validation for constraint: array
        if ('' !== ($dayOfWeekArrayErrorMessage = self::validateDayOfWeekForArrayConstraintsFromSetDayOfWeek($dayOfWeek))) {
            throw new \InvalidArgumentException($dayOfWeekArrayErrorMessage, __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Add item to DayOfWeek value
     * @uses \EnumType\DayOfWeekCodeType::valueIsValid()
     * @uses \EnumType\DayOfWeekCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function addToDayOfWeek($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DayOfWeekCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DayOfWeekCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\DayOfWeekCodeType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek[] = $item;
        return $this;
    }
    /**
     * Get ListingPeriodInWeeks value
     * @return int|null
     */
    public function getListingPeriodInWeeks()
    {
        return $this->ListingPeriodInWeeks;
    }
    /**
     * Set ListingPeriodInWeeks value
     * @param int $listingPeriodInWeeks
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingPeriodInWeeks($listingPeriodInWeeks = null)
    {
        // validation for constraint: int
        if (!is_null($listingPeriodInWeeks) && !(is_int($listingPeriodInWeeks) || ctype_digit($listingPeriodInWeeks))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listingPeriodInWeeks, true), gettype($listingPeriodInWeeks)), __LINE__);
        }
        $this->ListingPeriodInWeeks = $listingPeriodInWeeks;
        return $this;
    }
    /**
     * Get ListAtSpecificTimeOfDay value
     * @return string|null
     */
    public function getListAtSpecificTimeOfDay()
    {
        return $this->ListAtSpecificTimeOfDay;
    }
    /**
     * Set ListAtSpecificTimeOfDay value
     * @param string $listAtSpecificTimeOfDay
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListAtSpecificTimeOfDay($listAtSpecificTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($listAtSpecificTimeOfDay) && !is_string($listAtSpecificTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAtSpecificTimeOfDay, true), gettype($listAtSpecificTimeOfDay)), __LINE__);
        }
        $this->ListAtSpecificTimeOfDay = $listAtSpecificTimeOfDay;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get MaxActiveItemCount value
     * @return int|null
     */
    public function getMaxActiveItemCount()
    {
        return $this->MaxActiveItemCount;
    }
    /**
     * Set MaxActiveItemCount value
     * @param int $maxActiveItemCount
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setMaxActiveItemCount($maxActiveItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxActiveItemCount) && !(is_int($maxActiveItemCount) || ctype_digit($maxActiveItemCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxActiveItemCount, true), gettype($maxActiveItemCount)), __LINE__);
        }
        $this->MaxActiveItemCount = $maxActiveItemCount;
        return $this;
    }
    /**
     * Get ListingHoldInventoryLevel value
     * @return int|null
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->ListingHoldInventoryLevel;
    }
    /**
     * Set ListingHoldInventoryLevel value
     * @param int $listingHoldInventoryLevel
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($listingHoldInventoryLevel) && !(is_int($listingHoldInventoryLevel) || ctype_digit($listingHoldInventoryLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listingHoldInventoryLevel, true), gettype($listingHoldInventoryLevel)), __LINE__);
        }
        $this->ListingHoldInventoryLevel = $listingHoldInventoryLevel;
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
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
