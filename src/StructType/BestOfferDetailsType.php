<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestOfferDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BestOfferDetails</b> container, which consists of Best Offer details associated with a listing. The <b>BestOfferEnabled</b> field in this container is used by <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls to
 * enable the Best Offer feature on a listing.
 * @subpackage Structs
 */
class BestOfferDetailsType extends AbstractStructBase
{
    /**
     * The BestOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var int
     */
    public $BestOfferCount;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category
     * supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload. <br/><br/> A listing enabled with the Best Offer feature allows a buyer to
     * bargain with the seller and make a lower-priced offer than the fixed price or the starting bid price for an auction listing. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best
     * Offer price, but lower than the fixed price or starting bid price. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France,
     * Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no
     * longer be applicable once the listing receives its first qualifying bid. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - documentation: This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $BestOffer;
    /**
     * The BestOfferStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the latest Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the response if the buyer has not made a Best Offer.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferStatus;
    /**
     * The BestOfferType
     * Meta information extracted from the WSDL
     * - documentation: Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>,
     * <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferType;
    /**
     * The NewBestOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $NewBestOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BestOfferDetailsType
     * @uses BestOfferDetailsType::setBestOfferCount()
     * @uses BestOfferDetailsType::setBestOfferEnabled()
     * @uses BestOfferDetailsType::setBestOffer()
     * @uses BestOfferDetailsType::setBestOfferStatus()
     * @uses BestOfferDetailsType::setBestOfferType()
     * @uses BestOfferDetailsType::setNewBestOffer()
     * @uses BestOfferDetailsType::setAny()
     * @param int $bestOfferCount
     * @param bool $bestOfferEnabled
     * @param \StructType\AmountType $bestOffer
     * @param string $bestOfferStatus
     * @param string $bestOfferType
     * @param bool $newBestOffer
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferCount = null, $bestOfferEnabled = null, \StructType\AmountType $bestOffer = null, $bestOfferStatus = null, $bestOfferType = null, $newBestOffer = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferCount($bestOfferCount)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setBestOffer($bestOffer)
            ->setBestOfferStatus($bestOfferStatus)
            ->setBestOfferType($bestOfferType)
            ->setNewBestOffer($newBestOffer)
            ->setAny($any);
    }
    /**
     * Get BestOfferCount value
     * @return int|null
     */
    public function getBestOfferCount()
    {
        return $this->BestOfferCount;
    }
    /**
     * Set BestOfferCount value
     * @param int $bestOfferCount
     * @return \StructType\BestOfferDetailsType
     */
    public function setBestOfferCount($bestOfferCount = null)
    {
        // validation for constraint: int
        if (!is_null($bestOfferCount) && !(is_int($bestOfferCount) || ctype_digit($bestOfferCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferCount, true), gettype($bestOfferCount)), __LINE__);
        }
        $this->BestOfferCount = $bestOfferCount;
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \StructType\BestOfferDetailsType
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get BestOffer value
     * @return \StructType\AmountType|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \StructType\AmountType $bestOffer
     * @return \StructType\BestOfferDetailsType
     */
    public function setBestOffer(\StructType\AmountType $bestOffer = null)
    {
        $this->BestOffer = $bestOffer;
        return $this;
    }
    /**
     * Get BestOfferStatus value
     * @return string|null
     */
    public function getBestOfferStatus()
    {
        return $this->BestOfferStatus;
    }
    /**
     * Set BestOfferStatus value
     * @uses \EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferStatus
     * @return \StructType\BestOfferDetailsType
     */
    public function setBestOfferStatus($bestOfferStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BestOfferStatusCodeType::valueIsValid($bestOfferStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BestOfferStatusCodeType', is_array($bestOfferStatus) ? implode(', ', $bestOfferStatus) : var_export($bestOfferStatus, true), implode(', ', \EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferStatus = $bestOfferStatus;
        return $this;
    }
    /**
     * Get BestOfferType value
     * @return string|null
     */
    public function getBestOfferType()
    {
        return $this->BestOfferType;
    }
    /**
     * Set BestOfferType value
     * @uses \EnumType\BestOfferTypeCodeType::valueIsValid()
     * @uses \EnumType\BestOfferTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferType
     * @return \StructType\BestOfferDetailsType
     */
    public function setBestOfferType($bestOfferType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BestOfferTypeCodeType::valueIsValid($bestOfferType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BestOfferTypeCodeType', is_array($bestOfferType) ? implode(', ', $bestOfferType) : var_export($bestOfferType, true), implode(', ', \EnumType\BestOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferType = $bestOfferType;
        return $this;
    }
    /**
     * Get NewBestOffer value
     * @return bool|null
     */
    public function getNewBestOffer()
    {
        return $this->NewBestOffer;
    }
    /**
     * Set NewBestOffer value
     * @param bool $newBestOffer
     * @return \StructType\BestOfferDetailsType
     */
    public function setNewBestOffer($newBestOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($newBestOffer) && !is_bool($newBestOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newBestOffer, true), gettype($newBestOffer)), __LINE__);
        }
        $this->NewBestOffer = $newBestOffer;
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
     * @return \StructType\BestOfferDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
