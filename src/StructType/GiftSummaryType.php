<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>GiftSummary</b> container that is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift. The
 * <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card.
 * @subpackage Structs
 */
class GiftSummaryType extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: This free-form text contains the message that the purchaser of the digital gift card left for the recipient of the gift card. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will
     * only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be
     * returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for GiftSummaryType
     * @uses GiftSummaryType::setMessage()
     * @uses GiftSummaryType::setAny()
     * @param string $message
     * @param \DOMDocument $any
     */
    public function __construct($message = null, \DOMDocument $any = null)
    {
        $this
            ->setMessage($message)
            ->setAny($any);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\GiftSummaryType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
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
     * @return \StructType\GiftSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
