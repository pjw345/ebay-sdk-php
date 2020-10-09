<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerExcludeShipToLocationPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>SellerExcludeShipToLocationPreferences</b> container which is returned in the <b>GetUserPreferences</b> response to indicate which geographical regions and/or individual countries the seller has added as excluded
 * ship-to locations.
 * @subpackage Structs
 */
class SellerExcludeShipToLocationPreferencesType extends AbstractStructBase
{
    /**
     * The ExcludeShipToLocation
     * Meta information extracted from the WSDL
     * - documentation: One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded as a possible shipping location in the seller's My eBay Shipping Preferences. Sellers can also exclude Alaska/Hawaii and Army Post
     * Office/Fleet Post Office as possible shipping locations. For excluded countries, "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a> country codes are returned. <br><br> Domestically,
     * the seller can specify Alaska/Hawaii, US Protectorates (including American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau, Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to. Internationally, the sellers can
     * exclude entire regions (including Africa, Asia, Central America and Caribbean, Europe, Middle East, North America, Oceania, Southeast Asia, and South America) or specific countries within those regions. <br><br> If a buyer's primary ship-to location
     * is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on your item. <br><br> To see the valid exclude
     * ship-to locations for a specified site, call <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you
     * must enable Exclude Shipping Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href= "https://ebaydts.com/eBayKBDetails?KBid=1495" >HowTo: ExcludeShipToLocation</a>. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludeShipToLocation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerExcludeShipToLocationPreferencesType
     * @uses SellerExcludeShipToLocationPreferencesType::setExcludeShipToLocation()
     * @uses SellerExcludeShipToLocationPreferencesType::setAny()
     * @param string[] $excludeShipToLocation
     * @param \DOMDocument $any
     */
    public function __construct(array $excludeShipToLocation = array(), \DOMDocument $any = null)
    {
        $this
            ->setExcludeShipToLocation($excludeShipToLocation)
            ->setAny($any);
    }
    /**
     * Get ExcludeShipToLocation value
     * @return string[]|null
     */
    public function getExcludeShipToLocation()
    {
        return $this->ExcludeShipToLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeShipToLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeShipToLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeShipToLocationForArrayConstraintsFromSetExcludeShipToLocation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem) {
            // validation for constraint: itemType
            if (!is_string($sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem)) {
                $invalidValues[] = is_object($sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem) ? get_class($sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem) : sprintf('%s(%s)', gettype($sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem), var_export($sellerExcludeShipToLocationPreferencesTypeExcludeShipToLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeShipToLocation property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string[] $excludeShipToLocation
     * @return \StructType\SellerExcludeShipToLocationPreferencesType
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation = array())
    {
        // validation for constraint: array
        if ('' !== ($excludeShipToLocationArrayErrorMessage = self::validateExcludeShipToLocationForArrayConstraintsFromSetExcludeShipToLocation($excludeShipToLocation))) {
            throw new \InvalidArgumentException($excludeShipToLocationArrayErrorMessage, __LINE__);
        }
        $this->ExcludeShipToLocation = $excludeShipToLocation;
        return $this;
    }
    /**
     * Add item to ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SellerExcludeShipToLocationPreferencesType
     */
    public function addToExcludeShipToLocation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeShipToLocation[] = $item;
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
     * @return \StructType\SellerExcludeShipToLocationPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
