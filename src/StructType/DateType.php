<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines year, month, and day as individual components of a date. Only applicable to use cases that support incomplete dates. Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 * @subpackage Structs
 */
class DateType extends AbstractStructBase
{
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - documentation: A year in the form YYYY.
     * - minOccurs: 0
     * @var int
     */
    public $Year;
    /**
     * The Month
     * Meta information extracted from the WSDL
     * - documentation: A calendar month (e.g., 2 or 02 for February). For ticket searches, Month is required if Day is specified.
     * - minOccurs: 0
     * @var int
     */
    public $Month;
    /**
     * The Day
     * Meta information extracted from the WSDL
     * - documentation: A calendar day (e.g., 2 or 02). For ticket searches, Day is only valid if Month is also specified.
     * - minOccurs: 0
     * @var int
     */
    public $Day;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DateType
     * @uses DateType::setYear()
     * @uses DateType::setMonth()
     * @uses DateType::setDay()
     * @uses DateType::setAny()
     * @param int $year
     * @param int $month
     * @param int $day
     * @param \DOMDocument $any
     */
    public function __construct($year = null, $month = null, $day = null, \DOMDocument $any = null)
    {
        $this
            ->setYear($year)
            ->setMonth($month)
            ->setDay($day)
            ->setAny($any);
    }
    /**
     * Get Year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \StructType\DateType
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \StructType\DateType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \StructType\DateType
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !(is_int($day) || ctype_digit($day))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($day, true), gettype($day)), __LINE__);
        }
        $this->Day = $day;
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
     * @return \StructType\DateType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
