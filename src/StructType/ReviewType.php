<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviewType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ReviewType extends AbstractStructBase
{
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Rating;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReviewType
     * @uses ReviewType::setURL()
     * @uses ReviewType::setTitle()
     * @uses ReviewType::setRating()
     * @uses ReviewType::setText()
     * @uses ReviewType::setUserID()
     * @uses ReviewType::setCreationTime()
     * @uses ReviewType::setAny()
     * @param string $uRL
     * @param string $title
     * @param int $rating
     * @param string $text
     * @param string $userID
     * @param string $creationTime
     * @param \DOMDocument $any
     */
    public function __construct($uRL = null, $title = null, $rating = null, $text = null, $userID = null, $creationTime = null, \DOMDocument $any = null)
    {
        $this
            ->setURL($uRL)
            ->setTitle($title)
            ->setRating($rating)
            ->setText($text)
            ->setUserID($userID)
            ->setCreationTime($creationTime)
            ->setAny($any);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\ReviewType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\ReviewType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Rating value
     * @return int|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param int $rating
     * @return \StructType\ReviewType
     */
    public function setRating($rating = null)
    {
        // validation for constraint: int
        if (!is_null($rating) && !(is_int($rating) || ctype_digit($rating))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
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
     * @return \StructType\ReviewType
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
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\ReviewType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\ReviewType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
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
     * @return \StructType\ReviewType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
