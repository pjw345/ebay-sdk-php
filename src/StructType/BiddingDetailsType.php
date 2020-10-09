<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BiddingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BiddingDetails</b> container, which consists of information about the buyer's bidding history on a single auction item.
 * @subpackage Structs
 */
class BiddingDetailsType extends AbstractStructBase
{
    /**
     * The ConvertedMaxBid
     * Meta information extracted from the WSDL
     * - documentation: Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items,
     * it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedMaxBid;
    /**
     * The MaxBid
     * Meta information extracted from the WSDL
     * - documentation: This value is the dollar value of the highest bid that the buyer placed on the auction item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MaxBid;
    /**
     * The QuantityBid
     * Meta information extracted from the WSDL
     * - documentation: This value is the total number of bids that the buyer placed on the auction item throughout the duration of the listing.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityBid;
    /**
     * The QuantityWon
     * Meta information extracted from the WSDL
     * - documentation: This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityWon;
    /**
     * The Winning
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     * - minOccurs: 0
     * @var bool
     */
    public $Winning;
    /**
     * The BidAssistant
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BidAssistant;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BiddingDetailsType
     * @uses BiddingDetailsType::setConvertedMaxBid()
     * @uses BiddingDetailsType::setMaxBid()
     * @uses BiddingDetailsType::setQuantityBid()
     * @uses BiddingDetailsType::setQuantityWon()
     * @uses BiddingDetailsType::setWinning()
     * @uses BiddingDetailsType::setBidAssistant()
     * @uses BiddingDetailsType::setAny()
     * @param \StructType\AmountType $convertedMaxBid
     * @param \StructType\AmountType $maxBid
     * @param int $quantityBid
     * @param int $quantityWon
     * @param bool $winning
     * @param bool $bidAssistant
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $convertedMaxBid = null, \StructType\AmountType $maxBid = null, $quantityBid = null, $quantityWon = null, $winning = null, $bidAssistant = null, \DOMDocument $any = null)
    {
        $this
            ->setConvertedMaxBid($convertedMaxBid)
            ->setMaxBid($maxBid)
            ->setQuantityBid($quantityBid)
            ->setQuantityWon($quantityWon)
            ->setWinning($winning)
            ->setBidAssistant($bidAssistant)
            ->setAny($any);
    }
    /**
     * Get ConvertedMaxBid value
     * @return \StructType\AmountType|null
     */
    public function getConvertedMaxBid()
    {
        return $this->ConvertedMaxBid;
    }
    /**
     * Set ConvertedMaxBid value
     * @param \StructType\AmountType $convertedMaxBid
     * @return \StructType\BiddingDetailsType
     */
    public function setConvertedMaxBid(\StructType\AmountType $convertedMaxBid = null)
    {
        $this->ConvertedMaxBid = $convertedMaxBid;
        return $this;
    }
    /**
     * Get MaxBid value
     * @return \StructType\AmountType|null
     */
    public function getMaxBid()
    {
        return $this->MaxBid;
    }
    /**
     * Set MaxBid value
     * @param \StructType\AmountType $maxBid
     * @return \StructType\BiddingDetailsType
     */
    public function setMaxBid(\StructType\AmountType $maxBid = null)
    {
        $this->MaxBid = $maxBid;
        return $this;
    }
    /**
     * Get QuantityBid value
     * @return int|null
     */
    public function getQuantityBid()
    {
        return $this->QuantityBid;
    }
    /**
     * Set QuantityBid value
     * @param int $quantityBid
     * @return \StructType\BiddingDetailsType
     */
    public function setQuantityBid($quantityBid = null)
    {
        // validation for constraint: int
        if (!is_null($quantityBid) && !(is_int($quantityBid) || ctype_digit($quantityBid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityBid, true), gettype($quantityBid)), __LINE__);
        }
        $this->QuantityBid = $quantityBid;
        return $this;
    }
    /**
     * Get QuantityWon value
     * @return int|null
     */
    public function getQuantityWon()
    {
        return $this->QuantityWon;
    }
    /**
     * Set QuantityWon value
     * @param int $quantityWon
     * @return \StructType\BiddingDetailsType
     */
    public function setQuantityWon($quantityWon = null)
    {
        // validation for constraint: int
        if (!is_null($quantityWon) && !(is_int($quantityWon) || ctype_digit($quantityWon))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityWon, true), gettype($quantityWon)), __LINE__);
        }
        $this->QuantityWon = $quantityWon;
        return $this;
    }
    /**
     * Get Winning value
     * @return bool|null
     */
    public function getWinning()
    {
        return $this->Winning;
    }
    /**
     * Set Winning value
     * @param bool $winning
     * @return \StructType\BiddingDetailsType
     */
    public function setWinning($winning = null)
    {
        // validation for constraint: boolean
        if (!is_null($winning) && !is_bool($winning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($winning, true), gettype($winning)), __LINE__);
        }
        $this->Winning = $winning;
        return $this;
    }
    /**
     * Get BidAssistant value
     * @return bool|null
     */
    public function getBidAssistant()
    {
        return $this->BidAssistant;
    }
    /**
     * Set BidAssistant value
     * @param bool $bidAssistant
     * @return \StructType\BiddingDetailsType
     */
    public function setBidAssistant($bidAssistant = null)
    {
        // validation for constraint: boolean
        if (!is_null($bidAssistant) && !is_bool($bidAssistant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bidAssistant, true), gettype($bidAssistant)), __LINE__);
        }
        $this->BidAssistant = $bidAssistant;
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
     * @return \StructType\BiddingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
