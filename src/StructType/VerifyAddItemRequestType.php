<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a listing. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
 * recoupment terms before adding or verifying items. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and the agreement is located <a
 * href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>. The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser response.
 * @subpackage Structs
 */
class VerifyAddItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Root container holding all values that define a new listing.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for VerifyAddItemRequestType
     * @uses VerifyAddItemRequestType::setItem()
     * @param \StructType\ItemType $item
     */
    public function __construct(\StructType\ItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\VerifyAddItemRequestType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
}
