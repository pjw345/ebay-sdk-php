<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DeliveryStatus</b> container, which will list the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only
 * supported delivery method is by email.
 * @subpackage Structs
 */
class DeliveryStatusType extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the current delivery status for the digital gift card that is being delivered by email. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital
     * gift card has been sent to the recipient by email.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DeliveryStatusType
     * @uses DeliveryStatusType::setEmail()
     * @uses DeliveryStatusType::setAny()
     * @param string $email
     * @param \DOMDocument $any
     */
    public function __construct($email = null, \DOMDocument $any = null)
    {
        $this
            ->setEmail($email)
            ->setAny($any);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\DeliveryStatusType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
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
     * @return \StructType\DeliveryStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
