<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyComplianceDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type has been deprecated.
 * @subpackage Structs
 */
class PolicyComplianceDashboardType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellerDashboardAlertType[]
     */
    public $Alert;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PolicyComplianceDashboardType
     * @uses PolicyComplianceDashboardType::setStatus()
     * @uses PolicyComplianceDashboardType::setAlert()
     * @uses PolicyComplianceDashboardType::setAny()
     * @param string $status
     * @param \StructType\SellerDashboardAlertType[] $alert
     * @param \DOMDocument $any
     */
    public function __construct($status = null, array $alert = array(), \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\PolicyComplianceStatusCodeType::valueIsValid()
     * @uses \EnumType\PolicyComplianceStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\PolicyComplianceDashboardType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PolicyComplianceStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PolicyComplianceStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\PolicyComplianceStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Alert value
     * @return \StructType\SellerDashboardAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * This method is responsible for validating the values passed to the setAlert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertForArrayConstraintsFromSetAlert(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyComplianceDashboardTypeAlertItem) {
            // validation for constraint: itemType
            if (!$policyComplianceDashboardTypeAlertItem instanceof \StructType\SellerDashboardAlertType) {
                $invalidValues[] = is_object($policyComplianceDashboardTypeAlertItem) ? get_class($policyComplianceDashboardTypeAlertItem) : sprintf('%s(%s)', gettype($policyComplianceDashboardTypeAlertItem), var_export($policyComplianceDashboardTypeAlertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alert property can only contain items of type \StructType\SellerDashboardAlertType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \StructType\SellerDashboardAlertType[] $alert
     * @return \StructType\PolicyComplianceDashboardType
     */
    public function setAlert(array $alert = array())
    {
        // validation for constraint: array
        if ('' !== ($alertArrayErrorMessage = self::validateAlertForArrayConstraintsFromSetAlert($alert))) {
            throw new \InvalidArgumentException($alertArrayErrorMessage, __LINE__);
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \StructType\SellerDashboardAlertType $item
     * @return \StructType\PolicyComplianceDashboardType
     */
    public function addToAlert(\StructType\SellerDashboardAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellerDashboardAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of type \StructType\SellerDashboardAlertType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Alert[] = $item;
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
     * @return \StructType\PolicyComplianceDashboardType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PolicyComplianceDashboardType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
