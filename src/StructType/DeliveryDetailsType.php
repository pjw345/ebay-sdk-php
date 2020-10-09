<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DeliveryDetails</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DeliveryDetails</b> container is only applicable and returned if the buyer purchased a digital
 * gift card, and is either keeping the gift card or giving that gift card to another person.
 * @subpackage Structs
 */
class DeliveryDetailsType extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is
     * giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the
     * buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \StructType\DigitalDeliveryUserType
     */
    public $Recipient;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's
     * name and email will appear in the <strong>Recipient</strong> container. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer
     * or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \StructType\DigitalDeliveryUserType
     */
    public $Sender;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DeliveryDetailsType
     * @uses DeliveryDetailsType::setRecipient()
     * @uses DeliveryDetailsType::setSender()
     * @uses DeliveryDetailsType::setAny()
     * @param \StructType\DigitalDeliveryUserType $recipient
     * @param \StructType\DigitalDeliveryUserType $sender
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\DigitalDeliveryUserType $recipient = null, \StructType\DigitalDeliveryUserType $sender = null, \DOMDocument $any = null)
    {
        $this
            ->setRecipient($recipient)
            ->setSender($sender)
            ->setAny($any);
    }
    /**
     * Get Recipient value
     * @return \StructType\DigitalDeliveryUserType|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \StructType\DigitalDeliveryUserType $recipient
     * @return \StructType\DeliveryDetailsType
     */
    public function setRecipient(\StructType\DigitalDeliveryUserType $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get Sender value
     * @return \StructType\DigitalDeliveryUserType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \StructType\DigitalDeliveryUserType $sender
     * @return \StructType\DeliveryDetailsType
     */
    public function setSender(\StructType\DigitalDeliveryUserType $sender = null)
    {
        $this->Sender = $sender;
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
     * @return \StructType\DeliveryDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
