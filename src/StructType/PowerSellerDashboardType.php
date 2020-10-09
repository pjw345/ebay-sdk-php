<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PowerSellerDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>PowerSellerStatus</b> container returned in the <b>GetSellerDashboard</b> response. The <b>PowerSellerStatus</b> container is only returned if the seller making the call is a Power Seller.
 * @subpackage Structs
 */
class PowerSellerDashboardType extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the seller's eBay PowerSeller tier. PowerSellers are distinguished in five tiers based on average monthly sales. Benefits and services vary for each tier. eBay calculates eligibility for each tier on a monthly
     * basis.
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: The <b>PowerSellerStatus.Alert</b> container is only returned if eBay has posted one or more informational or warning messages related to the seller's PowerSeller status.
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
     * Constructor method for PowerSellerDashboardType
     * @uses PowerSellerDashboardType::setLevel()
     * @uses PowerSellerDashboardType::setAlert()
     * @uses PowerSellerDashboardType::setAny()
     * @param string $level
     * @param \StructType\SellerDashboardAlertType[] $alert
     * @param \DOMDocument $any
     */
    public function __construct($level = null, array $alert = array(), \DOMDocument $any = null)
    {
        $this
            ->setLevel($level)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \EnumType\SellerLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \StructType\PowerSellerDashboardType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellerLevelCodeType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellerLevelCodeType', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
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
        foreach ($values as $powerSellerDashboardTypeAlertItem) {
            // validation for constraint: itemType
            if (!$powerSellerDashboardTypeAlertItem instanceof \StructType\SellerDashboardAlertType) {
                $invalidValues[] = is_object($powerSellerDashboardTypeAlertItem) ? get_class($powerSellerDashboardTypeAlertItem) : sprintf('%s(%s)', gettype($powerSellerDashboardTypeAlertItem), var_export($powerSellerDashboardTypeAlertItem, true));
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
     * @return \StructType\PowerSellerDashboardType
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
     * @return \StructType\PowerSellerDashboardType
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
     * @return \StructType\PowerSellerDashboardType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
