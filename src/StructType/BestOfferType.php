<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BestOffer</b> container, which consists of information on one Best Offer or counter offer. This information includes the price of the offer, the expiration of the offer, and any messaging provided by the
 * prospective buyer or seller.
 * @subpackage Structs
 */
class BestOfferType extends AbstractStructBase
{
    /**
     * The BestOfferID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferID;
    /**
     * The ExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating when a Best Offer will naturally expire (if the seller has not accepted or declined the offer).
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationTime;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of information about the prospective buyer who made the Best Offer.
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $Buyer;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - documentation: The amount of the Best Offer or counter offer. For this field to be returned, the user must have a relationship to the Best Offer, either as the seller, buyer, or potential buyer who has made the Best Offer or counter offer.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Price;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the Best Offer or counter offer. For <b>PlaceOffer</b>, the only applicable values are <code>Accepted</code>, <code>AdminEnded</code>, <code>Declined</code>, and <code>Expired</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The quantity of the item for which the buyer is making a Best Offer. This value will usually be <code>1</code>, unless the buyer is making an offer on multiple quantity of a line item in a multi-quantity listing.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The BuyerMessage
     * Meta information extracted from the WSDL
     * - documentation: A prospective buyer has the option to include a comment when placing a Best Offer or making a counter offer to the seller's counter offer. This field will display that comment.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerMessage;
    /**
     * The SellerMessage
     * Meta information extracted from the WSDL
     * - documentation: A seller has the option to include a comment when making a counter offer to the prospective buyer's Best Offer. This field will display that comment.
     * - minOccurs: 0
     * @var string
     */
    public $SellerMessage;
    /**
     * The BestOfferCodeType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether the corresponding offer is a Best Offer, a seller's counter offer, or a buyer counter offer to the seller's counter offer.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferCodeType;
    /**
     * The CallStatus
     * Meta information extracted from the WSDL
     * - documentation: The value in this field (<code>Success</code> or <code>Failure</code>) will indicate whether or not the seller's attempt to accept, decline, or counter offer a Best Offer was successful. This field is only used by the
     * <b>RespondToBestOffer</b> response.
     * - minOccurs: 0
     * @var string
     */
    public $CallStatus;
    /**
     * The NewBestOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     * - minOccurs: 0
     * @var bool
     */
    public $NewBestOffer;
    /**
     * The ImmediatePayEligible
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     * - minOccurs: 0
     * @var bool
     */
    public $ImmediatePayEligible;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BestOfferType
     * @uses BestOfferType::setBestOfferID()
     * @uses BestOfferType::setExpirationTime()
     * @uses BestOfferType::setBuyer()
     * @uses BestOfferType::setPrice()
     * @uses BestOfferType::setStatus()
     * @uses BestOfferType::setQuantity()
     * @uses BestOfferType::setBuyerMessage()
     * @uses BestOfferType::setSellerMessage()
     * @uses BestOfferType::setBestOfferCodeType()
     * @uses BestOfferType::setCallStatus()
     * @uses BestOfferType::setNewBestOffer()
     * @uses BestOfferType::setImmediatePayEligible()
     * @uses BestOfferType::setAny()
     * @param string $bestOfferID
     * @param string $expirationTime
     * @param \StructType\UserType $buyer
     * @param \StructType\AmountType $price
     * @param string $status
     * @param int $quantity
     * @param string $buyerMessage
     * @param string $sellerMessage
     * @param string $bestOfferCodeType
     * @param string $callStatus
     * @param bool $newBestOffer
     * @param bool $immediatePayEligible
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferID = null, $expirationTime = null, \StructType\UserType $buyer = null, \StructType\AmountType $price = null, $status = null, $quantity = null, $buyerMessage = null, $sellerMessage = null, $bestOfferCodeType = null, $callStatus = null, $newBestOffer = null, $immediatePayEligible = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferID($bestOfferID)
            ->setExpirationTime($expirationTime)
            ->setBuyer($buyer)
            ->setPrice($price)
            ->setStatus($status)
            ->setQuantity($quantity)
            ->setBuyerMessage($buyerMessage)
            ->setSellerMessage($sellerMessage)
            ->setBestOfferCodeType($bestOfferCodeType)
            ->setCallStatus($callStatus)
            ->setNewBestOffer($newBestOffer)
            ->setImmediatePayEligible($immediatePayEligible)
            ->setAny($any);
    }
    /**
     * Get BestOfferID value
     * @return string|null
     */
    public function getBestOfferID()
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @param string $bestOfferID
     * @return \StructType\BestOfferType
     */
    public function setBestOfferID($bestOfferID = null)
    {
        // validation for constraint: string
        if (!is_null($bestOfferID) && !is_string($bestOfferID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bestOfferID, true), gettype($bestOfferID)), __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \StructType\BestOfferType
     */
    public function setExpirationTime($expirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        return $this;
    }
    /**
     * Get Buyer value
     * @return \StructType\UserType|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \StructType\UserType $buyer
     * @return \StructType\BestOfferType
     */
    public function setBuyer(\StructType\UserType $buyer = null)
    {
        $this->Buyer = $buyer;
        return $this;
    }
    /**
     * Get Price value
     * @return \StructType\AmountType|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \StructType\AmountType $price
     * @return \StructType\BestOfferType
     */
    public function setPrice(\StructType\AmountType $price = null)
    {
        $this->Price = $price;
        return $this;
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
     * @uses \EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\BestOfferType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BestOfferStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BestOfferStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \StructType\BestOfferType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get BuyerMessage value
     * @return string|null
     */
    public function getBuyerMessage()
    {
        return $this->BuyerMessage;
    }
    /**
     * Set BuyerMessage value
     * @param string $buyerMessage
     * @return \StructType\BestOfferType
     */
    public function setBuyerMessage($buyerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($buyerMessage) && !is_string($buyerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerMessage, true), gettype($buyerMessage)), __LINE__);
        }
        $this->BuyerMessage = $buyerMessage;
        return $this;
    }
    /**
     * Get SellerMessage value
     * @return string|null
     */
    public function getSellerMessage()
    {
        return $this->SellerMessage;
    }
    /**
     * Set SellerMessage value
     * @param string $sellerMessage
     * @return \StructType\BestOfferType
     */
    public function setSellerMessage($sellerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($sellerMessage) && !is_string($sellerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerMessage, true), gettype($sellerMessage)), __LINE__);
        }
        $this->SellerMessage = $sellerMessage;
        return $this;
    }
    /**
     * Get BestOfferCodeType value
     * @return string|null
     */
    public function getBestOfferCodeType()
    {
        return $this->BestOfferCodeType;
    }
    /**
     * Set BestOfferCodeType value
     * @uses \EnumType\BestOfferTypeCodeType::valueIsValid()
     * @uses \EnumType\BestOfferTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferCodeType
     * @return \StructType\BestOfferType
     */
    public function setBestOfferCodeType($bestOfferCodeType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BestOfferTypeCodeType::valueIsValid($bestOfferCodeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BestOfferTypeCodeType', is_array($bestOfferCodeType) ? implode(', ', $bestOfferCodeType) : var_export($bestOfferCodeType, true), implode(', ', \EnumType\BestOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferCodeType = $bestOfferCodeType;
        return $this;
    }
    /**
     * Get CallStatus value
     * @return string|null
     */
    public function getCallStatus()
    {
        return $this->CallStatus;
    }
    /**
     * Set CallStatus value
     * @param string $callStatus
     * @return \StructType\BestOfferType
     */
    public function setCallStatus($callStatus = null)
    {
        // validation for constraint: string
        if (!is_null($callStatus) && !is_string($callStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callStatus, true), gettype($callStatus)), __LINE__);
        }
        $this->CallStatus = $callStatus;
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
     * @return \StructType\BestOfferType
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
     * Get ImmediatePayEligible value
     * @return bool|null
     */
    public function getImmediatePayEligible()
    {
        return $this->ImmediatePayEligible;
    }
    /**
     * Set ImmediatePayEligible value
     * @param bool $immediatePayEligible
     * @return \StructType\BestOfferType
     */
    public function setImmediatePayEligible($immediatePayEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayEligible) && !is_bool($immediatePayEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayEligible, true), gettype($immediatePayEligible)), __LINE__);
        }
        $this->ImmediatePayEligible = $immediatePayEligible;
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
     * @return \StructType\BestOfferType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
