<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBidderListResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to GetBidderListRequest. | Response to a <b>GetBidderList</b> call, which retrieves all items the user is currently bidding on, or has won or purchased.
 * @subpackage Structs
 */
class GetBidderListResponseType extends AbstractResponseType
{
    /**
     * The Bidder
     * Meta information extracted from the WSDL
     * - documentation: Data for one eBay bidder.
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $Bidder;
    /**
     * The BidItemArray
     * Meta information extracted from the WSDL
     * - documentation: Array of items the bidder has bid on, has won or has lost.
     * - minOccurs: 0
     * @var \ArrayType\ItemArrayType
     */
    public $BidItemArray;
    /**
     * Constructor method for GetBidderListResponseType
     * @uses GetBidderListResponseType::setBidder()
     * @uses GetBidderListResponseType::setBidItemArray()
     * @param \StructType\UserType $bidder
     * @param \ArrayType\ItemArrayType $bidItemArray
     */
    public function __construct(\StructType\UserType $bidder = null, \ArrayType\ItemArrayType $bidItemArray = null)
    {
        $this
            ->setBidder($bidder)
            ->setBidItemArray($bidItemArray);
    }
    /**
     * Get Bidder value
     * @return \StructType\UserType|null
     */
    public function getBidder()
    {
        return $this->Bidder;
    }
    /**
     * Set Bidder value
     * @param \StructType\UserType $bidder
     * @return \StructType\GetBidderListResponseType
     */
    public function setBidder(\StructType\UserType $bidder = null)
    {
        $this->Bidder = $bidder;
        return $this;
    }
    /**
     * Get BidItemArray value
     * @return \ArrayType\ItemArrayType|null
     */
    public function getBidItemArray()
    {
        return $this->BidItemArray;
    }
    /**
     * Set BidItemArray value
     * @param \ArrayType\ItemArrayType $bidItemArray
     * @return \StructType\GetBidderListResponseType
     */
    public function setBidItemArray(\ArrayType\ItemArrayType $bidItemArray = null)
    {
        $this->BidItemArray = $bidItemArray;
        return $this;
    }
}
