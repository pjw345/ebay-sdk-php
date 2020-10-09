<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessageAAQToPartnerRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
 * @subpackage Structs
 */
class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the listing that is being discussed between the two order partners. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: This container holds the message, and includes the subject, message body, and other details related to the message.
     * - minOccurs: 0
     * @var \StructType\MemberMessageType
     */
    public $MemberMessage;
    /**
     * Constructor method for AddMemberMessageAAQToPartnerRequestType
     * @uses AddMemberMessageAAQToPartnerRequestType::setItemID()
     * @uses AddMemberMessageAAQToPartnerRequestType::setMemberMessage()
     * @param string $itemID
     * @param \StructType\MemberMessageType $memberMessage
     */
    public function __construct($itemID = null, \StructType\MemberMessageType $memberMessage = null)
    {
        $this
            ->setItemID($itemID)
            ->setMemberMessage($memberMessage);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\AddMemberMessageAAQToPartnerRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get MemberMessage value
     * @return \StructType\MemberMessageType|null
     */
    public function getMemberMessage()
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \StructType\MemberMessageType $memberMessage
     * @return \StructType\AddMemberMessageAAQToPartnerRequestType
     */
    public function setMemberMessage(\StructType\MemberMessageType $memberMessage = null)
    {
        $this->MemberMessage = $memberMessage;
        return $this;
    }
}
