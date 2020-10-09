<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for individual message information.
 * @subpackage Structs
 */
class MemberMessageType extends AbstractStructBase
{
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Type of message being retrieved. Note that some message types can only be created via the eBay Web site.
     * - minOccurs: 0
     * @var string
     */
    public $MessageType;
    /**
     * The QuestionType
     * Meta information extracted from the WSDL
     * - documentation: Context of the question (e.g. Shipping, General).
     * - minOccurs: 0
     * @var string
     */
    public $QuestionType;
    /**
     * The EmailCopyToSender
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a copy of the messages is to be emailed to the sender. If omitted, this defaults to whatever the user set in preferences.
     * - minOccurs: 0
     * @var bool
     */
    public $EmailCopyToSender;
    /**
     * The HideSendersEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $HideSendersEmailAddress;
    /**
     * The DisplayToPublic
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the member message is viewable in the item listing.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayToPublic;
    /**
     * The SenderID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the person who asked the question or sent the message.
     * - minOccurs: 0
     * @var string
     */
    public $SenderID;
    /**
     * The SenderEmail
     * Meta information extracted from the WSDL
     * - documentation: SenderEmail contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email
     * address.) SenderEmail is returned if MessageType is AskSellerQuestion. SenderEmail is also returned in the AskSellerQuestion notification. The following functionality of this field has been deprecated: return of a dynamic email address.
     * - minOccurs: 0
     * @var string
     */
    public $SenderEmail;
    /**
     * The RecipientID
     * Meta information extracted from the WSDL
     * - documentation: Recipient's eBay user ID. For AddMemberMessagesAAQToBidder, it must be the seller of an item, that item's bidder, or a user who has made an offer on that item using Best Offer. Note: maxOccurs is a shared schema element and needs to
     * be unbounded for AddMemberMessagesAAQToBidder. For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request. For all other uses, there can only be one RecipientID.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RecipientID;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: Subject of this email message.
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - documentation: Content of the message is input into this string field. HTML formatting is not allowed in the body of the message. If plain HTML is used, an error occurs and the message will not go through. If encoded HTML is used, the message may
     * go through but the formatting will not be successful, and the recipient of the message will just see the HTML formatting tags.
     * - minOccurs: 0
     * @var string
     */
    public $Body;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: ID that uniquely identifies a message for a given user. <br><br> This value is not the same as the value used for the GetMyMessages MessageID. However, this MessageID value can be used as the GetMyMessages ExternalID.
     * - minOccurs: 0
     * @var string
     */
    public $MessageID;
    /**
     * The ParentMessageID
     * Meta information extracted from the WSDL
     * - documentation: ID number of the question to which this message is responding.
     * - minOccurs: 0
     * @var string
     */
    public $ParentMessageID;
    /**
     * The MessageMedia
     * Meta information extracted from the WSDL
     * - documentation: Media details attached to the message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MessageMediaType[]
     */
    public $MessageMedia;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MemberMessageType
     * @uses MemberMessageType::setMessageType()
     * @uses MemberMessageType::setQuestionType()
     * @uses MemberMessageType::setEmailCopyToSender()
     * @uses MemberMessageType::setHideSendersEmailAddress()
     * @uses MemberMessageType::setDisplayToPublic()
     * @uses MemberMessageType::setSenderID()
     * @uses MemberMessageType::setSenderEmail()
     * @uses MemberMessageType::setRecipientID()
     * @uses MemberMessageType::setSubject()
     * @uses MemberMessageType::setBody()
     * @uses MemberMessageType::setMessageID()
     * @uses MemberMessageType::setParentMessageID()
     * @uses MemberMessageType::setMessageMedia()
     * @uses MemberMessageType::setAny()
     * @param string $messageType
     * @param string $questionType
     * @param bool $emailCopyToSender
     * @param bool $hideSendersEmailAddress
     * @param bool $displayToPublic
     * @param string $senderID
     * @param string $senderEmail
     * @param string[] $recipientID
     * @param string $subject
     * @param string $body
     * @param string $messageID
     * @param string $parentMessageID
     * @param \StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument $any
     */
    public function __construct($messageType = null, $questionType = null, $emailCopyToSender = null, $hideSendersEmailAddress = null, $displayToPublic = null, $senderID = null, $senderEmail = null, array $recipientID = array(), $subject = null, $body = null, $messageID = null, $parentMessageID = null, array $messageMedia = array(), \DOMDocument $any = null)
    {
        $this
            ->setMessageType($messageType)
            ->setQuestionType($questionType)
            ->setEmailCopyToSender($emailCopyToSender)
            ->setHideSendersEmailAddress($hideSendersEmailAddress)
            ->setDisplayToPublic($displayToPublic)
            ->setSenderID($senderID)
            ->setSenderEmail($senderEmail)
            ->setRecipientID($recipientID)
            ->setSubject($subject)
            ->setBody($body)
            ->setMessageID($messageID)
            ->setParentMessageID($parentMessageID)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \EnumType\MessageTypeCodeType::valueIsValid()
     * @uses \EnumType\MessageTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageType
     * @return \StructType\MemberMessageType
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MessageTypeCodeType::valueIsValid($messageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MessageTypeCodeType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \EnumType\MessageTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        return $this;
    }
    /**
     * Get QuestionType value
     * @return string|null
     */
    public function getQuestionType()
    {
        return $this->QuestionType;
    }
    /**
     * Set QuestionType value
     * @uses \EnumType\QuestionTypeCodeType::valueIsValid()
     * @uses \EnumType\QuestionTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $questionType
     * @return \StructType\MemberMessageType
     */
    public function setQuestionType($questionType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\QuestionTypeCodeType::valueIsValid($questionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\QuestionTypeCodeType', is_array($questionType) ? implode(', ', $questionType) : var_export($questionType, true), implode(', ', \EnumType\QuestionTypeCodeType::getValidValues())), __LINE__);
        }
        $this->QuestionType = $questionType;
        return $this;
    }
    /**
     * Get EmailCopyToSender value
     * @return bool|null
     */
    public function getEmailCopyToSender()
    {
        return $this->EmailCopyToSender;
    }
    /**
     * Set EmailCopyToSender value
     * @param bool $emailCopyToSender
     * @return \StructType\MemberMessageType
     */
    public function setEmailCopyToSender($emailCopyToSender = null)
    {
        // validation for constraint: boolean
        if (!is_null($emailCopyToSender) && !is_bool($emailCopyToSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailCopyToSender, true), gettype($emailCopyToSender)), __LINE__);
        }
        $this->EmailCopyToSender = $emailCopyToSender;
        return $this;
    }
    /**
     * Get HideSendersEmailAddress value
     * @return bool|null
     */
    public function getHideSendersEmailAddress()
    {
        return $this->HideSendersEmailAddress;
    }
    /**
     * Set HideSendersEmailAddress value
     * @param bool $hideSendersEmailAddress
     * @return \StructType\MemberMessageType
     */
    public function setHideSendersEmailAddress($hideSendersEmailAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideSendersEmailAddress) && !is_bool($hideSendersEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideSendersEmailAddress, true), gettype($hideSendersEmailAddress)), __LINE__);
        }
        $this->HideSendersEmailAddress = $hideSendersEmailAddress;
        return $this;
    }
    /**
     * Get DisplayToPublic value
     * @return bool|null
     */
    public function getDisplayToPublic()
    {
        return $this->DisplayToPublic;
    }
    /**
     * Set DisplayToPublic value
     * @param bool $displayToPublic
     * @return \StructType\MemberMessageType
     */
    public function setDisplayToPublic($displayToPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayToPublic) && !is_bool($displayToPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayToPublic, true), gettype($displayToPublic)), __LINE__);
        }
        $this->DisplayToPublic = $displayToPublic;
        return $this;
    }
    /**
     * Get SenderID value
     * @return string|null
     */
    public function getSenderID()
    {
        return $this->SenderID;
    }
    /**
     * Set SenderID value
     * @param string $senderID
     * @return \StructType\MemberMessageType
     */
    public function setSenderID($senderID = null)
    {
        // validation for constraint: string
        if (!is_null($senderID) && !is_string($senderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderID, true), gettype($senderID)), __LINE__);
        }
        $this->SenderID = $senderID;
        return $this;
    }
    /**
     * Get SenderEmail value
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->SenderEmail;
    }
    /**
     * Set SenderEmail value
     * @param string $senderEmail
     * @return \StructType\MemberMessageType
     */
    public function setSenderEmail($senderEmail = null)
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->SenderEmail = $senderEmail;
        return $this;
    }
    /**
     * Get RecipientID value
     * @return string[]|null
     */
    public function getRecipientID()
    {
        return $this->RecipientID;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientIDForArrayConstraintsFromSetRecipientID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageTypeRecipientIDItem) {
            // validation for constraint: itemType
            if (!is_string($memberMessageTypeRecipientIDItem)) {
                $invalidValues[] = is_object($memberMessageTypeRecipientIDItem) ? get_class($memberMessageTypeRecipientIDItem) : sprintf('%s(%s)', gettype($memberMessageTypeRecipientIDItem), var_export($memberMessageTypeRecipientIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecipientID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RecipientID value
     * @throws \InvalidArgumentException
     * @param string[] $recipientID
     * @return \StructType\MemberMessageType
     */
    public function setRecipientID(array $recipientID = array())
    {
        // validation for constraint: array
        if ('' !== ($recipientIDArrayErrorMessage = self::validateRecipientIDForArrayConstraintsFromSetRecipientID($recipientID))) {
            throw new \InvalidArgumentException($recipientIDArrayErrorMessage, __LINE__);
        }
        $this->RecipientID = $recipientID;
        return $this;
    }
    /**
     * Add item to RecipientID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\MemberMessageType
     */
    public function addToRecipientID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RecipientID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecipientID[] = $item;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\MemberMessageType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Body value
     * @return string|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param string $body
     * @return \StructType\MemberMessageType
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->Body = $body;
        return $this;
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \StructType\MemberMessageType
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get ParentMessageID value
     * @return string|null
     */
    public function getParentMessageID()
    {
        return $this->ParentMessageID;
    }
    /**
     * Set ParentMessageID value
     * @param string $parentMessageID
     * @return \StructType\MemberMessageType
     */
    public function setParentMessageID($parentMessageID = null)
    {
        // validation for constraint: string
        if (!is_null($parentMessageID) && !is_string($parentMessageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentMessageID, true), gettype($parentMessageID)), __LINE__);
        }
        $this->ParentMessageID = $parentMessageID;
        return $this;
    }
    /**
     * Get MessageMedia value
     * @return \StructType\MessageMediaType[]|null
     */
    public function getMessageMedia()
    {
        return $this->MessageMedia;
    }
    /**
     * This method is responsible for validating the values passed to the setMessageMedia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageMedia method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageMediaForArrayConstraintsFromSetMessageMedia(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$memberMessageTypeMessageMediaItem instanceof \StructType\MessageMediaType) {
                $invalidValues[] = is_object($memberMessageTypeMessageMediaItem) ? get_class($memberMessageTypeMessageMediaItem) : sprintf('%s(%s)', gettype($memberMessageTypeMessageMediaItem), var_export($memberMessageTypeMessageMediaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageMedia property can only contain items of type \StructType\MessageMediaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MessageMedia value
     * @throws \InvalidArgumentException
     * @param \StructType\MessageMediaType[] $messageMedia
     * @return \StructType\MemberMessageType
     */
    public function setMessageMedia(array $messageMedia = array())
    {
        // validation for constraint: array
        if ('' !== ($messageMediaArrayErrorMessage = self::validateMessageMediaForArrayConstraintsFromSetMessageMedia($messageMedia))) {
            throw new \InvalidArgumentException($messageMediaArrayErrorMessage, __LINE__);
        }
        $this->MessageMedia = $messageMedia;
        return $this;
    }
    /**
     * Add item to MessageMedia value
     * @throws \InvalidArgumentException
     * @param \StructType\MessageMediaType $item
     * @return \StructType\MemberMessageType
     */
    public function addToMessageMedia(\StructType\MessageMediaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MessageMediaType) {
            throw new \InvalidArgumentException(sprintf('The MessageMedia property can only contain items of type \StructType\MessageMediaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MessageMedia[] = $item;
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
     * @return \StructType\MemberMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
