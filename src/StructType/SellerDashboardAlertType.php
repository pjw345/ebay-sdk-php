<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDashboardAlertType StructType
 * Meta information extracted from the WSDL
 * - documentation: A message to help the you understand your status as a seller (PowerSeller status, policy compliance status, etc.).
 * @subpackage Structs
 */
class SellerDashboardAlertType extends AbstractStructBase
{
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - documentation: The severity level helps you understand whether the alert is identifying a problem (a warning or strong warning) or if it is informational in nature. This field is present if an alert has been issued to your account.
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The warning or informational alert text. When you parse this text, note that some alerts may use plain text while others can include HTML. Returned only if the seller has been issued an alert.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerDashboardAlertType
     * @uses SellerDashboardAlertType::setSeverity()
     * @uses SellerDashboardAlertType::setText()
     * @uses SellerDashboardAlertType::setAny()
     * @param string $severity
     * @param string $text
     * @param \DOMDocument $any
     */
    public function __construct($severity = null, $text = null, \DOMDocument $any = null)
    {
        $this
            ->setSeverity($severity)
            ->setText($text)
            ->setAny($any);
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid()
     * @uses \EnumType\SellerDashboardAlertSeverityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \StructType\SellerDashboardAlertType
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellerDashboardAlertSeverityCodeType', is_array($severity) ? implode(', ', $severity) : var_export($severity, true), implode(', ', \EnumType\SellerDashboardAlertSeverityCodeType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \StructType\SellerDashboardAlertType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
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
     * @return \StructType\SellerDashboardAlertType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
