<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the message information for each message specified in MessageIDs. The amount and type of information returned varies based on the requested detail level.
 * @subpackage Structs
 */
class MyMessagesMessageType extends AbstractStructBase
{
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - documentation: Display name of the eBay user that sent the message.
     * - minOccurs: 0
     * @var string
     */
    public $Sender;
    /**
     * The RecipientUserID
     * Meta information extracted from the WSDL
     * - documentation: Displayable user ID of the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientUserID;
    /**
     * The SendToName
     * Meta information extracted from the WSDL
     * - documentation: Displayable name of the user or eBay application to which the message is sent. Only returned for M2M, and if a value exists.
     * - minOccurs: 0
     * @var string
     */
    public $SendToName;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: Subject of the message.
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: ID that uniquely identifies a message for a given user. <br/> <br/> This value is not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages value (used as the GetMyMessages ExternalID) instead. |
     * Type defining the <b>MessageID</b> field used in <b>GetMyMessages</b>, <b>ReviseMyMessages</b>, and <b>DeleteMyMessages</b> to identify a specific eBay message to retrieve, revise, or delete, respectively. Up to 10 <b>MessageID</b> values can be
     * specified in one API call.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $MessageID;
    /**
     * The ExternalMessageID
     * Meta information extracted from the WSDL
     * - documentation: ID used by an external application to uniquely identify a message. Returned only when specified by the external application on message creation. <br><br> This value is equivalent to the value used for MessageID in GetMemberMessages.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalMessageID;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - documentation: Content type of the body text. The three acceptable values are "TEXT", "HTML", and "XML" (Note: This is case sensitive).
     * - minOccurs: 0
     * @var string
     */
    public $ContentType;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Contains the message content, and can contain a threaded message. This field can contain plain text or HTML, depending on the format of the original message. The API does not check the email-format preferences in My Messages on the
     * eBay Web site.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The Flagged
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the message is displayed with a flag in the seller's My Messages mailbox on eBay. It is strongly recommended that the seller act on the message by the specified date (or within 60 days, if not specified).
     * - minOccurs: 0
     * @var bool
     */
    public $Flagged;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a message has been viewed by a given user. Note that retrieving a message with the API does not mark it as read.
     * - minOccurs: 0
     * @var bool
     */
    public $Read;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time that a message was created by the sender.
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The ReceiveDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time that a message was received by My Messages and stored in a database for the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $ReceiveDate;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which a message expires.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of an eBay listing. This field is returned if the corresponding message is associated with a specific listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ResponseDetails
     * Meta information extracted from the WSDL
     * - documentation: Details relating to the response to a message.
     * - minOccurs: 0
     * @var \StructType\MyMessagesResponseDetailsType
     */
    public $ResponseDetails;
    /**
     * The ForwardDetails
     * Meta information extracted from the WSDL
     * - documentation: Details relating to the forwarding of a message. Only returned if the message is forwarded.
     * - minOccurs: 0
     * @var \StructType\MyMessagesForwardDetailsType
     */
    public $ForwardDetails;
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: Details relating to a My Messages folder.
     * - minOccurs: 0
     * @var \StructType\MyMessagesFolderType
     */
    public $Folder;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Message body in plain text format. The message body is displayed in plain text even if the eBay user's Preferred Email Format preference on My eBay is set to HTML. Graphics and text formatting are dropped if the eBay user's
     * preference is set to HTML.
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Type of message being retrieved through GetMyMessages. This is available only on the US site.
     * - minOccurs: 0
     * @var string
     */
    public $MessageType;
    /**
     * The ListingStatus
     * Meta information extracted from the WSDL
     * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This
     * processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the
     * listing. <br><br> <span class="tablenote"><b>Note:</b> For GetMyMessages, the listing status reflects the status of the listing at the time the question was created. The listing status for this call must not match the listing status returned by other
     * calls (such as GetItemTransactions). This is returned only if Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned in the Sandbox environment. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ListingStatus;
    /**
     * The QuestionType
     * Meta information extracted from the WSDL
     * - documentation: Currently available only on the US site. Context of the question (e.g. Shipping, General). Corresponds to the message subject. Applies if Messages.Message.MessageType is AskSellerQuestion.
     * - minOccurs: 0
     * @var string
     */
    public $QuestionType;
    /**
     * The Replied
     * Meta information extracted from the WSDL
     * - documentation: Indicates if there has been a reply to the message.
     * - minOccurs: 0
     * @var bool
     */
    public $Replied;
    /**
     * The HighPriority
     * Meta information extracted from the WSDL
     * - documentation: Indicates if this message is marked as a high-priority message.
     * - minOccurs: 0
     * @var bool
     */
    public $HighPriority;
    /**
     * The ItemEndTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time for the ended item.
     * - minOccurs: 0
     * @var string
     */
    public $ItemEndTime;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: Title of the item listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemTitle;
    /**
     * The MessageMedia
     * Meta information extracted from the WSDL
     * - documentation: Media details stored as part of the message.
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
     * Constructor method for MyMessagesMessageType
     * @uses MyMessagesMessageType::setSender()
     * @uses MyMessagesMessageType::setRecipientUserID()
     * @uses MyMessagesMessageType::setSendToName()
     * @uses MyMessagesMessageType::setSubject()
     * @uses MyMessagesMessageType::setMessageID()
     * @uses MyMessagesMessageType::setExternalMessageID()
     * @uses MyMessagesMessageType::setContentType()
     * @uses MyMessagesMessageType::setText()
     * @uses MyMessagesMessageType::setFlagged()
     * @uses MyMessagesMessageType::setRead()
     * @uses MyMessagesMessageType::setCreationDate()
     * @uses MyMessagesMessageType::setReceiveDate()
     * @uses MyMessagesMessageType::setExpirationDate()
     * @uses MyMessagesMessageType::setItemID()
     * @uses MyMessagesMessageType::setResponseDetails()
     * @uses MyMessagesMessageType::setForwardDetails()
     * @uses MyMessagesMessageType::setFolder()
     * @uses MyMessagesMessageType::setContent()
     * @uses MyMessagesMessageType::setMessageType()
     * @uses MyMessagesMessageType::setListingStatus()
     * @uses MyMessagesMessageType::setQuestionType()
     * @uses MyMessagesMessageType::setReplied()
     * @uses MyMessagesMessageType::setHighPriority()
     * @uses MyMessagesMessageType::setItemEndTime()
     * @uses MyMessagesMessageType::setItemTitle()
     * @uses MyMessagesMessageType::setMessageMedia()
     * @uses MyMessagesMessageType::setAny()
     * @param string $sender
     * @param string $recipientUserID
     * @param string $sendToName
     * @param string $subject
     * @param string $messageID
     * @param string $externalMessageID
     * @param string $contentType
     * @param string $text
     * @param bool $flagged
     * @param bool $read
     * @param string $creationDate
     * @param string $receiveDate
     * @param string $expirationDate
     * @param string $itemID
     * @param \StructType\MyMessagesResponseDetailsType $responseDetails
     * @param \StructType\MyMessagesForwardDetailsType $forwardDetails
     * @param \StructType\MyMessagesFolderType $folder
     * @param string $content
     * @param string $messageType
     * @param string $listingStatus
     * @param string $questionType
     * @param bool $replied
     * @param bool $highPriority
     * @param string $itemEndTime
     * @param string $itemTitle
     * @param \StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument $any
     */
    public function __construct($sender = null, $recipientUserID = null, $sendToName = null, $subject = null, $messageID = null, $externalMessageID = null, $contentType = null, $text = null, $flagged = null, $read = null, $creationDate = null, $receiveDate = null, $expirationDate = null, $itemID = null, \StructType\MyMessagesResponseDetailsType $responseDetails = null, \StructType\MyMessagesForwardDetailsType $forwardDetails = null, \StructType\MyMessagesFolderType $folder = null, $content = null, $messageType = null, $listingStatus = null, $questionType = null, $replied = null, $highPriority = null, $itemEndTime = null, $itemTitle = null, array $messageMedia = array(), \DOMDocument $any = null)
    {
        $this
            ->setSender($sender)
            ->setRecipientUserID($recipientUserID)
            ->setSendToName($sendToName)
            ->setSubject($subject)
            ->setMessageID($messageID)
            ->setExternalMessageID($externalMessageID)
            ->setContentType($contentType)
            ->setText($text)
            ->setFlagged($flagged)
            ->setRead($read)
            ->setCreationDate($creationDate)
            ->setReceiveDate($receiveDate)
            ->setExpirationDate($expirationDate)
            ->setItemID($itemID)
            ->setResponseDetails($responseDetails)
            ->setForwardDetails($forwardDetails)
            ->setFolder($folder)
            ->setContent($content)
            ->setMessageType($messageType)
            ->setListingStatus($listingStatus)
            ->setQuestionType($questionType)
            ->setReplied($replied)
            ->setHighPriority($highPriority)
            ->setItemEndTime($itemEndTime)
            ->setItemTitle($itemTitle)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
    }
    /**
     * Get Sender value
     * @return string|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param string $sender
     * @return \StructType\MyMessagesMessageType
     */
    public function setSender($sender = null)
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get RecipientUserID value
     * @return string|null
     */
    public function getRecipientUserID()
    {
        return $this->RecipientUserID;
    }
    /**
     * Set RecipientUserID value
     * @param string $recipientUserID
     * @return \StructType\MyMessagesMessageType
     */
    public function setRecipientUserID($recipientUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientUserID) && !is_string($recipientUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientUserID, true), gettype($recipientUserID)), __LINE__);
        }
        $this->RecipientUserID = $recipientUserID;
        return $this;
    }
    /**
     * Get SendToName value
     * @return string|null
     */
    public function getSendToName()
    {
        return $this->SendToName;
    }
    /**
     * Set SendToName value
     * @param string $sendToName
     * @return \StructType\MyMessagesMessageType
     */
    public function setSendToName($sendToName = null)
    {
        // validation for constraint: string
        if (!is_null($sendToName) && !is_string($sendToName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendToName, true), gettype($sendToName)), __LINE__);
        }
        $this->SendToName = $sendToName;
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
     * @return \StructType\MyMessagesMessageType
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
     * @return \StructType\MyMessagesMessageType
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
     * Get ExternalMessageID value
     * @return string|null
     */
    public function getExternalMessageID()
    {
        return $this->ExternalMessageID;
    }
    /**
     * Set ExternalMessageID value
     * @param string $externalMessageID
     * @return \StructType\MyMessagesMessageType
     */
    public function setExternalMessageID($externalMessageID = null)
    {
        // validation for constraint: string
        if (!is_null($externalMessageID) && !is_string($externalMessageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalMessageID, true), gettype($externalMessageID)), __LINE__);
        }
        $this->ExternalMessageID = $externalMessageID;
        return $this;
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $contentType
     * @return \StructType\MyMessagesMessageType
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->ContentType = $contentType;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \StructType\MyMessagesMessageType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Flagged value
     * @return bool|null
     */
    public function getFlagged()
    {
        return $this->Flagged;
    }
    /**
     * Set Flagged value
     * @param bool $flagged
     * @return \StructType\MyMessagesMessageType
     */
    public function setFlagged($flagged = null)
    {
        // validation for constraint: boolean
        if (!is_null($flagged) && !is_bool($flagged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagged, true), gettype($flagged)), __LINE__);
        }
        $this->Flagged = $flagged;
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \StructType\MyMessagesMessageType
     */
    public function setRead($read = null)
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\MyMessagesMessageType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get ReceiveDate value
     * @return string|null
     */
    public function getReceiveDate()
    {
        return $this->ReceiveDate;
    }
    /**
     * Set ReceiveDate value
     * @param string $receiveDate
     * @return \StructType\MyMessagesMessageType
     */
    public function setReceiveDate($receiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($receiveDate) && !is_string($receiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiveDate, true), gettype($receiveDate)), __LINE__);
        }
        $this->ReceiveDate = $receiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \StructType\MyMessagesMessageType
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
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
     * @return \StructType\MyMessagesMessageType
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
     * Get ResponseDetails value
     * @return \StructType\MyMessagesResponseDetailsType|null
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }
    /**
     * Set ResponseDetails value
     * @param \StructType\MyMessagesResponseDetailsType $responseDetails
     * @return \StructType\MyMessagesMessageType
     */
    public function setResponseDetails(\StructType\MyMessagesResponseDetailsType $responseDetails = null)
    {
        $this->ResponseDetails = $responseDetails;
        return $this;
    }
    /**
     * Get ForwardDetails value
     * @return \StructType\MyMessagesForwardDetailsType|null
     */
    public function getForwardDetails()
    {
        return $this->ForwardDetails;
    }
    /**
     * Set ForwardDetails value
     * @param \StructType\MyMessagesForwardDetailsType $forwardDetails
     * @return \StructType\MyMessagesMessageType
     */
    public function setForwardDetails(\StructType\MyMessagesForwardDetailsType $forwardDetails = null)
    {
        $this->ForwardDetails = $forwardDetails;
        return $this;
    }
    /**
     * Get Folder value
     * @return \StructType\MyMessagesFolderType|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \StructType\MyMessagesFolderType $folder
     * @return \StructType\MyMessagesMessageType
     */
    public function setFolder(\StructType\MyMessagesFolderType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \StructType\MyMessagesMessageType
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
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
     * @return \StructType\MyMessagesMessageType
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
     * Get ListingStatus value
     * @return string|null
     */
    public function getListingStatus()
    {
        return $this->ListingStatus;
    }
    /**
     * Set ListingStatus value
     * @uses \EnumType\ListingStatusCodeType::valueIsValid()
     * @uses \EnumType\ListingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingStatus
     * @return \StructType\MyMessagesMessageType
     */
    public function setListingStatus($listingStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingStatusCodeType::valueIsValid($listingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingStatusCodeType', is_array($listingStatus) ? implode(', ', $listingStatus) : var_export($listingStatus, true), implode(', ', \EnumType\ListingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ListingStatus = $listingStatus;
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
     * @return \StructType\MyMessagesMessageType
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
     * Get Replied value
     * @return bool|null
     */
    public function getReplied()
    {
        return $this->Replied;
    }
    /**
     * Set Replied value
     * @param bool $replied
     * @return \StructType\MyMessagesMessageType
     */
    public function setReplied($replied = null)
    {
        // validation for constraint: boolean
        if (!is_null($replied) && !is_bool($replied)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replied, true), gettype($replied)), __LINE__);
        }
        $this->Replied = $replied;
        return $this;
    }
    /**
     * Get HighPriority value
     * @return bool|null
     */
    public function getHighPriority()
    {
        return $this->HighPriority;
    }
    /**
     * Set HighPriority value
     * @param bool $highPriority
     * @return \StructType\MyMessagesMessageType
     */
    public function setHighPriority($highPriority = null)
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highPriority, true), gettype($highPriority)), __LINE__);
        }
        $this->HighPriority = $highPriority;
        return $this;
    }
    /**
     * Get ItemEndTime value
     * @return string|null
     */
    public function getItemEndTime()
    {
        return $this->ItemEndTime;
    }
    /**
     * Set ItemEndTime value
     * @param string $itemEndTime
     * @return \StructType\MyMessagesMessageType
     */
    public function setItemEndTime($itemEndTime = null)
    {
        // validation for constraint: string
        if (!is_null($itemEndTime) && !is_string($itemEndTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemEndTime, true), gettype($itemEndTime)), __LINE__);
        }
        $this->ItemEndTime = $itemEndTime;
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \StructType\MyMessagesMessageType
     */
    public function setItemTitle($itemTitle = null)
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
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
        foreach ($values as $myMessagesMessageTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$myMessagesMessageTypeMessageMediaItem instanceof \StructType\MessageMediaType) {
                $invalidValues[] = is_object($myMessagesMessageTypeMessageMediaItem) ? get_class($myMessagesMessageTypeMessageMediaItem) : sprintf('%s(%s)', gettype($myMessagesMessageTypeMessageMediaItem), var_export($myMessagesMessageTypeMessageMediaItem, true));
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
     * @return \StructType\MyMessagesMessageType
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
     * @return \StructType\MyMessagesMessageType
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
     * @return \StructType\MyMessagesMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
