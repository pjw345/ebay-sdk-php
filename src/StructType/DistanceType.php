<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistanceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DistanceType extends AbstractStructBase
{
    /**
     * The DistanceMeasurement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $DistanceMeasurement;
    /**
     * The DistanceUnit
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DistanceUnit;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DistanceType
     * @uses DistanceType::setDistanceMeasurement()
     * @uses DistanceType::setDistanceUnit()
     * @uses DistanceType::setAny()
     * @param int $distanceMeasurement
     * @param string $distanceUnit
     * @param \DOMDocument $any
     */
    public function __construct($distanceMeasurement = null, $distanceUnit = null, \DOMDocument $any = null)
    {
        $this
            ->setDistanceMeasurement($distanceMeasurement)
            ->setDistanceUnit($distanceUnit)
            ->setAny($any);
    }
    /**
     * Get DistanceMeasurement value
     * @return int|null
     */
    public function getDistanceMeasurement()
    {
        return $this->DistanceMeasurement;
    }
    /**
     * Set DistanceMeasurement value
     * @param int $distanceMeasurement
     * @return \StructType\DistanceType
     */
    public function setDistanceMeasurement($distanceMeasurement = null)
    {
        // validation for constraint: int
        if (!is_null($distanceMeasurement) && !(is_int($distanceMeasurement) || ctype_digit($distanceMeasurement))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distanceMeasurement, true), gettype($distanceMeasurement)), __LINE__);
        }
        $this->DistanceMeasurement = $distanceMeasurement;
        return $this;
    }
    /**
     * Get DistanceUnit value
     * @return string|null
     */
    public function getDistanceUnit()
    {
        return $this->DistanceUnit;
    }
    /**
     * Set DistanceUnit value
     * @param string $distanceUnit
     * @return \StructType\DistanceType
     */
    public function setDistanceUnit($distanceUnit = null)
    {
        // validation for constraint: string
        if (!is_null($distanceUnit) && !is_string($distanceUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distanceUnit, true), gettype($distanceUnit)), __LINE__);
        }
        $this->DistanceUnit = $distanceUnit;
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
     * @return \StructType\DistanceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
