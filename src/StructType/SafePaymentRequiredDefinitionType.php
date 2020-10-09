<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SafePaymentRequiredDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: For the US, Canada and Australia sites, users are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in Item.PaymentMethods). <br> If a seller has a 'SafePaymentExempt'
 * status, they are exempt from the category requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have
 * one ship-to or available-to location in the US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet
 * listings on the CAFR site with ship-to or available-to locations in the US or Australia do require a safe payment method. <br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support
 * Item.PaymentMethods are exempt from this requirement. Therefore, listings in those categories do not require a safe payment method. <br> Currently, this field contains no other special meta-data.(An empty element is returned.) <br> Use
 * SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine which categories require a safe payment method.
 * @subpackage Structs
 */
class SafePaymentRequiredDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SafePaymentRequiredDefinitionType
     * @uses SafePaymentRequiredDefinitionType::setAny()
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $any = null)
    {
        $this
            ->setAny($any);
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
     * @return \StructType\SafePaymentRequiredDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
