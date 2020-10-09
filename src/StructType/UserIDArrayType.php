<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIDArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an array of eBay UserID entries.
 * @subpackage Structs
 */
class UserIDArrayType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: Unique eBay user ID for the user. Applies to eBay Motors Pro applications only. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $UserID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserIDArrayType
     * @uses UserIDArrayType::setUserID()
     * @uses UserIDArrayType::setAny()
     * @param string[] $userID
     * @param \DOMDocument $any
     */
    public function __construct(array $userID = array(), \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setAny($any);
    }
    /**
     * Get UserID value
     * @return string[]|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * This method is responsible for validating the values passed to the setUserID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserIDForArrayConstraintsFromSetUserID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $userIDArrayTypeUserIDItem) {
            // validation for constraint: itemType
            if (!is_string($userIDArrayTypeUserIDItem)) {
                $invalidValues[] = is_object($userIDArrayTypeUserIDItem) ? get_class($userIDArrayTypeUserIDItem) : sprintf('%s(%s)', gettype($userIDArrayTypeUserIDItem), var_export($userIDArrayTypeUserIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserID value
     * @throws \InvalidArgumentException
     * @param string[] $userID
     * @return \StructType\UserIDArrayType
     */
    public function setUserID(array $userID = array())
    {
        // validation for constraint: array
        if ('' !== ($userIDArrayErrorMessage = self::validateUserIDForArrayConstraintsFromSetUserID($userID))) {
            throw new \InvalidArgumentException($userIDArrayErrorMessage, __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Add item to UserID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\UserIDArrayType
     */
    public function addToUserID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The UserID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserID[] = $item;
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
     * @return \StructType\UserIDArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
