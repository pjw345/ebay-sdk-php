<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberMessageExchangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for message metadata.
 * @subpackage Structs
 */
class MemberMessageExchangeType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The item about which the question was asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The Question
     * Meta information extracted from the WSDL
     * - documentation: Contains all the information about the question being asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \StructType\MemberMessageType
     */
    public $Question;
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - documentation: An answer to the question. Returned if the parent container is returned. <br/><br/> For GetAdFormatLeads, returned if the seller responded to the lead's question. Contains the body of the seller's response message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Response;
    /**
     * The MessageStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the message. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $MessageStatus;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - documentation: Date the message was created. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The LastModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: Date the message was last modified. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedDate;
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
     * Constructor method for MemberMessageExchangeType
     * @uses MemberMessageExchangeType::setItem()
     * @uses MemberMessageExchangeType::setQuestion()
     * @uses MemberMessageExchangeType::setResponse()
     * @uses MemberMessageExchangeType::setMessageStatus()
     * @uses MemberMessageExchangeType::setCreationDate()
     * @uses MemberMessageExchangeType::setLastModifiedDate()
     * @uses MemberMessageExchangeType::setMessageMedia()
     * @uses MemberMessageExchangeType::setAny()
     * @param \StructType\ItemType $item
     * @param \StructType\MemberMessageType $question
     * @param string[] $response
     * @param string $messageStatus
     * @param string $creationDate
     * @param string $lastModifiedDate
     * @param \StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ItemType $item = null, \StructType\MemberMessageType $question = null, array $response = array(), $messageStatus = null, $creationDate = null, $lastModifiedDate = null, array $messageMedia = array(), \DOMDocument $any = null)
    {
        $this
            ->setItem($item)
            ->setQuestion($question)
            ->setResponse($response)
            ->setMessageStatus($messageStatus)
            ->setCreationDate($creationDate)
            ->setLastModifiedDate($lastModifiedDate)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\MemberMessageExchangeType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get Question value
     * @return \StructType\MemberMessageType|null
     */
    public function getQuestion()
    {
        return $this->Question;
    }
    /**
     * Set Question value
     * @param \StructType\MemberMessageType $question
     * @return \StructType\MemberMessageExchangeType
     */
    public function setQuestion(\StructType\MemberMessageType $question = null)
    {
        $this->Question = $question;
        return $this;
    }
    /**
     * Get Response value
     * @return string[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseForArrayConstraintsFromSetResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageExchangeTypeResponseItem) {
            // validation for constraint: itemType
            if (!is_string($memberMessageExchangeTypeResponseItem)) {
                $invalidValues[] = is_object($memberMessageExchangeTypeResponseItem) ? get_class($memberMessageExchangeTypeResponseItem) : sprintf('%s(%s)', gettype($memberMessageExchangeTypeResponseItem), var_export($memberMessageExchangeTypeResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param string[] $response
     * @return \StructType\MemberMessageExchangeType
     */
    public function setResponse(array $response = array())
    {
        // validation for constraint: array
        if ('' !== ($responseArrayErrorMessage = self::validateResponseForArrayConstraintsFromSetResponse($response))) {
            throw new \InvalidArgumentException($responseArrayErrorMessage, __LINE__);
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\MemberMessageExchangeType
     */
    public function addToResponse($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response[] = $item;
        return $this;
    }
    /**
     * Get MessageStatus value
     * @return string|null
     */
    public function getMessageStatus()
    {
        return $this->MessageStatus;
    }
    /**
     * Set MessageStatus value
     * @uses \EnumType\MessageStatusTypeCodeType::valueIsValid()
     * @uses \EnumType\MessageStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageStatus
     * @return \StructType\MemberMessageExchangeType
     */
    public function setMessageStatus($messageStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MessageStatusTypeCodeType::valueIsValid($messageStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MessageStatusTypeCodeType', is_array($messageStatus) ? implode(', ', $messageStatus) : var_export($messageStatus, true), implode(', ', \EnumType\MessageStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MessageStatus = $messageStatus;
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
     * @return \StructType\MemberMessageExchangeType
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
     * Get LastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }
    /**
     * Set LastModifiedDate value
     * @param string $lastModifiedDate
     * @return \StructType\MemberMessageExchangeType
     */
    public function setLastModifiedDate($lastModifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->LastModifiedDate = $lastModifiedDate;
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
        foreach ($values as $memberMessageExchangeTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeTypeMessageMediaItem instanceof \StructType\MessageMediaType) {
                $invalidValues[] = is_object($memberMessageExchangeTypeMessageMediaItem) ? get_class($memberMessageExchangeTypeMessageMediaItem) : sprintf('%s(%s)', gettype($memberMessageExchangeTypeMessageMediaItem), var_export($memberMessageExchangeTypeMessageMediaItem, true));
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
     * @return \StructType\MemberMessageExchangeType
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
     * @return \StructType\MemberMessageExchangeType
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
     * @return \StructType\MemberMessageExchangeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
