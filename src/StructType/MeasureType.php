<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeasureType StructType
 * Meta information extracted from the WSDL
 * - documentation: Basic type for specifying measures and the system of measurement. A decimal value (e.g., 10.25) is meaningful as a measure when accompanied by a definition of the unit of measure (e.g., Pounds), in which case the value specifies the
 * quantity of that unit. A MeasureType expresses both the value (a decimal) and, optionally, the unit and the system of measurement. Details such as shipping weights are specified as measure types.
 * @subpackage Structs
 */
class MeasureType extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - documentation: Unit of measure. This attribute is shared by various fields, representing units such as lbs, oz, kg, g, in, cm. <br><br> For weight, English major/minor units are pounds and ounces, and metric major/minor units are kilograms and
     * grams. For length, the English unit is inches, and metric unit is centimeters. <br><br> To get the full list of package dimension and weight measurement units (and all alternative spellings and abbreviations) supported by your site, call
     * <b>GeteBayDetails</b>.
     * - use: optional
     * @var string
     */
    public $unit;
    /**
     * The measurementSystem
     * Meta information extracted from the WSDL
     * - documentation: The system of measurement (e.g., English).
     * - use: optional
     * @var string
     */
    public $measurementSystem;
    /**
     * Constructor method for MeasureType
     * @uses MeasureType::set_()
     * @uses MeasureType::setUnit()
     * @uses MeasureType::setMeasurementSystem()
     * @param float $_
     * @param string $unit
     * @param string $measurementSystem
     */
    public function __construct($_ = null, $unit = null, $measurementSystem = null)
    {
        $this
            ->set_($_)
            ->setUnit($unit)
            ->setMeasurementSystem($measurementSystem);
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \StructType\MeasureType
     */
    public function set_($_ = null)
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \StructType\MeasureType
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get measurementSystem value
     * @return string|null
     */
    public function getMeasurementSystem()
    {
        return $this->measurementSystem;
    }
    /**
     * Set measurementSystem value
     * @uses \EnumType\MeasurementSystemCodeType::valueIsValid()
     * @uses \EnumType\MeasurementSystemCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $measurementSystem
     * @return \StructType\MeasureType
     */
    public function setMeasurementSystem($measurementSystem = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MeasurementSystemCodeType::valueIsValid($measurementSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MeasurementSystemCodeType', is_array($measurementSystem) ? implode(', ', $measurementSystem) : var_export($measurementSystem, true), implode(', ', \EnumType\MeasurementSystemCodeType::getValidValues())), __LINE__);
        }
        $this->measurementSystem = $measurementSystem;
        return $this;
    }
}
