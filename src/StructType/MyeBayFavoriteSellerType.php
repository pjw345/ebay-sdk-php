<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSellerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Characteristics of the My eBay Favorite Seller.
 * @subpackage Structs
 */
class MyeBayFavoriteSellerType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The favorite seller's eBay user ID.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: The name of the store owned by the favorite seller, if applicable.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBayFavoriteSellerType
     * @uses MyeBayFavoriteSellerType::setUserID()
     * @uses MyeBayFavoriteSellerType::setStoreName()
     * @uses MyeBayFavoriteSellerType::setAny()
     * @param string $userID
     * @param string $storeName
     * @param \DOMDocument $any
     */
    public function __construct($userID = null, $storeName = null, \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setStoreName($storeName)
            ->setAny($any);
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
     * @return \StructType\MyeBayFavoriteSellerType
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
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \StructType\MyeBayFavoriteSellerType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
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
     * @return \StructType\MyeBayFavoriteSellerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
