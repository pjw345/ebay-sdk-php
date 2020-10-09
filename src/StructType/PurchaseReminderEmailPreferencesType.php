<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurchaseReminderEmailPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 * @subpackage Structs
 */
class PurchaseReminderEmailPreferencesType extends AbstractStructBase
{
    /**
     * The PurchaseReminderEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: If true, a payment reminder Email is sent to buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $PurchaseReminderEmailPreferences;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PurchaseReminderEmailPreferencesType
     * @uses PurchaseReminderEmailPreferencesType::setPurchaseReminderEmailPreferences()
     * @uses PurchaseReminderEmailPreferencesType::setAny()
     * @param bool $purchaseReminderEmailPreferences
     * @param \DOMDocument $any
     */
    public function __construct($purchaseReminderEmailPreferences = null, \DOMDocument $any = null)
    {
        $this
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setAny($any);
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return bool|null
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param bool $purchaseReminderEmailPreferences
     * @return \StructType\PurchaseReminderEmailPreferencesType
     */
    public function setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences = null)
    {
        // validation for constraint: boolean
        if (!is_null($purchaseReminderEmailPreferences) && !is_bool($purchaseReminderEmailPreferences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($purchaseReminderEmailPreferences, true), gettype($purchaseReminderEmailPreferences)), __LINE__);
        }
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
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
     * @return \StructType\PurchaseReminderEmailPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
