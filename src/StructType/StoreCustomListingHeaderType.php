<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of a Store custom listing header.
 * @subpackage Structs
 */
class StoreCustomListingHeaderType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta information extracted from the WSDL
     * - documentation: Display type for the custom listing header.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayType;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a logo.
     * - minOccurs: 0
     * @var bool
     */
    public $Logo;
    /**
     * The SearchBox
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a search box.
     * - minOccurs: 0
     * @var bool
     */
    public $SearchBox;
    /**
     * The LinkToInclude
     * Meta information extracted from the WSDL
     * - documentation: Link to include in the custom header.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreCustomListingHeaderLinkType[]
     */
    public $LinkToInclude;
    /**
     * The AddToFavoriteStores
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Add to Favorite Stores.
     * - minOccurs: 0
     * @var bool
     */
    public $AddToFavoriteStores;
    /**
     * The SignUpForStoreNewsletter
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Sign up for Store Newsletter.
     * - minOccurs: 0
     * @var bool
     */
    public $SignUpForStoreNewsletter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreCustomListingHeaderType
     * @uses StoreCustomListingHeaderType::setDisplayType()
     * @uses StoreCustomListingHeaderType::setLogo()
     * @uses StoreCustomListingHeaderType::setSearchBox()
     * @uses StoreCustomListingHeaderType::setLinkToInclude()
     * @uses StoreCustomListingHeaderType::setAddToFavoriteStores()
     * @uses StoreCustomListingHeaderType::setSignUpForStoreNewsletter()
     * @uses StoreCustomListingHeaderType::setAny()
     * @param string $displayType
     * @param bool $logo
     * @param bool $searchBox
     * @param \StructType\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @param bool $addToFavoriteStores
     * @param bool $signUpForStoreNewsletter
     * @param \DOMDocument $any
     */
    public function __construct($displayType = null, $logo = null, $searchBox = null, array $linkToInclude = array(), $addToFavoriteStores = null, $signUpForStoreNewsletter = null, \DOMDocument $any = null)
    {
        $this
            ->setDisplayType($displayType)
            ->setLogo($logo)
            ->setSearchBox($searchBox)
            ->setLinkToInclude($linkToInclude)
            ->setAddToFavoriteStores($addToFavoriteStores)
            ->setSignUpForStoreNewsletter($signUpForStoreNewsletter)
            ->setAny($any);
    }
    /**
     * Get DisplayType value
     * @return string|null
     */
    public function getDisplayType()
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid()
     * @uses \EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayType
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setDisplayType($displayType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid($displayType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreCustomListingHeaderDisplayCodeType', is_array($displayType) ? implode(', ', $displayType) : var_export($displayType, true), implode(', ', \EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
        return $this;
    }
    /**
     * Get Logo value
     * @return bool|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param bool $logo
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setLogo($logo = null)
    {
        // validation for constraint: boolean
        if (!is_null($logo) && !is_bool($logo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logo, true), gettype($logo)), __LINE__);
        }
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Get SearchBox value
     * @return bool|null
     */
    public function getSearchBox()
    {
        return $this->SearchBox;
    }
    /**
     * Set SearchBox value
     * @param bool $searchBox
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setSearchBox($searchBox = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchBox) && !is_bool($searchBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchBox, true), gettype($searchBox)), __LINE__);
        }
        $this->SearchBox = $searchBox;
        return $this;
    }
    /**
     * Get LinkToInclude value
     * @return \StructType\StoreCustomListingHeaderLinkType[]|null
     */
    public function getLinkToInclude()
    {
        return $this->LinkToInclude;
    }
    /**
     * This method is responsible for validating the values passed to the setLinkToInclude method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkToInclude method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLinkToIncludeForArrayConstraintsFromSetLinkToInclude(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomListingHeaderTypeLinkToIncludeItem) {
            // validation for constraint: itemType
            if (!$storeCustomListingHeaderTypeLinkToIncludeItem instanceof \StructType\StoreCustomListingHeaderLinkType) {
                $invalidValues[] = is_object($storeCustomListingHeaderTypeLinkToIncludeItem) ? get_class($storeCustomListingHeaderTypeLinkToIncludeItem) : sprintf('%s(%s)', gettype($storeCustomListingHeaderTypeLinkToIncludeItem), var_export($storeCustomListingHeaderTypeLinkToIncludeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkToInclude property can only contain items of type \StructType\StoreCustomListingHeaderLinkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LinkToInclude value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setLinkToInclude(array $linkToInclude = array())
    {
        // validation for constraint: array
        if ('' !== ($linkToIncludeArrayErrorMessage = self::validateLinkToIncludeForArrayConstraintsFromSetLinkToInclude($linkToInclude))) {
            throw new \InvalidArgumentException($linkToIncludeArrayErrorMessage, __LINE__);
        }
        $this->LinkToInclude = $linkToInclude;
        return $this;
    }
    /**
     * Add item to LinkToInclude value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomListingHeaderLinkType $item
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function addToLinkToInclude(\StructType\StoreCustomListingHeaderLinkType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreCustomListingHeaderLinkType) {
            throw new \InvalidArgumentException(sprintf('The LinkToInclude property can only contain items of type \StructType\StoreCustomListingHeaderLinkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LinkToInclude[] = $item;
        return $this;
    }
    /**
     * Get AddToFavoriteStores value
     * @return bool|null
     */
    public function getAddToFavoriteStores()
    {
        return $this->AddToFavoriteStores;
    }
    /**
     * Set AddToFavoriteStores value
     * @param bool $addToFavoriteStores
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setAddToFavoriteStores($addToFavoriteStores = null)
    {
        // validation for constraint: boolean
        if (!is_null($addToFavoriteStores) && !is_bool($addToFavoriteStores)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addToFavoriteStores, true), gettype($addToFavoriteStores)), __LINE__);
        }
        $this->AddToFavoriteStores = $addToFavoriteStores;
        return $this;
    }
    /**
     * Get SignUpForStoreNewsletter value
     * @return bool|null
     */
    public function getSignUpForStoreNewsletter()
    {
        return $this->SignUpForStoreNewsletter;
    }
    /**
     * Set SignUpForStoreNewsletter value
     * @param bool $signUpForStoreNewsletter
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setSignUpForStoreNewsletter($signUpForStoreNewsletter = null)
    {
        // validation for constraint: boolean
        if (!is_null($signUpForStoreNewsletter) && !is_bool($signUpForStoreNewsletter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signUpForStoreNewsletter, true), gettype($signUpForStoreNewsletter)), __LINE__);
        }
        $this->SignUpForStoreNewsletter = $signUpForStoreNewsletter;
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
     * @return \StructType\StoreCustomListingHeaderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
