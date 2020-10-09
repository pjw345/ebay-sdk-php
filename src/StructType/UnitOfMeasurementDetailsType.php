<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementDetailsType extends AbstractStructBase
{
    /**
     * The UnitOfMeasurement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UnitOfMeasurementType[]
     */
    public $UnitOfMeasurement;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnitOfMeasurementDetailsType
     * @uses UnitOfMeasurementDetailsType::setUnitOfMeasurement()
     * @uses UnitOfMeasurementDetailsType::setDetailVersion()
     * @uses UnitOfMeasurementDetailsType::setUpdateTime()
     * @uses UnitOfMeasurementDetailsType::setAny()
     * @param \StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct(array $unitOfMeasurement = array(), $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get UnitOfMeasurement value
     * @return \StructType\UnitOfMeasurementType[]|null
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitOfMeasurement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitOfMeasurement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitOfMeasurementForArrayConstraintsFromSetUnitOfMeasurement(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitOfMeasurementDetailsTypeUnitOfMeasurementItem) {
            // validation for constraint: itemType
            if (!$unitOfMeasurementDetailsTypeUnitOfMeasurementItem instanceof \StructType\UnitOfMeasurementType) {
                $invalidValues[] = is_object($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) ? get_class($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) : sprintf('%s(%s)', gettype($unitOfMeasurementDetailsTypeUnitOfMeasurementItem), var_export($unitOfMeasurementDetailsTypeUnitOfMeasurementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitOfMeasurement property can only contain items of type \StructType\UnitOfMeasurementType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UnitOfMeasurement value
     * @throws \InvalidArgumentException
     * @param \StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @return \StructType\UnitOfMeasurementDetailsType
     */
    public function setUnitOfMeasurement(array $unitOfMeasurement = array())
    {
        // validation for constraint: array
        if ('' !== ($unitOfMeasurementArrayErrorMessage = self::validateUnitOfMeasurementForArrayConstraintsFromSetUnitOfMeasurement($unitOfMeasurement))) {
            throw new \InvalidArgumentException($unitOfMeasurementArrayErrorMessage, __LINE__);
        }
        $this->UnitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Add item to UnitOfMeasurement value
     * @throws \InvalidArgumentException
     * @param \StructType\UnitOfMeasurementType $item
     * @return \StructType\UnitOfMeasurementDetailsType
     */
    public function addToUnitOfMeasurement(\StructType\UnitOfMeasurementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UnitOfMeasurementType) {
            throw new \InvalidArgumentException(sprintf('The UnitOfMeasurement property can only contain items of type \StructType\UnitOfMeasurementType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitOfMeasurement[] = $item;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\UnitOfMeasurementDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\UnitOfMeasurementDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \StructType\UnitOfMeasurementDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
