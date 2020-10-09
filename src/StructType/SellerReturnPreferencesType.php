<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnPreferences</b> container, which consists of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 * @subpackage Structs
 */
class SellerReturnPreferencesType extends AbstractStructBase
{
    /**
     * The OptedIn
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not an eligible seller has opted in to eBay Managed Returns through the Return Preferences of My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $OptedIn;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerReturnPreferencesType
     * @uses SellerReturnPreferencesType::setOptedIn()
     * @uses SellerReturnPreferencesType::setAny()
     * @param bool $optedIn
     * @param \DOMDocument $any
     */
    public function __construct($optedIn = null, \DOMDocument $any = null)
    {
        $this
            ->setOptedIn($optedIn)
            ->setAny($any);
    }
    /**
     * Get OptedIn value
     * @return bool|null
     */
    public function getOptedIn()
    {
        return $this->OptedIn;
    }
    /**
     * Set OptedIn value
     * @param bool $optedIn
     * @return \StructType\SellerReturnPreferencesType
     */
    public function setOptedIn($optedIn = null)
    {
        // validation for constraint: boolean
        if (!is_null($optedIn) && !is_bool($optedIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optedIn, true), gettype($optedIn)), __LINE__);
        }
        $this->OptedIn = $optedIn;
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
     * @return \StructType\SellerReturnPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
