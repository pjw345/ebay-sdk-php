<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type that defines the <b>SellerDiscount</b> container, which contains the ID, name, and amount of the seller discount.
 * @subpackage Structs
 */
class SellerDiscountType extends AbstractStructBase
{
    /**
     * The CampaignID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a seller discount campaign. This ID is automatically created when the seller creates the discount campaign. This field is always returned with the <b>SellerDiscount</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $CampaignID;
    /**
     * The CampaignDisplayName
     * Meta information extracted from the WSDL
     * - documentation: The name of the seller discount campaign. This field will only be returned with the <b>SellerDiscount</b> container if defined for the seller discount campaign.
     * - minOccurs: 0
     * @var string
     */
    public $CampaignDisplayName;
    /**
     * The ItemDiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: The dollar amount of the order line item discount. The original purchase price (denoted in <b>OriginalItemPrice</b>) will be reduced by this value. The amount of the item discount will depend on the rules defined in the the seller
     * discount campaign. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Prior to Version 895, this field worked a little differently. Instead of this field showing the amount of the discount, it was actually showing the final item price after
     * the discount was applied. So, if an item price is 10.0 dollars and the discount is 2.0 dollars, someone using Version 895 (and going forward) will see a value of '2.0' (amount of the discount) in this field, but anyone using Version 893 or lower will
     * see a value of '8.0' (item price after discount) in this field. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ItemDiscountAmount;
    /**
     * The ShippingDiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: The dollar amount of the shipping discount applied to the order line item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingDiscountAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerDiscountType
     * @uses SellerDiscountType::setCampaignID()
     * @uses SellerDiscountType::setCampaignDisplayName()
     * @uses SellerDiscountType::setItemDiscountAmount()
     * @uses SellerDiscountType::setShippingDiscountAmount()
     * @uses SellerDiscountType::setAny()
     * @param int $campaignID
     * @param string $campaignDisplayName
     * @param \StructType\AmountType $itemDiscountAmount
     * @param \StructType\AmountType $shippingDiscountAmount
     * @param \DOMDocument $any
     */
    public function __construct($campaignID = null, $campaignDisplayName = null, \StructType\AmountType $itemDiscountAmount = null, \StructType\AmountType $shippingDiscountAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setCampaignID($campaignID)
            ->setCampaignDisplayName($campaignDisplayName)
            ->setItemDiscountAmount($itemDiscountAmount)
            ->setShippingDiscountAmount($shippingDiscountAmount)
            ->setAny($any);
    }
    /**
     * Get CampaignID value
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \StructType\SellerDiscountType
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !(is_int($campaignID) || ctype_digit($campaignID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignID, true), gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
    /**
     * Get CampaignDisplayName value
     * @return string|null
     */
    public function getCampaignDisplayName()
    {
        return $this->CampaignDisplayName;
    }
    /**
     * Set CampaignDisplayName value
     * @param string $campaignDisplayName
     * @return \StructType\SellerDiscountType
     */
    public function setCampaignDisplayName($campaignDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($campaignDisplayName) && !is_string($campaignDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignDisplayName, true), gettype($campaignDisplayName)), __LINE__);
        }
        $this->CampaignDisplayName = $campaignDisplayName;
        return $this;
    }
    /**
     * Get ItemDiscountAmount value
     * @return \StructType\AmountType|null
     */
    public function getItemDiscountAmount()
    {
        return $this->ItemDiscountAmount;
    }
    /**
     * Set ItemDiscountAmount value
     * @param \StructType\AmountType $itemDiscountAmount
     * @return \StructType\SellerDiscountType
     */
    public function setItemDiscountAmount(\StructType\AmountType $itemDiscountAmount = null)
    {
        $this->ItemDiscountAmount = $itemDiscountAmount;
        return $this;
    }
    /**
     * Get ShippingDiscountAmount value
     * @return \StructType\AmountType|null
     */
    public function getShippingDiscountAmount()
    {
        return $this->ShippingDiscountAmount;
    }
    /**
     * Set ShippingDiscountAmount value
     * @param \StructType\AmountType $shippingDiscountAmount
     * @return \StructType\SellerDiscountType
     */
    public function setShippingDiscountAmount(\StructType\AmountType $shippingDiscountAmount = null)
    {
        $this->ShippingDiscountAmount = $shippingDiscountAmount;
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
     * @return \StructType\SellerDiscountType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
